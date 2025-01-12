
function alertregister() {
  var messageText = "<?= $_SESSION['status'] ?? ''; ?>";
    if(messageText == 'You have been registered! Please verify your email!'){
        Swal.fire({
          title: "Thank you",
          text: messageText,
          icon: "success"
        });
      // unset($_SESSION['status']);
    }
    else if(messageText == 'Something wrong happened, please try again!'){
      Swal.fire({
          text: messageText
        });
      // unset($_SESSION['status']);
    }
    else if(messageText == 'Please input a valid email!'){
        Swal.fire({
          title: "Sorry",
          text: messageText,
          icon: "error"
        });
      // unset($_SESSION['status']);
    }
    else if(messageText == 'Password must be the same!'){
        Swal.fire({
          // title: "Password ",
          text: messageText,
          icon: "warning"
        });
      // unset($_SESSION['status']);
    }
    else if(messageText == 'Account already exists in the database!'){
        Swal.fire({
          // title: "Password ",
          text: messageText,
          icon: "info",
          
        });
      // unset($_SESSION['status']);
    }
}