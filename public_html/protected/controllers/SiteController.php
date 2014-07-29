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
		$output = array();
		$this->layout = 'homepage_layout';
        if(Yii::app()->session['AccessKey']){
	        $v = isset(Yii::app()->request->cookies['userData']) ? Yii::app()
		        ->request->cookies['userData']->value : '';
//	        var_dump($v);
	        if($v == ''){
		        die('name');
		        $input = null;
		        $input .= 'UserID='.Yii::app()->session['UserID'];//session user id;
		        $input .= '&AccessKey='.Yii::app()->session['AccessKey'];//session acesskey;

		        $myProfile = $this->curlPost('profileWebService/getProfile', $input);
		        $roomMyWorld = $this->curlPost('room/getRoomMyWorld', $input);
		        $roomYourWorld = $this->curlPost('room/getRoomYourWorld', $input);
		        $myContact = $this->curlPost('profileWebService/getContact', $input);

		        $output = array(
			        'profile'=>$myProfile->data,
			        'myWorlds'=> $roomMyWorld->data,
			        'yourWorlds'=> $roomYourWorld->data,
			        'contacts'=> $myContact->data
		        );
	        }
	        //getRoomMyWorld
	        $this->render('home', array('output'=>$output));
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