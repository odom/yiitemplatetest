<?php

class SiteController extends Controller {

	/**
	 * Declares class-based actions.
	 */
	public function actions() {
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}


	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex() {
        if(Yii::app()->session['AccessKey']){
            $this->redirect('/site/home');
        }else{
            $this->layout = 'register_layout';
            $this->render('index');
        }
	}



	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError() {
		if($error=Yii::app()->errorHandler->error) {
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}



	/**
	 * Displays the contact page
	 */
	public function actionContact() {
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}



	/**
	 * Displays the login page
	 */
	public function actionLogin() {
		if(!Yii::app()->session['AccessKey']){
		$model=new LoginForm;
		$this->layout = 'none';
		$this->render('login',array('model'=>$model));
		}
	}



	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout() {
		unset(Yii::app()->session['AccessKey']);
        $this->layout = 'register_layout';
        $this->redirect('/site');

	}



	/**
	 * Register Action
	 */
	public function actionRegister() {
		if(!Yii::app()->session['AccessKey']){
			$this->layout = 'none';
			$this->render('register');
		}
	}



	/**
	 * Home Action
	 */
	public function actionHome() {
        if(Yii::app()->session['AccessKey']){
		$this->layout = 'homepage_layout';
		$this->render('home');
        }else{
            $this->redirect('/site');
        }
	}


	/**
	 * Unsubscribe Action
	 */
	public function actionUnsubscribe() {
		$this->render('unsubscribe');
	}


	/**
	 * Subscribe Action
	 */
	public function actionSubscribe() {
		$this->render('subscribe');
	}



	/**
	 * Subscribe Action
	 */
	public function actionForgotpassword() {
		$this->render('forgotpassword');
	}


}