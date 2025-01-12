<?php
  session_start();
  if( isset($_SESSION['submitlogin'])){
    header("location: index.php");
    exit;
  }

$msg = "";
require_once('assets/config/db.php');

if(isset($_POST['submitlogin'])){
  $con = $connection_db;
  $email = $con->real_escape_string($_POST['email']);
  $password = $con->real_escape_string($_POST['password']);

  if ($email == "" || $password == "")
      {
    // $msg = "Please check your inputs!";
        $_SESSION['status'] = "Please check your inputs!";
        header(header: 'Location: login.php');
        exit(0);
       }
  else {
    $sql = $con->query("SELECT id, password, isEmailConfirmed FROM users WHERE email='$email'");
    if ($sql->num_rows > 0) 
    {
        $data = $sql->fetch_array();
        if (password_verify($password, $data['password'])) {
            if ($data['isEmailConfirmed'] == 0)
            {
              // $msg = "Please verify your email!";
              $_SESSION['status'] = "Please verify your email!";
              header(header: 'Location: login.php');
              exit(0);
            }
              else {
              // SET SESSION
              $_SESSION['submitlogin'] = true;
              // $msg = "You have been logged in";
              header("location:index.php");
            }
        } else{
          // $msg = "Please check your inputs!";
          $_SESSION['status'] = "Please check your inputs!";
          header(header: 'Location: login.php');
          exit(0);
        }
          
    } else {
      // $msg = "Please check your inputs!";
      $_SESSION['status'] = "Please check your inputs!";
      header(header: 'Location: login.php');
      exit(0);
    }
  }
}
?>
<!-- HTML Doc -->
<!DOCTYPE html>
<html>

<head>
  <title>Log In</title>
  <!-- CSS -->
  <link href="assets/css/loader.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/login.css">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
  <!-- Sweet Alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <div class="main">
    <!-- <input type="checkbox" id="chk" aria-hidden="true"> -->

    <div class="signup">
      
      <form method="post" action="login.php">
      <label for="chk" aria-hidden="true">Log In</label>
      <p>
      <!-- <?php //if ($msg != "") echo  $msg . "<br>" ?> -->
        </p>
        <input type="email" name="email" placeholder="Email" required="">
        <input type="password" name="password" placeholder="Password" required="">
        <input type="submit" name="submitlogin" value="Log In"><br>
        <div>
          <p>Don't have an account? <a class="link" href="register.php">Sign up Now</a></p>
        </div>
      </form>
    </div>
  </div>
  <!-- SCRIPT SWEET ALERT -->
  <script>
    var messageText = "<?= $_SESSION['status'] ?? ''; ?>";
    if(messageText == 'Please check your inputs!'){
      Swal.fire({
          text: messageText
        });
      <?php unset($_SESSION['status']); ?>
    }
    else if(messageText == 'Please verify your email!'){
        Swal.fire({
          title: "Sorry",
          text: messageText,
          icon: "error"
        });
      <?php unset($_SESSION['status']); ?>
    }
</script>
</body>

</html>