<?php

class UserController extends Controller {

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex() {
		$this->layout = 'register_layout';
		$this->render('index');
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
}