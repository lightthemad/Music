<?php

/**
 * this is an "alias" for current directory,
 * use it for including files
 */
define("root" , __DIR__);

include_once "model/services/routing.php";

/**
 * from now, you can add your own routes like route('url', [
 * 'controller_name',
 * 'function_name]);
 */
route('/', [
    'controller.php',
    'home'
]);

route('/music', [
    'controller.php',
    'music'
]);

