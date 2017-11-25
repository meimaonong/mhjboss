<?php
namespace app\controllers;

use Yii;

use app\common\controllers\BaseController;

class AjaxController extends BaseController
{

	public $enableCsrfValidation = false;

	public function actionRoute() {
		
		$params = $_REQUEST;
		
		// 获取接口
		$func = $params['func'];

		// 把接口数据从参数中去除
		unset($params['func']);

		// 发起请求
		$res = $this->httpPost($this->getFullApiAction($func), $params);

		echo json_encode($res);
		exit(0);

	}


    
}