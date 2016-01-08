<?php
/**
 * Created by PhpStorm.
 * User: 2015-218-pc
 * Date: 1/7/16
 * Time: 2:42 PM
 */

namespace FrameWork\Core;


class AutoLoad {



    public static function auto($class){

        //include_once('../../App_a/Controller/cone/cone.php') ;
       // include_once('../../App_a/frameWork/core/Base.php') ;
       // print_r(APP_PATH.$class);exit;
        //echo APP_PATH.str_replace("\\" , "/" , $class).".php" ;
        if(file_exists(APP_PATH.str_replace("\\" , "/" , $class).".php")){

            return  include_once(APP_PATH.str_replace("\\" , "/" , $class).".php");

        }else{

            include_once(APP_PATH.APP."/Controller/error/errorPage.php");
            throw new \Exception("can not find controller please check you url !");

        }


    }


}


spl_autoload_register(array('FrameWork\Core\AutoLoad' , 'auto'));

