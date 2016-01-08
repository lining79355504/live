<?php
/**
 * Created by PhpStorm.
 * User: 2015-218-pc
 * Date: 1/7/16
 * Time: 2:47 PM
 */

namespace frameWork\core;


abstract class Base {

    abstract public function run();

    public function __construct(){

        $this->run();

    }

}