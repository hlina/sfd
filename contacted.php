<?php 
  if(isset($_POST['submit'])){
      $to = "linahuang94@gmail.com"; 
      $from = $_POST['email']; // sender's Email address
      $firstname = $_POST['firstname']; //sender's first name
      $lastname = $_POST['lastname'];
      $subject = "Form submission";
      $subject2 = "Copy of your form submission";
      $message = $_POST['message'];
      $header = "From:" . $from;
      $header2 = "From:" . $to;
      mail($to, $subject, $message, $header);
      mail($from, $subject2, $header2); // sends a copy of the message to the sender
      header('Location: thankyou.html');
    }
?>
