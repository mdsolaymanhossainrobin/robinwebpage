<?php

$wp_include = "../wp-load.php";
$i = 0;
while (!file_exists($wp_include) && $i++ < 10) {
  $wp_include = "../$wp_include";
}
require($wp_include);

  $name = iconv("UTF-8", "ISO-8859-2", $_POST['name']);
  $email = iconv("UTF-8", "ISO-8859-2", $_POST['email']);
  $comments = iconv("UTF-8", "ISO-8859-2", $_POST['comments']);
  $thank_you = get_option('thank_you_text');

  require_once('phpmailer.php'); //call php mailer
  $mail = new PHPMailer();

  //set the parameters
  $mail->From = $email;
  $mail->FromName = $name;
  $mail->Subject = get_option('contact_subject');

  $address = get_option('contact_email');
  $mail->AddAddress($address, "Your Address");
  $mail->Body = "From: $name\nEmail address: $email\nMessage:\n\n$comments\n";

  $status = $mail->Send(); //send the message

  //write the results
  if (!$status)
   {
   echo "
        <div class=\"error\">
             <p>
             Mailer Error:   $mail->ErrorInfo
             </p>
        </div>";

   }
   else echo "
        <div class=\"success\">
             <p>
             $thank_you
             </p>
        </div>";

  $mail->ClearAddresses();

?>