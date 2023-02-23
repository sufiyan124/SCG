<?php

 if(isset($_POST)){
    //Email information
  $admin_email = "ushay1999@gmail.com";
  $email_from = $_POST['email'];
  $name = $_POST['first_name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $querylist = $_POST['querylist'];
  $comment = $_POST['comment'];
 
    $email_message = "Name: ".$name."\n";
	$email_message = "Email: ".$email."\n";
    $email_message .= "Phone: ".$phone."\n";    
    $email_message .= "Comment: ".$comment."\n";
	$email_message .= "Interested In: ".$querylist."\n";
  
  $headers = 'From: '.$email_from."\r\n". 
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
  //send email
  mail($admin_email, "Query from Website", $email_message, "From:" . $email);
  header('Location: '.$_SERVER['HTTP_REFERER']);

 //header("Location: javascript://history.go(-1)");
 
 
exit;
  }
  
  