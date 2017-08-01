<?php

/**
 * Class Flash
 *
 * @package \\${NAMESPACE}
 */
class Flash
{
    static function create($name, $value)
    {

        if(!isset($_SESSION['message'][$name])) {
            $_SESSION['message'][$name] = $value;

        }else{
            unset($_SESSION['message'][$name]);
            $_SESSION['message'][$name] = $value;
        }

    }

    static function show($name)
    {
        if(isset($_SESSION['message'][$name])) {
            $message = $_SESSION['message'][$name];
            unset($_SESSION['message'][$name]);
            return $message;
        }
        return null;

    }
}
