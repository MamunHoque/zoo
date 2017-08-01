<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'includes/functions.php';
include_once 'config.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['is_admin'])) {
    Flash::create('error','You have not correct right');
    header("location:index.php");
}

if(isset($_GET['animal_id'])) {
    $data =   array(
        'animal_id' => $_GET['animal_id']
    );
}else{
     die('You can not access this');
 }

if(isset($data['animal_id']) && !empty($data['animal_id'])){

    //Tries inserting into database and add response to variable

    $a = new Animal();

    $response = $a->delete($data['animal_id']);

    //Success
    if ($response == 'true') {
        Flash::create('success','Animal delete successfully.');
        header('Location: /admin-animals.php');
        exit;
    } else {
        //Failure
        mySqlErrors($response);
        Flash::create('error',$response);
        header('Location: /admin-animals.php');
        exit;

    }

    Flash::create('error',$response);
    header('Location: /admin-animals.php');
    exit;
}

