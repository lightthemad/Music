<?php

/**
 * Touch only if you know what are you doing!!1!1!1
 *
 */

function route($url, $controller = []){
    if ($url == $_SERVER['REQUEST_URI']) {
        include_once 'controller/' . $controller[0];
        $function = $controller[1];
        $function();
    }
}