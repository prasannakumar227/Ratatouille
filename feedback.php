<script>
function showSnackbar(){
if(document.getElementById("name").value !== "" && document.getElementById("email").value !== "" &&document.getElementById("phno").value !== "" && document.getElementById("message").value !== ""){
alert("Feedback form submitted");
}
else{
alert("Enter all details")
}
}
</script>
<html lang="en">
<head>
<title>Feedback</title>
<link rel="icon" href="logo.png" type="image/x-icon">

<link rel="stylesheet" href="feedback.css">
</head>
<body>
<div class="nav">
                <div class="nav-bar">
                    <div class="logo"><img src="logo.png"/><span>Ratatouille</span></div>
                    <div class="link"><a href="home.php">Home</a></div>
                    <div class="link"><a href="booktable.php">booktable</a></div>
                    <div class="link"><a href="orderonline.php">Order</a></div>
                    <div class="link"><a href="index.php#contactus">Contact Us</a></div>
                    <div class="link"><a href="index.php">Log out</a></div>
                </div>
            </div>
</div>
<div id="form">
<h3 style="padding:10px";>Tell us what do you think</h3>
<p id="error" style="color: white;"></p>
<form  method="post">
<label>Name</label><br>
<input type="text" id="name" name="name" class="input" onchange="checkname()" required><br>
<label>Email</label><br>
<input type="text" id="email" name="email" class="input" onchange="checkemail()" required><br>
<label>Phone Number</label><br>
<input type="text" id="phno" name="phno" class="input" onchange="checkphno()" required><br>
<label>Message</label><br>
<textarea name="message" id="message" class="input" name="message" required></textarea><br><br>
<input type="submit" name="submit" onsubmit="return showSnackbar();" value="Submit">
</form>
</div>
</div>
<div class="footer">
<footer >
<span>Contact Us</span>
<span>l.santhoshkumar@gmail.com</span>
</footer>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $con=mysqli_connect("localhost","root","","ratatouille");
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phno'];
    $msg=$_POST['message'];
    $add="insert into feedback values('$name','$email','$phone','$msg')";
    mysqli_query($con,$add);
    $con.close();
}
?>
<style>
    
body {
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
    margin: 0;
            background-image: url("https://images.unsplash.com/photo-1512314889357-e157c22f938d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8ZmVlZGJhY2t8ZW58MHx8MHx8&w=1000&q=80");
            background-repeat: no-repeat;
            background-size: cover;
}


#titleContainer {
    background-color: #333;
    color: #fff;
    padding: 20px;
}

.title {
    margin: 0;
}

#form {
    background-color: rgba(247, 247, 247,0.5);
    border-radius: 5px;
    margin: 50px auto;
    max-width: 500px;
    padding: 20px;
}

.input {
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
    margin-bottom: 20px;
    padding: 10px;
    width: 100%;
}
input label{
    color:black;
    font-weight:bold;
}

textarea.input {
    height: 100px;
}

input[type="submit"] {
    background-color: #333;
    border: none;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    font-size: 16px;
    padding: 10px;
    width: 100%;
}

.footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
}

.footer span {
    display: inline-block;
    margin: 0 10px;
}
.nav{
    width: 100%;
    background-color: rgba(5, 5, 5,0.4);
    height:70px;
  }
  .nav-bar{
    display: flex;
    margin:30px;
    margin-top: 0px;
    font-size: large;
    align-items: flex-end;
    position: relative;
    padding-top:5px;
    color:white;
  
  }
  .nav-bar a{
  color:ghostwhite;
  
  }
  .logo{
    padding-right: 570px;
    display: flex;
    margin-top: 0px;
    padding-bottom:10px;
    font-family:cursive;
    font-style:italic;
  }
  .logo span{
    padding-top:10px;
  }
  .logo img{
    height:30px;
    width:30px;
    padding-top:10px;
    padding-right:10px;
  }
  
  
  .link {
    padding:10px;
    margin-left: 50px;
    border-radius: 10px;
    transition: transform 0.2s;
    cursor: pointer;
    font-family:cursive;
    color:black;
  
  }
  .link:hover{
    color: white;
    transform: scale(1.1);
    background-color:#0091FF;
  
  }
  
  .logo span{
    font-weight:bold;
    font-size:25px;
  }
  a{
    text-decoration:none;
  }
</style>