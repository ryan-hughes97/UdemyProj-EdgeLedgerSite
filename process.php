<?php
  if (isset($_POST['email'])) {

    //Email Information
    $admin_email = "ryan@edgeledger.net";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    //Send Email
    mail($admin_email, "New Form Submission", $message . ' - ' . $phone, "From:" . $email);

    header('Location:http://edgeledger.net/success.html');
  }