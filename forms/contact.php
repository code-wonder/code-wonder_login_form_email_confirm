<?php
  session_start();
  //Import PHPMailer classes into the global namespace
  //These must be at the top of your script, not inside a function
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  require "../assets/vendor/autoload.php";
  require '../assets/vendor/phpmailer/phpmailer/src/Exception.php';
  require '../assets/vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require '../assets/vendor/phpmailer/phpmailer/src/SMTP.php';

  
  if(isset($_POST['submitContact']))
  {
      $fullname = $_POST['full_name'];
      $email = $_POST['email'];
      $subject = $_POST['subject'];
      $message = $_POST['message'];


        //Create an instance; passing `true` enables exceptions
      $mail = new PHPMailer(true);

      // try {
          //Server settings
          // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
          $mail->isSMTP();                                            //Send using SMTP
          $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
          $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
          $mail->Username   = 'sf.dev.task15@gmail.com';                     //SMTP username
          $mail->Password   = 'zthuknemfvhtporc';                               //SMTP password
          $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
          $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

          //Recipients
          $mail->setFrom('sf.dev.task15@gmail.com', 'Fajrin');
          $mail->addAddress('sf.dev.task15@gmail.com', 'Fajrin');     //Add a recipient
          // $mail->addAddress('ellen@example.com');               //Name is optional
          // $mail->addReplyTo('info@example.com', 'Information');
          // $mail->addCC('cc@example.com');
          // $mail->addBCC('bcc@example.com');

          //Content
          $mail->isHTML(true);                                  //Set email format to HTML
          $mail->Subject = 'New Enquiry - contact form';
          $mail->Body    = '<h3>Hello, You have new email</h3>
          <p><b>Fullname:</b> '.$fullname.'</p>
          <p><b>Email:</b> '.$email.'</p>
          <p><b>Subject:</b> '.$subject.'</p>
          <p><b>Message:</b> '.$message.'</p>
          '
          ;
        
       
        
          if($mail->send())
          {
            $_SESSION['status'] = "Thank you for contacting us!";
            header("Location: {$_SERVER["HTTP_REFERER"]}");
            exit(0);
          }
          else
          {
            $_SESSION['status'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            header(header: 'Location: index.php');
            exit(0);
          }

          
      // } 
      // catch (Exception $email) {
      //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      // }
  }
  else
  {
    header(header: 'Location: index.php');
    exit(0);
  }
  // $name= $_POST['name'];
  // $email= $_POST['email'];
  // $subject= $_POST["subject"];
  // $message= $_POST["message"];
  
  // require "../assets/vendor/autoload.php";

  // use PHPMailer\PHPMailer\PHPMailer;
  // use PHPMailer\PHPMailer\SMTP;

  // $mail = new PHPMailer(true);

  // // $mail->SMTPDebug = SMTP::DEBUG_SERVER;

  // $mail->isSMTP();
  // $mail->SMTPAuth = true;

  // $mail->Host = "smtp.gmail.com";
  // // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;\
  // $mail->SMTPSecure = 'ssl';
  // $mail->Port = 465;

  // $mail->Username = "sf.dev.task15@gmail.com";
  // $mail->Password = "zthuknemfvhtporc";

  // $mail->setFrom($email, $name);
  // $mail->addAddress("fajrinseptiana@gmail.com", ""); 

  // $mail->Subject = $subject;
  // $mail->Body = $message;

  // $mail->send();

  // // echo".sent-message";

?>
