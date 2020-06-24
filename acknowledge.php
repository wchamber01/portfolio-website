<?php
if (isset($_POST['send'])) {
    $to = 'williamchambers@gmail.com';
    $subject = 'Contact from portfolio site';
    $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
    $message .= 'Email: ' . $POST['email'] . "\r\n\r\n";
    $message .= 'Message: ' .$POST['message'] . "\r\n\r\n";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <webmaster@example.com>' . "\r\n";

    mail($to,$subject,$message,$headers);
    echo $message;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <h1>Thank You</h1>
    <p>Your message has been sent.</p>
    <h1>Oops!</h1>
    <p>Sorry, there was a problem sending your message.</p>
  </body>
</html>
