<?php
include('header.php');
require 'connect.php';
require 'PHPMailer/PHPMailerAutoload.php';
require 'credential.php';

if (isset($_POST['send'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg = $_POST['massage'];

  if (empty($name)  || empty($email) || empty($subject) || empty($msg)) {
    $_SESSION['msg'] = "All fields are Mendatory!";
    header('location: index.php');
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['msg'] = "Invalid Email Address!";
    header('location: index.php');
  } else 
  {

    $insertedby = $name;
    $ipAddess = $_SERVER['SERVER_ADDR'];
    $datetime = date('Y-m-d H:i:s', time());

    $sql = "INSERT INTO  `contactform` (`name`, `email`, `subject`, `massage`, `insertedBy`, `insertedDate`, `insertedIp`) 
          VALUES ('$name', '$email', '$subject', '$msg', '$insertedby', '$datetime', '$ipAddess')";
    // print_r($sql);
    // exit;

    $query = mysqli_query($conn, $sql);

    $html = "<table><tr><td>Name</td><td>$name</td></tr>><tr><td>Subject</td><td>$subject</td></tr>><tr><td>Massage</td><td>$msg</td></tr></table>";


    $mail = new PHPMailer;

    $mail->isSMTP();                                        // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                         // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                                 // Enable SMTP authentication
    $mail->Username = EMAILID;                              // SMTP username
    $mail->Password = PASSSWORD;
    $mail->SMTPSecure = 'tls';                             // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
    $mail->CharSet = 'UFT-8';
    $mail->setFrom(EMAILID, $name);
    $mail->addAddress(EMAILID);                            // Add a recipient
    $mail->addReplyTo(EMAILID, 'Information');

    $mail->isHTML(true);                                  // Set email format to HTML

    // $mail->Subject = ("$email ($subject)");
    $mail->Body    = '<div><h>' . $html . '</h4></div>';

    if (!$mail->send()) 
    {
      $_SESSION['successtitle'] = "Fail!";
      $_SESSION['success'] = "Something went wrong.Please try again!";
      $_SESSION['status_code'] = "error";
      header('location: index.php');
    } else {
      $_SESSION['successtitle'] = "Success!";
      $_SESSION['success'] = "Massage send successfully!";
      $_SESSION['status_code'] = "success";
      header('location: index.php');
    }
  }
}
