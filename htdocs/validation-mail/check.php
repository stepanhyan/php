<?php
  // print_r($_POST);

  $email = $_POST['email'];
  $message = $_POST['message'];

  $error = '';
  if(trim($email) == '')
    $error = 'Enter your Email';
  else if(trim($message) == '')
    $error = 'Enter your Message';
  else if(strlen($message) < 10 )
    $error = 'Message would be minimum 10 simbiols';

  if($error != ''){
    echo $error;
    exit();
  }

  require "../blocks/connect.php";
  $to = "hovhannisyan2808@gmail.com";
  $subject = "=?utf-8?B?".base64_encode("Test Text")."?=";
  $headers =[
    "From" => "$email\r\n",
    "Reply-to" => "$email\r\n",
    "Conect-type" => "text/html; charset=utf-8\r\n"
  ];
  mail($to, $subject, $message, $headers);

  header('Location: about.php')
?>
