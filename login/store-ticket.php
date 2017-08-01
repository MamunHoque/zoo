<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'includes/functions.php';
include_once 'config.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST['ticket_name'])) {
    $data =   array(
        'ticket_name'   => $_POST['ticket_name'],
        'description'   => $_POST['description'],
        'adult_price'   => $_POST['adult_price'],
        'kids_price'    => $_POST['kids_price'],
    );
}else{
     die('You can not access this');
 }
if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $file_ext = pathinfo($file_name,PATHINFO_EXTENSION);

    $expensions= array("jpeg","jpg","png");
    if(in_array($file_ext,$expensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }
    if($file_size > 2097152){
        $errors[]='File size must be excately 2 MB';
    }
    $file_name = "uploads/ticket-".rand('11111111',99999999).'.'.$file_ext;
    if(empty($errors)==true){
        move_uploaded_file($file_tmp,$file_name);
    }else{
        Flash::create('error',$errors);
        header('Location: /add-ticket.php');
        exit;
    }
}

if(isset($data['ticket_name']) && !empty($data['ticket_name'])){

    //Tries inserting into database and add response to variable

    $a = new Ticket();

    $response = $a->createTicket($data['ticket_name'],$data['description'],$data['adult_price'],$data['kids_price'],$file_name);

    //Success
    if ($response == 'true') {
        Flash::create('success','Ticket added successfully.');
        header('Location: /add-ticket.php');
        exit;


    } else {
        //Failure
        mySqlErrors($response);
        Flash::create('error',$response);
        header('Location: /add-ticket.php');
        exit;

    }
}

