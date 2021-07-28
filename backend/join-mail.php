<?php

if (isset($_POST['name'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $category = $_POST['category'];
    
        
        
    $to = 'hello@hackify.io';
    $subject = 'Join Hackify';
    $message = "<h2 style='font-size: 18px;'>Address</h2><br>
                <p style='font-size: 18px;'>".$address."</p><br>
                <h2 style='font-size: 18px;'>Phone</h2><br>
                <p style='font-size: 18px;'>".$phone."</p><br>
                <h2 style='font-size: 18px;'>Country</h2><br>
                <p style='font-size: 18px;'>".$country."</p><br>
                <h2 style='font-size: 18px;'>Category</h2><br>
                <p style='font-size: 18px;'>".$category."</p><br>
                ";
                
    $txt = "<p style='font-size: 18px;'>You have recieve a mail from ".$name." (".$gender.")</p><br>".$message;
    
    
    $headers = "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 

    // Additional headers 
    $headers .= 'From: '.$name.'<'.$email.'>' . "\r\n";


    if (mail($to, $subject, $txt, $headers)) {
        echo json_encode(array("res" => "success"));
    }else{
        echo json_encode(array("res" => "error"));
    }
}else{
    echo json_encode(array('res' => 'error'));
}