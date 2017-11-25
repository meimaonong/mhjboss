<?php

namespace app\controllers;

use Yii;

use app\common\controllers\BaseController;

class UserController extends BaseController
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->smarty->_smarty->display("user/index.html");
    }

    
}
