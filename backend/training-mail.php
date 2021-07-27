<?php

    

    if (isset($_POST['type'])) {
        
        $type =$_POST['type'];
        
        if ($type=='org') {
            
            

            
            $comName = $_POST['comName'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $part = $_POST['part'];
            
                
                
            $to = 'hello@hackify.io';
            $subject = 'Training for organisation';
            $message = "<h2 style='font-size: 18px;'>Number of participants in the organisation</h2><br>
                        <p style='font-size: 18px;'>".$part."</p><br>
                        <h2 style='font-size: 18px;'>Phone Number of organisation</h2><br>
                        <p style='font-size: 18px;'>".$phone."</p>";
                        
            $txt = "<p style='font-size: 18px;'>You have recieve a mail from ".$comName."</p><br>".$message;
            
            
            $headers = "MIME-Version: 1.0" . "\r\n"; 
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
 
            // Additional headers 
            $headers .= 'From: '.$comName.'<'.$email.'>' . "\r\n";


            if (mail($to, $subject, $txt, $headers)) {
                echo json_encode(array("res" => "success"));
            }else{
                echo json_encode(array("res" => "error"));
            }

        } elseif ($type == 'dev') {
            // echo json_encode(array("res" => "success"));
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $pack = $_POST['pack'];

            $to = 'hello@hackify.io';
            $subject = 'Training for developer';
            $message = "
                        <h2 style='font-size: 18px;'>Training package for individual</h2><br>
                        <p style='font-size: 18px;'>".$pack."</p><br>
                        <h2 style='font-size: 18px;'>Phone Number of developer</h2><br>
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
            echo json_encode(array("res" => "error"));
        }
                
    }else {
        echo json_encode(array("res" => "error"));
    }
?>