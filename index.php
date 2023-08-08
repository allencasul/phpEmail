<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $subject = htmlentities($_POST['subject']);
    $message = htmlentities($_POST['message']);

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'YOUR_EMAIL';
    $mail->Password = 'YOUR_GOOGLE_APP_PASSWORD';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress('YOUR_EMAIL');
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $message;
    $mail->send();

    header("Location: ./index.php?=email_sent!");
}
?>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/allencasul/lonica@ecf757694536701bca01f35abccd027d973b87cb/css/cdn/lonica.css" integrity="sha256-ZvOPRbk40bnqb7kYJpMnfIBOoIKaHXksgI9BWuvupYE=" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <script defer src="https://kit.fontawesome.com/1e8d61f212.js"></script>
</head>
<body class="center-absolute">
  <form class="display-grid row-gap-1-rem" method="post">
    <input class="box-shadow-primary" name="name" type="text" placeholder="Name" autocomplete="off" required />
    <input class="box-shadow-primary" name="email" type="email" placeholder="Email" autocomplete="off" required />
    <input class="box-shadow-primary" name="subject" type="text" placeholder="Subject" autocomplete="off" required />
    <textarea class="box-shadow-primary" name="message" placeholder="Message..." required></textarea>
    <button type="submit" name="send">
      Send <i class="fa-solid fa-paper-plane color-white margin-left-1-rem"></i>
    </button>
  </form>

  <script defer src="https://cdn.jsdelivr.net/gh/allencasul/lonica@ecf757694536701bca01f35abccd027d973b87cb/js/components.min.js" integrity="sha256-RDu3ysp4BVgm91duXwSsiZ4cx8UGcnSA2hxKLFZMjP8=" crossorigin="anonymous"></script>
</body>
</html>