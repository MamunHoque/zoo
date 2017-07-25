<?php
require 'login/includes/functions.php';
include_once 'login/config.php';

if(isset($_POST['name'])) {
    $data =   array(
        'name' => $_POST['name'],
        'description' => $_POST['description'],
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
    $file_name = "uploads/".rand('11111111',99999999).'.'.$file_ext;
    if(empty($errors)==true){
        move_uploaded_file($file_tmp,$file_name);
    }else{
        print_r($errors);
    }
}

if(isset($data['name']) && !empty($data['name'])){

    //Tries inserting into database and add response to variable

    $a = new NewUserForm();

    $response = $a->createAnimal($data['name'], $data['description'],  $file_name);

    //Success
    if ($response == 'true') {

        exit;

    } else {
        //Failure
        mySqlErrors($response);

    }
}

