<?php
error_reporting(E_ALL ^ E_NOTICE); // hide all basic notices from PHP

$name = trim($_POST['author']);
$email = trim($_POST['email']);
$url = trim($_POST['url']);
$comments = trim($_POST['comment']);



$emailTo = 'owwwlab@gmail.com';
$subject = 'Submitted message from '.$name;
$body = "Email from: ".$_SERVER['HTTP_HOST']."\n\nName: $name \n\nEmail: $email \n\nWebsite: $url \n\nSubject: $subject \n\nComments:\n\n $comments";
$headers = 'From: ' .' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

$mailed = false;
if (!empty($name) && !empty($email) && !empty($comments) )
	$mailed = mail($emailTo, $subject, $body, $headers);

if($mailed==true){
   echo json_encode(array('status' => 'ok')); 
}else{
   echo json_encode(array('status' => 'error')); 
}


?>
