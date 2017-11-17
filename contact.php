<?php
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
 
$EmailTo = "apostolmar@gmail.com";
$Subject = "New Message Received";

 
// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
 
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
 
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";
 
// send email
    $from = 'contact@apostolova.zzz.com.ua'; 	
	$headers =  'From:'.$from."\r\n".
                'X-Mailer: PHP/' . phpversion();
$success = mail($EmailTo, $Subject, $Body, $headers);

// redirect to success page
if ($success){
   echo "success";
   echo 'Your message to send! Thank you! <br>After 2 seconds you will be redirected to the main page.';
   echo '<meta http-equiv="refresh" content="2; URL=http://apostolova.zzz.com.ua/cv/">';
}else{
    echo "invalid";
}
