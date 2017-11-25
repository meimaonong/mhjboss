<?php

namespace app\common\controllers;

use Yii;
use yii\web\Controller;

/**
* BaseController
*/
class BaseController extends Controller
{
	public $smarty;

	/**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

	public function init(){
	    parent::init();
	    $this->smarty = \Yii::$app->smarty;
	}


	// 获取api完整路径【此处可做逻辑判断】
	public function getFullApiAction($action) {
		return API_URL . $action;
	}

	// 服务端GET请求
	public function httpModelGet($apiAction, $params = []) {
		return $this->httpGet($this->getFullApiAction($apiAction), $params);
	}

	// 服务端POST请求
	public function httpModelPost($apiAction, $params = []) {
		return $this->httpPost($this->getFullApiAction($apiAction), $params);
	}

	// post请求
	public function httpGet($apiAction, $params = []) {
		// 如果有登录token
		//Yii::$app->httpclient->requestHeaders['token'] = $_COOKIE['shipper_token'];

		$response = Yii::$app->httpclient->get($apiAction, $params, ['http_errors' => false]);
		return $response;
	}

	// post请求
	public function httpPost($apiAction, $params = []) {

		// 如果有登录token
		//Yii::$app->httpclient->requestHeaders['token'] = $_COOKIE['shipper_token'];

		$response = Yii::$app->httpclient->post($apiAction, $params, ['http_errors' => false]);
		return $response;
	}
	
}