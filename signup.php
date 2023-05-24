<!DOCTYPE html>
<?php if(isset($_POST['submit'])){
$con=mysqli_connect("localhost","root","","ratatouille");
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$checkusername="select count(username) from signup where username='$username'";
$ruser=mysqli_query($con,$checkusername);
$ruser1=mysqli_fetch_array($ruser);
$checkemail="select count(email) from signup where email='$email'";
$remail=mysqli_query($con,$checkemail);
$remail1=mysqli_fetch_array($remail); 
if($ruser1[0]!=0){
  $errorMsg = "Username already exists";
// echo "<h4 style='margin-left:500px; margin-top: 150px;color:red; font-weight:900; position:absolute;z- index:10;'>Username already exist</h4>";
}
if($remail1[0]!=0){
  $errorMsg = "Email already exist";
  // echo "<h4 style='margin-left:500px; margin-top: 237px;color:red; font-weight:900; position:absolute;z- index:10;'>Email already exist</h4>";
}
else{
$add="insert into signup values('$username','$email','$password')";
if(mysqli_query($con,$add)){

header("Location: login.php");
}}}
?>

<html>
<head>
<title>Customer Signup</title>
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

</script>

<body>
<div class="nav">
                <div class="nav-bar">
                    <div class="logo"><img src="logo.png"/><span>Ratatouille</span></div>
                    <div class="link"><a href="index.php">Home</a></div>
                    <div class="link"><a href="index.php#aboutus">About us</a></div>
                    <div class="link"><a href="index.php#contactus">Contact us</a></div>
                    <div class="link"><a href="login.php">Login</a></div>
                    <div class="link"><a href="signup.php">Signup</a></div>
                </div>
            </div>

<div id="full-page">

<div class="container">
  
<div id="heading">
<h1 class="design">SignUp</h1>
</div>
<div id="sub-head">
<!-- <h2 class=design>>Customer</h2> -->
</div>
<div id="form">
<form onsubmit="return checkCondition()" method="post">
<div id="input-1">
<input type="text" required placeholder="Username" name=
"username" id="username" ><br>

<input type="text" required placeholder="Email Id" name=
"email" id="email" ><br>

<input type="password" required placeholder="Password"
name="password" id="password"><br>

<input type="password" required placeholder="Reenter password" id="repassword"><br>
<div id="error" name="error"></div>
<?php echo isset($errorMsg) ? $errorMsg : ""; ?>
</div>
<div id="button" style="margin:0px auto;">
<span><a href="home.html" style="textdecoration: none;">
<input type="submit" value="Signup" name="submit" class="submit"></a>
</span>
</div>

</form>
Already Have an account?<a href="login.php">Login</a>
</div>
</div>
</div>
</body>
</html>
