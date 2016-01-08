<?php
/**
 * Created by PhpStorm.
 * User: 2015-218-pc
 * Date: 1/7/16
 * Time: 3:17 PM
 */

//define framework path
define( FRAMEWORK , "../../frameWork");

 // APP  name
define(APP , "App_a");

//define app path
define( APP_PATH , "../../");

include_once(FRAMEWORK."/core/AutoLoad.php");


include_once(FRAMEWORK."/core/RouterProcess.php");

//因为 namespace FrameWork\Core
FrameWork\Core\RouterProcess::createWebApplication(APP_PATH , APP);




