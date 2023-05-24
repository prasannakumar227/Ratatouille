<!DOCTYPE html>
<?php 
if(isset($_POST['submit'])){
  $con=mysqli_connect("localhost","root","","Ratatouille");
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $repassword=$_POST['repassword'];

  // Check if username already exists in the database
  $checkusername="select count(username) from signup where username='$username'";
  $ruser=mysqli_query($con,$checkusername);
  $ruser1=mysqli_fetch_array($ruser);
  if($ruser1[0]==0){
    $errorMsg = "Username does not exist";
  }
  else{
    // Check if email from the form matches the email from the database
    $checkemail="select email from signup where username='$username'";
    $remail=mysqli_query($con,$checkemail);
    $remail1=mysqli_fetch_array($remail);
    if($email != $remail1['email']){
        $errorMsg = "Invalid Email";
    }
   
        else{
          // Update password in the database
          $updatePassword = "UPDATE signup SET password='$password' WHERE username='$username'";
          if(mysqli_query($con,$updatePassword)){
            header("Location: login.php");
          }
        }
      }
    }

?>
<html>
<head>
<title>Forgot password</title>
<link rel="icon" href="logo.png" type="image/x-icon">
<link rel="stylesheet" href="signup-css.css">
</head>
<script>
function checkCondition() {
  var username = document.getElementById("username").value;
  var usernameRegex = /^[a-zA-Z][a-zA-Z\s]*$/;
  if (!usernameRegex.test(username)) {
    document.getElementById("error").innerHTML = "Invalid username";
    return false;
  }

  var email = document.getElementById("email").value;
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    document.getElementById("error").innerHTML = "Invalid email";
    return false;
  }

  var password = document.getElementById("password").value;
  var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
  if (!passwordRegex.test(password)) {
    document.getElementById("error").innerHTML = "Password must be at least 8 characters, contain at least one lowercase letter, one uppercase letter, and one number";
    return false;
  }

  var repassword = document.getElementById("repassword").value;
  if (password !== repassword) {
    document.getElementById("error").innerHTML = "Passwords do not match";
    return false;
  }

  // Reset error message
  document.getElementById("error").innerHTML = "";
  return true;
}

function togglePasswordVisibility() {
  var passwordInput = document.getElementById("password");
  var eyeBtn = document.getElementById("eyeBtn");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    eyeBtn.innerHTML = '<img src="https://www.svgrepo.com/show/325174/eye-close.svg" alt="Toggle password visibility">'; // Change eye icon to close eye icon
  } else {
    passwordInput.type = "password";
    eyeBtn.innerHTML = '<img src="https://www.svgrepo.com/show/1534/eye-open.svg" alt="Toggle password visibility">'; // Change close eye icon to eye icon
  }
}
function toggleRePasswordVisibility() {
  var passwordInput = document.getElementById("repassword");
  var eyeBtn = document.getElementById("eyeBtn");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    eyeBtn.innerHTML = '<img src="https://www.svgrepo.com/show/325174/eye-close.svg" alt="Toggle password visibility">'; // Change eye icon to close eye icon
  } else {
    passwordInput.type = "password";
    eyeBtn.innerHTML = '<img src="https://www.svgrepo.com/show/1534/eye-open.svg" alt="Toggle password visibility">'; // Change close eye icon to eye icon
  }
}

</script>

<body>
<div class="nav">
                <div class="nav-bar">
                <div class="logo"><img src="logo.png"/><span>Ratatouille</span></div>
                    <div class="link"><a href="home.php">Home</a></div>
                    <div class="link"><a href="index.php#aboutus">About us</a></div>
                    <div class="link"><a href="index.php#contactus">Contact us</a></div>
                    <div class="link"><a href="login.php">Login</a></div>
                    <div class="link"><a href="signup.php">Signup</a></div>
                </div>
            </div>
<div id="full-page">
<div class="container">
    
<div id="heading">
<h1 class=design>Forgot password</h1>
</div>
<div id="sub-head">
<!-- <h1>Customer</h1> -->
</div>
<div id="form">
<form onsubmit="return checkCondition()" method="post">
<div id="input-1">
<input type="text" required placeholder="Username" name=
"username" id="username" ><br>

<input type="text" required placeholder="Email Id" name=
"email" id="email" ><br>

<input type="password" required placeholder="Password" name="password" id="password">
<button type="button" class="eyeBtn" onclick="togglePasswordVisibility()">
<img src="https://www.svgrepo.com/show/1534/eye-open.svg" alt="Toggle password visibility">
</button><br>
<input type="password" required placeholder="Re Enter password" name="repassword" id="repassword"><br>
<button type="button" class="eyeBtn" onclick="toggleRePasswordVisibility()">
<img src="https://www.svgrepo.com/show/1534/eye-open.svg" alt="Toggle password visibility">
</button><br>
<div id="error"></div>
<?php echo isset($errorMsg) ? $errorMsg : ""; ?>
</div>
<div id="button" style="margin:0px auto;">
<a href="login.php" class="button">Back</a>
<span><a href="home.html">
<input type="submit" value="Signup" name="submit" class="submit"></a>
</span>
</div>
</form>
</div>
</div>
</div>
</body>
</html>
