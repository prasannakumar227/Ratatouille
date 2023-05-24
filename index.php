<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.png" type="image/icon type">
    <title>Ratatouille</title>
</head>

<body>
    <header class="body">
        <div class="container">
            <div class="nav">
                <div class="nav-bar">
                    <div class="logo"><img src="logo.png"/><span>Ratatouille</span></div>
                    <div class="link"><a href="index.php">Home</a></div>
                    <div class="link"><a href="#aboutus">About us</a></div>
                    <div class="link"><a href="#contactus">Contact us</a></div>
                    <div class="link"><a href="login.php">Login</a></div>
                    <div class="link"><a href="signup.php">Signup</a></div>
                </div>
            </div>
            <div class="banner">
                <div class="banner-content">
                    <h1 style="color:white">
                        Delicious Receipes
                    </h1>
                    <p class="text-white">
                        Our cuisine is proudly inspired by India, with a distinctly New York touch — served nightly in a space that is as elegant as it is lively.<br>We look forward to welcoming you in.
                    </p>
                    <a href="signup.php" class="primary-btn">Sign Up</a>
                </div>
            </div>
        </div>
        <div class="container-bar">
            <div class="row-d-flex-justify-content-center">
                <div class="menu-content">
                    <div class="title text-center">
                        <h1 class="mb-10">Our Top Rated Dishes</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="slider">
                <div class="row">
                    <div class="single-dish active">
                        <div class="thumb-1">
                            
                        </div>
                        <h4 class="text-uppercase pt-20 pb-20">Bread Fruit Cheese Sandwich</h4>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face
                            higher conduct.
                        </p>
                    </div>
                    <div class="single-dish">
                        <div class="thumb-2">
                            
                        </div>
                        <h4 class="text-uppercase pt-20 pb-20">Beef Cutlet with Spring Onion</h4>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face
                            higher conduct.
                        </p>
                    </div>
                    <div class="single-dish">
                        <div class="thumb-3">
                            
                        </div>
                        <h4 class="text-uppercase pt-20 pb-20">Meat with sauce &amp; Vegetables</h4>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct women face
                            higher conduct.
                        </p>
                    </div>
                </div>
            </div>

                    <div class="feature-section">
                        <div class="row-img">
                            <div class="single-feature">
                                <img src="img/f1.png" alt="">
                                <h4 class="pt-20">Refreshing Breakfast</h4>
                                <p>
                                    Lorem ipsum dolor sit ametcons ecteturadipis icing elit.
                                </p>
                            </div>
                            <div class="single-feature">
                                <img src="img/f2.png" alt="">
                                <h4 class="pt-20">Awesome Lunch</h4>
                                <p>
                                    Lorem ipsum dolor sit ametcons ecteturadipis icing elit.
                                </p>
                            </div>
                            <div class="single-feature">
                                <img src="img/f3.png" alt="">
                                <h4 class="pt-20">Soothing Dinner</h4>
                                <p>
                                    Lorem ipsum dolor sit ametcons ecteturadipis icing elit.
                                </p>
                            </div>
                            <div class="single-feature">
                                <img src="img/f4.png" alt="">
                                <h4 class="pt-20">Rich Quality Buffet</h4>
                                <p>
                                    Lorem ipsum dolor sit ametcons ecteturadipis icing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
        </div>
    </header>
                        <div class="footer">
                            <div class="details">
                                <div class="contact" id="aboutus">
                                    <h3>About Us</h3><br><br>
                                    <p>Sanjay K 20BCE0020 <br>Santhoshkumar L 20BCE0128 <br>Prasanna Kumar N 20BCE2121
                                    </p>
                                </div>
                                <div class="contact" id="contactus">
                                    <h3>Contact Us</h3><br><br>
                                    <p>Mail - Sanjay@gmail.com<br>Mobile - 0414 562486 <br>
                                    </p>
                                </div>
                            </div>
                            <h3 class="copyright">Copyright © 2023</h3>
                        </div>
    </body>
</html>
<style>
    html, body {
    max-width: 100%;
    overflow-x: hidden;
}
    *{
    margin: 0px;
    padding: 0px;
}
.container{
    display: flex;
    width: 100%;
    height: 100vh;
    flex-direction: column;
}
.nav{
    width: 100%;
    background-color:rgba(88, 87, 87,0.3);
    height:70px;
}
.nav-bar{
    display: flex;
    margin: 30px;
    margin-top: 0px;
    font-size: large;
    align-items: flex-end;
    position: relative;
    padding-top:5px;
    color:white;
}
.link{
    color:black;
}
.logo{
    padding-right: 600px;
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
a{
    text-decoration: none;
    color:black;
}
.banner{
    margin-top: 30px;
    width: 100vw;
    height: 100vh;
    background-image: url("header-bg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
.banner-content{
    display: flex;
    margin: 20px;
    width: 500px;
    height: 300px;
    margin-top: 200px;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    margin-left: 150px;
}
.text-head{
    padding: 5px;
    font-weight: 400;
    letter-spacing: 3px;
}
.banner-content h1 {
    padding: 5px;
    font-size: 45px;
}
.text-white {
    padding: 5px;
    color: #fff !important;
}


.primary-btn {
    display: flex;
    padding: 5px;
    padding-left: 30px;
    padding-right: 30px;
    margin-top: 10px;
    width: 140px;
    height: 30px;
    background-color: #f42f2c;
    border: 1px solid transparent;
    color: #fff;
    border-radius: 30px;
    justify-content: center;
        align-items: center;
}
.container-bar {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 50px;
}
.mb-10{
    padding: 20px;
}
.single-dish{
    display: flex;
    margin: 20px;
    width: 300px;
    height: 320px;
    position: relative;
        animation-name: example;
        animation-duration: 4s;
        animation-iteration-count: infinite;
        flex-direction: column;
            align-items: center;
        text-align: center;
    border-radius: 20px;
}
.row-d-flex-justify-content-center{
    margin-bottom: 30px;
}
.thumb{
    width: 300px;
    height: 200px;
background-color: black;
margin-bottom: 20px;
border-radius: 20px;
}
.row{
    display: flex;
}
.feature-section{
    width: 100%;
    margin: 0px;
    display: flex;
    margin-top: 100px;
    margin-right: 50px;
    margin-left: 50px;
    justify-content: center;
        align-items: center;
}
.row-img{
    display: flex;
    align-items: center;
        flex-direction: row;
}
.single-feature{
    width: 250px;
    height: 250px;
    display: flex;
    flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
}
.footer-area {
    background-color: #222;
    height: 500px;
    width: 1400px;
    margin: 0%;
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.pt-20{
    padding: 10px;
}
.thumb-1{
    width: 200px;
    height: 200px;
    background-image: url("https://a.cdn-hotels.com/gdcs/production196/d970/cd40235b-5990-4067-8c05-c7d04711a312.jpg?impolicy=fcrop&w=800&h=533&q=medium");
    background-repeat: no-repeat;
    background-size: cover;
    border-radius: 20px;
}
.thumb-2 {
    width: 200px;
        height: 200px;
    background-image: url("https://www.licious.in/blog/wp-content/uploads/2021/01/shutterstock_1221708583.jpg");
    background-repeat: no-repeat;
    background-size: cover;
        border-radius: 20px;
}
.thumb-3 {
    width: 200px;
        height: 200px;
    background-image: url("https://a.cdn-hotels.com/gdcs/production18/d507/0d126a9e-7aac-4d81-831d-bfd4ff0c11db.jpg");
    background-repeat: no-repeat;
    background-size: cover;
        border-radius: 20px;
}
.footer{
    background-color: #222;
    width: 100%;
    color: #fff;
    height: 400px;
}
.details{
    margin: 50px;
    margin-top: 100px;
    display: flex;
    flex-direction: row;
    align-items: center;
}
.contact{
    margin: 20px;
    margin-left: 90px;
    width: 300px;
    height: 200px;
    margin-top: 100px;
}
.copyright{
    padding-left: 100px;
}

</style>