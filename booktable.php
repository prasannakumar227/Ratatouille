<!DOCTYPE html>
<?php
if(isset($_POST['submit'])){
$conn = mysqli_connect("localhost", "root", "", "Ratatouille");
if ($conn === false){
die ("ERROR: Could not connect.".mysqli_connect_error());
}
$city = isset($_REQUEST['city']) ? $_REQUEST['city'] : '';
$date = isset($_REQUEST['date']) ? $_REQUEST['date'] : '';
$time = isset($_REQUEST['time']) ? $_REQUEST['time'] : '';
$quantity = isset($_REQUEST['quantity']) ? $_REQUEST['quantity'] : '';
$sql = "INSERT INTO `booktable`(`city`, `date`, `time`, `chairs`) VALUES ( '$city','$date','$time','$quantity')";
if (mysqli_query($conn, $sql))
{
    if ($date != '' && $time != '' && $quantity != '0')
    {
        echo "<script> showSnackbar(); </script>";
     } 
    else{}
} 
else{
    echo "ERROR: Failure in storing data ". mysqli_error($conn); }
    mysqli_close($conn); 
 }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a table</title>
    <link rel="icon" href="logo.png" type="image/icon type">

<script>
function showSnackbar(){
    if(document.getElementById("date").value !== "" && document.getElementById("time").value !== "" && document.getElementById("quantity").value !=="")
    {
        alert("Table booked successfully!"); 
    }
}
</script>

</head>
<body>
<div class="nav">
                <div class="nav-bar">
                    <div class="logo"><img src="logo.png"/><span>Ratatouille</span></div>
                    <div class="link"><a href="home.php">Home</a></div>
                    <div class="link"><a href="orderonline.php">Order</a></div>
                    <div class="link"><a href="index.php#contactus">Contact us</a></div>
                    <div class="link"><a href="feedback.php">Feedback</a></div>
                    <div class="link"><a href="index.php">Log out</a></div>
                </div>
            </div>
   
    <form method="post">
        <br><br><br><br><br>
        <fieldset>
            <legend>Book a table</legend>
            <label for="city" style="color: white; font-size: 1.2rem;">City</label><br>
            <select name="city" id="city" required>
                <option value="hyderabad" style="opacity: 0.9;">Hyderabad</o ption>
                <option value="chennai">Chennai</option>
                <option value="bangalore">Bangalore</option>
            </select><br><br>
            <label for="date" id="datevalue" style="color: white; font-size: 1.2rem;">Date</label><br>
            <input type="date" id="date" name="date" size="15" required><br>
            <br>
            <label for="time" id="time1" style="color: white; font-size: 1.2rem;">Time</label><br>
            <input type="time" id="time" name="time" required><br><br>
            <label for="quantity" id="quantity1" style="color: white; font-size: 1.2rem;">Chairs</label><br>
            <input type="number" id="quantity" name="quantity" min="1" max="15" required><br><br>
            <input type="submit" onclick="return alert('Table Booked');"  class="submit"  name="submit"  value="Submit">
        </fieldset>
    </form>
</body>

<script>
// var currentDate = new Date().toISOString().slice(0, 10);
// document.getElementById("date").setAttribute("min", currentDate);
// var currentTime = new Date().toLocaleTimeString('en-US', {hour12: false});
// document.getElementById("time").setAttribute("min", currentTime);

var currentDate = new Date();
currentDate.setDate(currentDate.getDate() + 1); // Add one day to current date
var tomorrow = currentDate.toISOString().slice(0, 10);
document.getElementById("date").setAttribute("min", tomorrow);
</script>

<style>
body {
    background-image: url('https://akam.cdn.jdmagicbox.com/images/icontent/booktable/bookatable.jpg');
    background-size: cover;
}

h1 {
    background-color: rgba(0, 0, 0, 0.5);
} 

form {
    max-width: 800px;
    margin:auto;
}

#city,
#date,
#time,
#quantity {
    font-size: 1.2rem;
    opacity: 0.8;
    font-weight: bold;
    margin:10px;
    
}
.submit {
    margin:20px;
    background-color:white;
    border-radius: 10px;
  transition: transform 0.2s;
  cursor: pointer;
  padding:10px;
  font-size: 1.2rem;
    opacity: 0.8;
    font-weight: bold;
    height:40px;
}
.submit:hover{
    color: white;
  transform: scale(1.1);
  background-color:#0091FF;
}


.error {
    color: #FF0000;
}

a {
    text-decoration: none;
  }  


fieldset {
    opacity: 0.9;
    width: 50%;
    text-align: center;
    margin: auto;
    font-weight: bold;
    padding:30px;
}

legend {
    background-color:#0091FF;
    height:30px;
    width:150px;
    color: white;
    padding-top:10px;
    border-radius:5px;
}

  
.nav{
  width: 100%;
  background-color:rgba(88, 87, 87,0.3);
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
  padding-right: 610px;
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
  background-image: linear-gradient(90deg, rgba(51,8,103,1) 0%, rgba(14,64,237,1) 50%);
  /* background-image: linear-gradient(to right, #30CFD0 0%, #330867 100%); */
  -webkit-background-clip: text;
  color: transparent;
  font-weight:bold;
  font-size:25px;
}

</style>

</html>