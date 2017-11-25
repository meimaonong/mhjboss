<?php
namespace app\libs;
use Yii;
use Smarty;
define("BASEPATH",Yii::$app->basePath);
define('SMARTY_TMPDIR',BASEPATH.'/views/tpl/');//放置模版的目录 //自己创建
define('SMARTY_CACHEDIR',BASEPATH . '/views/tpl_c/');//缓存文件目录
define('LIFTTIME',0);
define('SMARTY_DLEFT', '<!--{');//左限定符
define('SMARTY_DRIGHT', '}-->');//右限定符

class CSmarty {


    public $_smarty;


    function __construct(){

        $this->_smarty = new Smarty();
        $this->_smarty->template_dir = SMARTY_TMPDIR;
        $this->_smarty->compile_dir = SMARTY_CACHEDIR;

        $this->_smarty->compile_check = true;
        $this->_smarty->caching = 0;
        $this->_smarty->cache_dir = SMARTY_CACHEDIR;
        $this->_smarty->left_delimiter  =  SMARTY_DLEFT;
        $this->_smarty->right_delimiter =  SMARTY_DRIGHT;
        $this->_smarty->cache_lifetime = LIFTTIME;

    }
    function init(){

    }
}
