<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./homePage.css" rel="stylesheet">
    <link rel="icon" href="logo.png" type="image/x-icon">
    <title>Home</title>
</head>
<body>

    <div class="Banner">
    <div class="nav">
                <div class="nav-bar">
                    <div class="logo"><img src="logo.png"/><span>Ratatouille</span></div>
                    <div class="link"><a href="home.php">Home</a></div>
                    <div class="link"><a href="index.php#aboutus">About us</a></div>
                    <div class="link"><a href="index.php#contactus">Contact us</a></div>
                    <div class="link"><a href="feedback.php">feedback</a></div>
                    <div class="link"><a href="index.php">Log out</a></div>
                </div>
            </div>
        <div class="Food-Type">
            <div class="name">Itailain</div>
            <div class="name">Mexican</div>
            <div class="name">Chinese</div>
        </div>
        <div class="chooseType">
            <div class="container">
                <a href="booktable.php">
                    <div class="Book-table">
                        <span>Book Table</span>
                    </div>
                </a>
            </div>
           <div class="container">
            <a href="orderonline.php">
                <div class="Order-online">
                    <span>Order Online</span>
                </div>
            </a>
           </div>
           <div class="container">
            <a href="feedback.php">
                <div class="feedback">
                    <span>feedback</span>
                </div>
            </a>
           </div>
        </div>
    </div>
</body>
</html>
<style>
    * {
    margin: 0px;
    padding: 0px;
}

.Banner {
    display: flex;
    width: 100vw;
    height: 100vh;
    background-image: url("https://images.unsplash.com/photo-1552566626-52f8b828add9?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8cmVzdGF1cmFudHxlbnwwfHwwfHw%3D&w=1000&q=80");
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    flex-direction: column;
}

.Name-Hotel {
    margin: 30px;
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;
}
.feedback{
    display: flex;
    width: 320px;
        height: 300px;
        border-radius: 20px;
        background-color: rgb(206, 206, 206);
        margin-right: 80px;
        background-image: url("https://thumbs.dreamstime.com/b/feedback-topic-mobile-tablet-many-light-bulbs-69117421.jpg");
        background-repeat: no-repeat;
            background-size: cover;
            align-items: flex-end;
                justify-content: center;
        margin-left: 70px;
}
.Food-Type {
    display: flex;
    background-color: rgb(142, 142, 142);
    margin-top:30px;
}

.chooseType {
    display: flex;
    justify-content: space-between;
    margin-top: 50px;
}

.name {
    display: flex;
    width: 480px;
    justify-content: center;
    align-items: center;
    margin: 20px;
    font-size: 25px;
    color: black;
}

.Book-table {
    display: flex;
    width: 320px;
        height: 300px;
    border-radius: 20px;
    background-color: rgb(206, 206, 206);
    margin-left: 80px;
    background-image: url("https://images.squarespace-cdn.com/content/v1/5d9b9ce07088ee0ea2b8a805/1571161374948-2S7M0RNZ98IP0PRY066E/W14_P3_Reservations_tips-1-300x225.jpg");
    background-repeat: no-repeat;
        background-size: cover;
    align-items: flex-end;
        justify-content: center;
    margin-left: 120px;
}

.Order-online {
    display: flex;
    width: 320px;
        height: 300px;
    border-radius: 20px;
    /* background-color: rgb(206, 206, 206) */
    background-image: url("https://thumbs.dreamstime.com/b/woman-using-laptop-to-order-food-delivery-table-top-view-133374594.jpg");
    background-repeat: no-repeat;
        background-size: cover;
    align-items: flex-end;
        justify-content: center;
    margin-left: 120px;

}
a{
    display: flex;
    text-decoration: none;
    color: black;
}
span{
    display: flex;
    align-items: center;
    justify-content: center;
    padding-bottom: 10px;
    font-size: larger;
}

.Order-online:hover{
width: 330px;
    height: 320px;
    transition-duration: 0.5s;
}

.Book-table:hover {
width: 330px;
    height: 320px;
    transition-duration: 0.5s;
}
.feedback:hover {
    width: 330px;
    height: 320px;
    transition-duration: 0.5s;
}
.container{
    display: block;
    width: 500px;
    height: 300px;
    opacity:0.9;
}
.container span{
    color:black;
    font-weight: bolder;
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
  padding-right: 580px;
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
</style>