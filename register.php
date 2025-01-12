<?php
session_start();

$msg = "";
require_once('assets/config/db.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// require "assets/vendor/autoload.php";
require 'assets/vendor/phpmailer/phpmailer/src/Exception.php';
require 'assets/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'assets/vendor/phpmailer/phpmailer/src/SMTP.php';

if(isset($_POST['submit'])){
  $con = $connection_db;
  // $con = new mysqli('localhost', 'root', '', 'db_user');

		$name = $con->real_escape_string($_POST['name']);
		$email = $con->real_escape_string($_POST['email']);
		$password = $con->real_escape_string($_POST['password']);
		$cPassword = $con->real_escape_string($_POST['cPassword']);

		$mail = new PHPMailer(true);

		if ($name == "" || $email == "" || $password != $cPassword)
			{
        // $msg = "Please check your inputs!";
        $_SESSION['status'] = "Password must be the same!";
        header(header: 'Location: register.php');
        exit(0);
      }
		else {
			$sql = $con->query("SELECT id FROM users WHERE email='$email'");
			if ($sql->num_rows > 0) {
				// $msg = "Email already exists in the database!";
        $_SESSION['status'] = "Account already exists in the database!";
        header(header: 'Location: register.php');
        exit(0);
			} else 
        {
           try{
                $token = 'qwertzuiopasdfghjklyxcvbnmQWERTZUIOPASDFGHJKLYXCVBNM0123456789!$/()*';
                $token = str_shuffle($token);
                $token = substr($token, 0, 10);

                $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

                $con->query("INSERT INTO users (name,email,password,isEmailConfirmed,token)
                  VALUES ('$name', '$email', '$hashedPassword', '0', '$token');
                ");
                
                // PHPMailer
                include_once "assets/vendor/phpmailer/phpmailer/src/PHPMailer.php";

                $mail = new PHPMailer(true);

                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'example@example';              	    //SMTP username
                $mail->Password   = 'your username password';               //SMTP password
                $mail->SMTPSecure = 'ssl';                                  //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                $mail->setFrom('example@example', 'Admin');
                $mail->addAddress($email, $name);
                $mail->Subject = "Please verify email!";
                $mail->isHTML(true);
                $mail->Body = " Please click on the link below:<br><br>
                          
                <a href='localhost/project/confirm.php?email=$email&token=$token'>Click Here</a>
                ";


                if($mail->send())
                {
                  // Proses data form
                  $_SESSION['status'] = "You have been registered! Please verify your email!";
                  header("Location: {$_SERVER["HTTP_REFERER"]}");
                  exit(0);
                  // $msg = "You have been registered! Please verify your email";
                }
                else
                {
                  // $msg = "Something wrong happened, please try again!"; 
                  $_SESSION['status'] = "Something wrong happened, please try again!";
                  header(header: 'Location: register.php');
                  exit(0);
                }
            }  
            catch (Exception $email) {
                  // $msg = "Please input a valid email!";
                  
                  $_SESSION['status'] = "Please input a valid email!";
                  $con->query("DELETE FROM users WHERE name='$name' and isEmailConfirmed = 0");
                  header(header: 'Location: register.php');
                  
                  exit(0);
              }      
        }
      }
}
?>
<!-- HTML Doc -->
<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="assets/css/register.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
  <!-- Sweet Alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- <script type="text/javascript" src="assets/js/registeralert.js"></script> -->


</head>

<body>
  <div class="main">
    <!-- <input type="checkbox" id="chk" aria-hidden="true"> -->

    <div class="signup">
      
      <form method="post" action="register.php">
        <label for="chk" aria-hidden="true">Sign up</label>
        <!-- <p style="color: white; text-align: center;"> -->
          <?php //if ($msg != "") echo  $msg . "<br>" ?>
        <!-- </p> -->
        <input name="name" placeholder="Name" required="">
        <input type="email" name="email" placeholder="Email" required="">
        <input type="password" name="password" placeholder="Password" required="">
        <input type="password" name="cPassword" placeholder="Repeat Password" required="">
        <input type="submit" name="submit" value="Sign up">
      </form>
    </div>

    <!-- <div class="login">
      <form>
        <label for="chk" aria-hidden="true">Login</label>
        <input type="email" name="email" placeholder="Email" required="">
        <input type="password" name="pswd" placeholder="Password" required="">
        <input type="submit" name="submitlogin" value="Login">
      </form>
    </div>
  </div> -->

<!-- script sweet alert -->
<script>
    var messageText = "<?= $_SESSION['status'] ?? ''; ?>";
    if(messageText == 'You have been registered! Please verify your email!'){
        Swal.fire({
          title: "Thank you",
          text: messageText,
          icon: "success"
        });
        <?php unset($_SESSION['status']); ?>
    }
    else if(messageText == 'Something wrong happened, please try again!'){
      Swal.fire({
          text: messageText
        });
      <?php unset($_SESSION['status']); ?>
    }
    else if(messageText == 'Please input a valid email!'){
        Swal.fire({
          title: "Sorry",
          text: messageText,
          icon: "error"
        });
      <?php unset($_SESSION['status']); ?>
    }
    else if(messageText == 'Password must be the same!'){
        Swal.fire({
          // title: "Password ",
          text: messageText,
          icon: "warning"
        });
      <?php unset($_SESSION['status']); ?>
    }
    else if(messageText == 'Account already exists in the database!'){
        Swal.fire({
          // title: "Password ",
          text: messageText,
          icon: "info",
          
        });
      <?php unset($_SESSION['status']); ?>
    }
</script>
</body>

</html>
