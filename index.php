<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="icon3.jpg" type="image/jpg"/>
    <title>Para-vie</title>
</head>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
*{
    font-family: "Poppins", sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
}
header{
    display: flex;
   justify-content: space-between;
   align-items: center;
    position: fixed;
    z-index: 999;
    width: 100%;
    height: 70px;
    background-color: #145A32;

}
.log{
   gap: 40px;
    display: flex;
   margin-right: 20px;
}
.flex{
    gap: 60px;
    display: flex;
    margin-left: 570px;
}
.flex a{
    color:white;
    text-decoration: none;
    font-size: 20px;
    font-weight: 500;
}
.log a i {
    color:white  ;
    text-decoration: none;
    font-size: 30px;
}
.home h1{
    margin: 57px;
    color:  #145A32;
    font-size: 3em;
    font-weight: 600;
}
.home p{
    max-width: 600px;
    font-size: 26px;
    font-weight: 500;
    margin-left: 20px;
    color:  #145A32;
   
    
   
}
.home img{
    float: right;
    width: 400px;
    margin-right: -200px;
    margin-left: 330px;
    margin-top: 30px;
}
.home{
    width: 100%;
    height: 600px;
    display: flex;
    align-items: center;
    background-repeat: repeat-x;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
   
   
}
.btn{
    background-color: #145A32;
    color: white;
    border-radius: 17px;
    font-size:25px;
    margin-left: 340px;
    width: 240px;
   

}
.btn:hover{
    color: white;
    transform: scale(1.1);
    transition: 0.4s;
}
.btn a :hover{
    color: white;
    transform: scale(1.1);
    transition: 0.4s;
}
.btn a{
    color: white;
    text-decoration: none;
}
.us{
    background-color: #145A32;
   
    height: 500px;
    width: 100%;
}
.us h3{
  color: white;
  text-align: center;
  padding: 10px;
}
.card{
    width: 340px;
    height: 170px;
    padding: 20px;
}
.cole{
    display:flex;
    gap: 40px;
   justify-content: space-evenly;
   margin-left: 20px;
}
.tit{
    display: flex;
    justify-content: space-evenly;
}
.tit i{
    font-size: 23px;
    margin-top: 5px;
}
.card p{
    font-size: 19px;
    font-weight: 400;
    margin-left: 20px;
}
.card p:hover{
    font-size: 19px;
    font-weight: 400;
    margin-left: 20px;
    color: white;
}
.card:hover{
    transition: 0.4s;
    transform: scale(1.1);
    box-shadow: 0 8px 16px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);
    background-color: transparent;
    backdrop-filter: blur(10px);
    border: 2px solid white;
    color: white;
    opacity: .7;
}
.contact h3{
   color: #145A32;
   text-align: center;
   padding: 20px;
   font-weight: 600;
}
.contact p{
    max-width: 600px;
    font-size: 26px;
    font-weight: 500;
    margin-left: 20px;
    color:  #145A32;
}
.social-icons{
    margin-left: 550px;
}
.social-icons a{
    color: black;
    font-size: 18px;
}

</style>
<body>
<header>
 <div class="flex">
    <a href="#home">Home</a>
    <a href="#ser">Service</a>
    <a href="#contact">Contact Us</a>
 </div>  
 <div class="log">
            <a href="register.php" class="loge"><i class="fa-solid fa-right-to-bracket"> </i></a>
            <a href="login.php" class="loge"><i class="fa-solid fa-user"> </i></a>
       </div>    
       
</header>
<section id="home" class="home">
       <div class="cont">
        <h1>Para-vie</h1>
        <p>Welcome to Para-vie, <br> 
        your beauty ally for radiant and glowing skin. <br> Explore our selection of natural cosmetic products <br> and discover your new skincare routine.</p>
         <button class="btn"><a href="login.php">Shop now</a></button>
       </div>
        <img src="Sephora.jpeg" alt="">
        
    </section>
    <!-- Shop -->
    <section id="ser" class="us">
      <h3>Our service</h3><br>
      
        <div class="ser">
        <div class="cole">
        <div class="card">
            <div class="tit">
            <h4>Delivery Service</h4>
            <i class="fa-solid fa-truck"></i>
            </div>
            <p> Quick delivery to get products to customers promptly.</p>
        </div>
        <div class="card">
            <div class="tit">
            <h4>Exclusive Deals</h4>
            <i class="fa-solid fa-ranking-star"></i>
            </div>
            <p>Special offers and discounts for customers.</p>
        </div>
        <div class="card">
            <div class="tit">
            <h4>Secure Payments</h4>
            <i class="fa-regular fa-credit-card"></i>
            </div>
            <p> Safety measures for online transactions.</p>
        </div>
        </div>

        <br>
        <div class="cole">
        <div class="card">
            <div class="tit">
            <h4>Easy Returns</h4>
            <i class="fa-solid fa-arrows-spin"></i>
            </div>
            <p>Hassle-free return policy for customer satisfaction.</p>
        </div>
        <div class="card">
            <div class="tit">
            <h4>Personalized Recommendations</h4>
            <i class="fa-regular fa-user"></i>
            </div>
            <p> Tailored advice for individual needs.</p>
        </div>
        <div class="card">
            <div class="tit">
            <h4>24/7 Customer Support</h4>
            <i class="fa-solid fa-phone"></i>
            </div>
            <p> Responsive service for any inquiries or concerns.</p>
        </div>
        </div>
        </div>
</section>
<section id="contact" class="contact">
    <h3>Our Contact</h3>
     <p>Connect with us on our social media pages <br>
      to stay updated on the latest releases, <br> exclusive offers,  <br>
      and inspiring beauty tips!</p>
      <div class="social-icons">
        <a href="#insta"><i class="fa-brands fa-instagram"> Our  Insagram  page</i></a><br><br>
        <a href="#tiktok"><i class="fa-brands fa-tiktok"> Our  Tik Tok  page</i></a><br><br>
        <a href="#facebook"><i class="fa-brands fa-facebook"> Our Facebook page</i></a>
      </div>
</section>
</body>
</html>