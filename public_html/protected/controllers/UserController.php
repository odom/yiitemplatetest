<?php

class UserController extends Controller {

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex() {
		var_dump(Yii::app()->params['url']); die();
//		if(Yii::app()->session['AccessKey']){
//
//		}else{
//			$this->layout = 'register_layout';
//			$this->render('index');
//		}

	}


	public function init() {
		$this->layout = 'resetpassword';
	}

	public function actionLogout() {
		unset(Yii::app()->session['AccessKey']);
		unset(Yii::app()->session['UserID']);
		$this->layout = 'register_layout';
		$this->redirect('/site');

	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionActivate() {
		$get = $_GET;
		$success = TRUE;
		if (isset($get['UserID'])) {
			$url ='';
			if($get['env'] == 'dev') {
				$url = 'http://23.23.171.236/afinos-development/profileWebService/verifyRegister';
			} else {
				$url = 'http://23.23.171.236/afinos/profileWebService/verifyRegister';
			}

			$postFields = 'userIDEncrypt='.$get['UserID'];
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec ($ch);
			curl_close ($ch);
			$activate['response'] = $response;
			$this->render('activate', $activate);
		} else {
			$this->redirect(Yii::app()->homeUrl);
		}
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionResetPassword() {
		$get = $_GET;
		if (isset($get['message'])) $resetPassword['message']=$get['message'];
		if (isset($get['ID']) && isset($get['SessionExpired'])) {
			$resetPassword['ID'] = $get['ID'];
			$resetPassword['sessionExpired'] = $get['SessionExpired'];
			$resetPassword['env'] = $get['env'];
			$this->render('resetPassword', $resetPassword);
		} else {
			$this->redirect(Yii::app()->homeUrl);
		}
	}

	public function actionResetSuccess() {
		$this->render('resetSuccess');
	}

	public function actionReset() {
		$post = $_POST;
		if ($post["password"][0] == $post["password"][1]) {
			$url ='';
			if($post['env'] == 'dev') {
				$url = 'http://ec2-23-23-171-236.compute-1.amazonaws.com/afinos-development/profileWebService/setNewPassword/';
			} else {
				$url = 'http://ec2-23-23-171-236.compute-1.amazonaws.com/afinos/profileWebService/setNewPassword/';
			}

			$postFields = 'EncryptUserID='.$post['user']['ID'].'&SessionExpired='.$post['user']['SessionExpired'].'&NewPassword='.$post["password"][0];
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec ($ch);
			curl_close ($ch);
			$response = json_decode($response);
			$message = $response->message;
			if ( $response->code == 0) {
				$this->render('resetFail', $resetFail=array('code'=> $message->code, 'desc' => $message->description));
			} else {
				$this->render('resetSuccess', $resetSuccess=array('code'=> $message->code, 'desc' => $message->description));
			}
		} else {
			$param = array("message" => " Password does not match.",
					"ID" => $post['user']['ID'],
					"SessionExpired" => $post['user']['SessionExpired'],
					"env" => $post['env']);
			$this->redirect($this->createUrl('user/resetpassword', $param));
		}
	}

	public function actionLogin(){
		$postFields = 'UserName='.$_POST['username'].'&Password='.$_POST['password'];
		$response = $this->curlPost('profileWebService/login',$postFields);
		$message = $response->message;
		if ( $response->code == 0) {
			$this->render('resetFail', $resetFail=array('code'=> $message->code, 'desc' => $message->description));
		} else {
			Yii::app()->session['AccessKey'] = $response->data->AccessKey;
			Yii::app()->session['UserID'] = $response->data->UserID;
			$this->redirect('/site/home');
		}
	}

	public function actionRegister(){
		$data = '';
		$data .= 'UserName='.$_POST['username'];
		$data .='&Password='.$_POST['password'];
		$data .='&Email'.$_POST['email'];
		$response = $this->curlPost('profileWebService/register', $data);

		if ( $response->code == 0) {
			$this->render('resetFail', $resetFail=array('code'=> $response->message->code, 'desc' => $response->message->description));
		} else {
			var_dump($response);die();
			$this->redirect('/site');
		}
	}

	public function actionChangePassword(){
		$data = '';
		$data .='AccessKey='.$_POST['AccessKey'];
		$data .='&UserID='.$_POST['userId'];
		$data .='&CurrentPassword='.$_POST['oldPassword'];
		$data .='&NewPassword='.$_POST['newPassword'];

		$response = $this->curlPost('profileWebService/changePassword', $data);
		if ( $response->code == 0) {
			$this->render('resetFail', $resetFail=array('code'=> $response->message->code, 'desc' => $response->message->description));
		} else {
			var_dump($response);die();
			$this->redirect('/site/login');
			$this->render('resetSuccess', $resetFail=array('code'=> $response->message->code, 'desc' => $response->message->description));
		}
	}

	public function actionGetMailRecoveryPassword(){
		 $data = '';
		$data .= 'AlternativeEmail='.$_POST['email'];
		$data .= '&UserName='.$_POST['username'];
		$response = $this->curlPost('profileWebService/getMailRecovery', $data);
		if ( $response->code == 0) {
			$this->render('resetFail', $resetFail=array('code'=> $response->message->code, 'desc' => $response->message->description));
		} else {
//			var_dump($response);die();
			$this->redirect('/site/login');
		}
	}


}