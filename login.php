<!DOCTYPE html>
<?php 
if(isset($_POST['submit'])){
    $con=mysqli_connect("localhost","root","","Ratatouille");
    $username=$_POST['username'];
    $password=$_POST['password'];
    $checkuser="select count(username) from signup where username='$username' and password='$password'";
    $ruser=mysqli_query($con,$checkuser);
    $ruser1=mysqli_fetch_array($ruser);
    if($ruser1[0]==0){
        echo "<h4 style='margin-left:500px; margin-top: 150px;color:red; font-weight:900; position:absolute;z- index:10;'>Invalid username or password</h4>";
    }else{
        
        header("Location: home.php");
    }
}
?>
<html>
<head>
<title>Login</title>
<link rel="icon" href="logo.png" type="image/x-icon">
<link rel="stylesheet" href="signup-css.css"> 
</head>
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
<h1 class="design">Login</h1>
</div>
<div id="form">
<form method="post">
<div id="input-1">
<input type="text" required placeholder="Username" name="username" id="username"><br>
<input type="password" required placeholder="Password" name="password" id="password"><br>
</div>
<div id="button" style="margin:0px auto;">
<span>
<input type="submit" value="Login" name="submit" class="submit" onsubmit=>
</span>
</div>
</form>

<div>
    <a href="fgtpass.php">Forgot password</a>
</div><br>
New User?<a href="signup.php">Signup</a>
</div>
</div>
</div>
</body>
</html>