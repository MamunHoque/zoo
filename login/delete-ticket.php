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

if(isset($_GET['ticket_id'])) {
    $data =   array(
        'ticket_id' => $_GET['ticket_id']
    );
}else{
     die('You can not access this');
 }

if(isset($data['ticket_id']) && !empty($data['ticket_id'])){

    //Tries inserting into database and add response to variable

    $a = new Ticket();

    $response = $a->delete($data['ticket_id']);

    //Success
    if ($response == 'true') {
        Flash::create('success','Ticket delete successfully.');
        header('Location: /admin-tickets.php');
        exit;
    } else {
        //Failure
        mySqlErrors($response);
        Flash::create('error',$response);
        header('Location: /admin-tickets.php');
        exit;

    }

    Flash::create('error',$response);
    header('Location: /admin-tickets.php');
    exit;
}

