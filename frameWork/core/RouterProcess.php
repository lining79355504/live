<?php
/**
 * Created by PhpStorm.
 * User: 2015-218-pc
 * Date: 1/7/16
 * Time: 2:46 PM
 */

namespace FrameWork\Core;


class RouterProcess {

    public static function createWebApplication($app_path , $app_name){


        //print_r($_SERVER);
        //echo ltrim($_SERVER['REQUEST_URI'] , '/' ) ;
        //print_r(explode('/' , ltrim($_SERVER['REQUEST_URI'] , '/' )));
        //$controllerPath = explode('/' , ltrim($_SERVER['REQUEST_URI'] , '/' ));
        //echo $app."/Controller".$_SERVER['REQUEST_URI']."()" ;
        $class = str_replace("/" , "\\" ,"\\".$app_name."/Controller".$_SERVER['REQUEST_URI']);
        //echo $class ;
        //$class = "\\App_a\\Controller\\cone\\cone" ;
        //return new \App_a\Controller\cone\cone();     // \App_a\Controller\cone\cone();
        try {

            return new $class ;

        }catch (\Exception $e){
            //print_r($e->getMessage());
            $class = "\\".$app_name."\\Controller\\error\\errorPage" ;   //define a  error page   message
            return new  $class ;
        }
    }






}

