<?php

namespace app\controllers;

use Yii;

use app\common\controllers\BaseController;

class IndexController extends BaseController
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->smarty->_smarty->display("index/index.html");
    }

    
}
