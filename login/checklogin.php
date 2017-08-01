<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//DO NOT ECHO ANYTHING ON THIS PAGE OTHER THAN RESPONSE
//'true' triggers login success
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
ob_start();
include 'config.php';
require 'includes/functions.php';

// Define $myusername and $mypassword
$username = $_POST['myusername'];
$password = $_POST['mypassword'];

// To protect MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);

$response = '';
$loginCtl = new LoginForm;
$conf = new GlobalConf;
$lastAttempt = checkAttempts($username);
$max_attempts = $conf->max_attempts;


//First Attempt
if ($lastAttempt['lastlogin'] == '') {

    $lastlogin = 'never';
    $loginCtl->insertAttempt($username);
    $response = $loginCtl->checkLogin($username, $password);

} elseif ($lastAttempt['attempts'] >= $max_attempts) {

    //Exceeded max attempts
    $loginCtl->updateAttempts($username);
    $response = $loginCtl->checkLogin($username, $password);

} else {

    $response = $loginCtl->checkLogin($username, $password);

};

if ($lastAttempt['attempts'] < $max_attempts && $response != 'true') {

    $loginCtl->updateAttempts($username);
    $resp = new RespObj($username, $response);
    $respo= strip_tags($resp->response);
    Flash::create('error',$respo);
    header('Location: /index.php');
    exit;

} else {

    $resp = new RespObj($username, $response);
    $response = strip_tags($resp->response);

    Flash::create('success','You successfully login.');
    header('Location: /index.php');
    exit;

}

unset($resp);
ob_end_flush();
