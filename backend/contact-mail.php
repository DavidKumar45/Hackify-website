<?php

if (isset($_POST['name'])) {
    // echo json_encode(array("res" => "success"));
    
    $name = $_POST['name'];
    $subj = $_POST['subject'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $messg = $_POST['message'];
    
        
        
    $to = 'vincentovie39@gmail.com';
    $subject = 'Why hackify page contact';
    $message = "<h2 style='font-size: 18px;'>".$name." contacted about ".$subj."</h2><br>
                <p style='font-size: 18px;'>".$messg."</p><br>
                <h2 style='font-size: 18px;'>Phone Number of ".$name."</h2><br>
                <p style='font-size: 18px;'>".$phone."</p>";
                
    $txt = "<p style='font-size: 18px;'>You have recieve a mail from ".$name."</p><br>".$message;
    
    
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