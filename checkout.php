<?php
$conn = mysqli_connect("localhost", "root", "", "ratatouille");
//check  connection
if ($conn === false){
die ("ERROR: Could not connect.".mysqli_connect_error());
}
$itemarray = array();
$quantityarray = array();
$sql = "SELECT itemid, quantity from customerorder WHERE orderid = (select MAX(orderid) from customerorder);";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
while($row = mysqli_fetch_assoc($result)) { 
    // echo $row['itemid'] . "<br>";
array_push($itemarray, $row['itemid']); array_push($quantityarray, $row['quantity']);
}
}
$i = 0;
 echo "
<center>
<table border='2px solid black' cellspacing='10px' cellpadding='10px' st
yle='text-align: center; color: white; background-
color: rgba(5, 5, 5, 0.8); margin-bottom: 100px;'> <tr>
<th>Item Name</th> <th>Item Price</th> <th>Item quantity</th>
<th>Cost</th>
</tr>
";
$total = 0;
foreach($itemarray as $item){ $cost = 0;
$sql = "SELECT itemname, itemprice from menuitems WHERE itemid ='$item'; ";
$result1 = mysqli_query($conn, $sql);
if (mysqli_num_rows($result1) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result1)) {
$cost = $row['itemprice'] * $quantityarray[$i]; $total += $cost;
echo " <tr>
<td> ". $row['itemname'] ."</td>
<td> ". $row['itemprice'] ."</td> <td> ". $quantityarray[$i] ."</td> <td> ". $cost."</td>
</tr>
";
$i++; }
} }
 echo " <tr>
<td colspan='4'>Total Price: ". $total ."</td>
    </tr>
</center>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Checkout</title>
    <link rel="icon" href="logo.png" type="image/icon type">
</head>
<body>
<div class="nav">
                <div class="nav-bar">
                    <div class="logo"><img src="logo.png"/><span>Ratatouille</span></div>
                    <div class="link"><a href="home.php">Home</a></div>
                    <div class="link"><a href="booktable.php">Book table</a></div>
                    <div class="link"><a href="index.php#contactus">Contact us</a></div>
                    <div class="link"><a href="feedback.php">feedback</a></div>
                    <div class="link"><a href="index.php">Log out</a></div>
                </div>
            </div>
</body>
</html>



<style>
body {
    background-image: url('orderonline-bg.jpg');
    background-attachment: fixed;
    background-size: cover;
    height: 100%;
    background-position: center;
    margin:0;
    color:white;
}

a {
    text-decoration: none;
    
  }  

table{
    text-align:center;
    background-color: rgba(0, 0, 0, 0.5);
    margin-top:50px;
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
  padding-right: 500px;
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