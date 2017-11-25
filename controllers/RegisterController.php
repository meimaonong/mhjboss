<?php

namespace app\controllers;

use Yii;

use app\common\controllers\BaseController;

class RegisterController extends BaseController
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->smarty->_smarty->display("register/index.html");
    }

    
}
