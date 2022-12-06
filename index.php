<?php

require_once('core/Common.php');
require_once('core/MY_model.php');
require_once('core/MY_controller.php');

require_once('controller/Home_controller.php');
require_once('controller/Category_controller.php');



switch ($_SERVER['REDIRECT_URL']) {
    case '/':
        $home = new Home_controller();
        $home->index();
        break;
    
    case '/danh-muc':
        $category = new Category_controller();
        $category->index();
        break;
    
    default:
        # code...
        break;
}

?>