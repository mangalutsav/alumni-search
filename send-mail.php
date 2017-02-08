<?php
//vars
$subject = $_POST['subject'];
$to = explode(',', $_POST['to'] );

$from = $_POST['email'];

//data
$msg = "NAME: "  .$_POST['name']    ."<br>\n";
$msg .= "EMAIL: "  .$_POST['course']    ."<br>\n";
$msg .= "WEBSITE: "  .$_POST['email']    ."<br>\n";
$msg .= "COMMENTS: "  .$_POST['comments']    ."<br>\n";

//Headers
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: <".$from. ">" ;

$smtp = Mail::factory('smtp', array(
        'host' => 'smtp.gmail.com',
        'port' => '587',
        'auth' => true,
        'username' => 'EMAIL',
        'password' => 'PASSWORD'
    ));

$mail = $smtp->send($to, $headers, $msg);
?>
