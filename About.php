<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "veiwport" content = "width=device-width, initial-scale = 1">
    <title>Home | ByteMe Co.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<!-- bootstrap cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --blue:#00b8b8;
   --black:#333;
   --white:#fff;
   --light-color:#666;
   --light-bg:#eee;
   --border:.2rem solid rgba(0,0,0,.1);
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none !important;
 
}

*::-webkit-scrollbar{
   height: .5rem;
   width: 1rem;
}

*::-webkit-scrollbar-track{
   background-color: transparent;
}

*::-webkit-scrollbar-thumb{
   background-color: var(--black);
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
   scroll-behavior: smooth;
   scroll-padding-top: 6.5rem;
}

section{
   padding:7rem 1rem;
}

.heading{
   text-align: center;
   font-size: 4rem;
   color:var(--blue);
   text-transform: uppercase;
   font-weight: bolder;
   margin-bottom: 3rem;

}

.link-btn{
   display: inline-block;
   padding:1rem 3rem;
   border-radius: .5rem;
   background-color: var(--blue);
   cursor: pointer;
   font-size: 1.7rem;
   color:var(--white);
   
}

.link-btn:hover{
   background-color: var(--black);
   color:var(--white);
}

.header{
   padding:2rem;
   border-bottom: var(--border);
   background-color: var(--white);
 
}

.header .active{
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border:0;
}
.logo img {
    display: flex;
    width: 30x;
    height: 30px;
    
}




.header .logo{
   font-size: 2rem;
   color:var(--black);
}

.header .logo span{
   color:var(--blue);
}

.header .nav a{
   margin:0 1rem;
   font-size: 1.7rem;
   color:var(--black);
}

.header .nav a:hover{
   color:var(--blue);
}

#menu-btn{
   font-size: 2.5rem;
   color:var(--black);
   cursor: pointer;
   display: none;
}



.about .row{
   min-height: 50vh;
}

.about .content span{
   font-size: 2rem;
   color:var(--blue);
}

.about .content h3{
   font-size: 3rem;
   color:var(--black);
   margin-top: 1rem;
}

.about .content p{
   padding:1rem 0;
   font-size: 1.4rem;
   color:var(--light-color);
   line-height: 2;
}

.process{
   background-color: var(--white);
}

.process .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:2rem;
}

.process .box-container .box{
   background-color:#39c9c9;
   padding:2rem;
   border-radius: .5rem;
   text-align: center;
   box-shadow: var(--box-shadow);
}

.process .box-container .box img{
   height: 20rem;
   margin:1rem 0;
}

.process .box-container .box h3{
   font-size: 2rem;
   color:var(--white);
   margin:1.5rem 0;
}

.process .box-container .box p{
   font-size: 1.5rem;
   color:var(--white);
   line-height: 2;
}

.reviews{
   background-color: var(--light-bg);
}

.reviews .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:2rem;
}

.reviews .box-container .box{
   background-color: var(--white);
   text-align: center;
   border-radius: .5rem;
   box-shadow: var(--box-shadow);
   padding:2rem;
}

.reviews .box-container .box img{
   height: 20rem;
   width: 20rem;
   border-radius: 50%;
}

.reviews .box-container .box p{
   padding:2rem 0;
   line-height: 2;
   font-size: 1.5rem;
   color:var(--light-color);
   margin-bottom: 0;
}

.reviews .box-container .box .stars{
   padding:.5rem 1.5rem;
   border-radius: .5rem;
   background-color: var(--light-bg);
   margin-bottom: 2rem;
   display: inline-block;
}

.reviews .box-container .box .stars i{
   font-size: 1.5rem;
   color:var(--blue);
}

.reviews .box-container .box h3{
   font-size: 2rem;
   color:var(--black);
}

.reviews .box-container .box span{
   color:var(--light-color);
   font-size: 1.5rem;
}


.footer{
   background-color: var(--light-bg);
}

.footer .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
   gap:3rem;
}

.footer .box-container .box{
   text-align: center;
}

.footer .box-container .box i{
   height: 5rem;
   width: 5rem;
   border-radius: 50%;
   line-height: 5rem;
   font-size: 2rem;
   background-color: var(--blue);
   color:var(--white);
}

.footer .box-container .box h3{
   font-size: 2rem;
   margin:2rem 0;
   color:var(--black);
}

.footer .box-container .box p{
   font-size: 1.5rem;
   color:var(--light-color);
   text-transform: none;
}

.footer .credit{
   text-align: center;
   border-top: var(--border);
   padding-top: 2rem;
   margin-top: 2rem;
   font-size: 2rem;
   color:var(--light-color);
}

.footer .credit span{
   color:var(--blue);
}





/* media queries  */

@media (max-width:991px){

   html{
      font-size: 60%;
   }

   .header .link-btn{
      display: flex;
   }

   section{
      padding:5rem 2rem;
   }

}

@media (max-width:768px){

   section{
      padding:3rem 1rem;
   }

   #menu-btn{
      display: inline-block;
      transition: .2s linear;
   }

   #menu-btn.fa-times{
      transform: rotate(180deg);
   }

   .header .nav{
      position: absolute;
      top:99%; left:0; right:0;
      background-color: var(--white);
      border-top: var(--border);
      border-bottom: var(--border);
      padding:1rem 0;
      text-align: center;
      flex-flow: column;
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
      transition: .2s linear;
   }

   .header .nav.active{
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
   }

   .header .nav a{
      margin:1rem 0;
      font-size: 2rem;
   }

   .home{
      background-position: left;
   }

   .home .content{
      width: auto;
   }

}


</style>

<body>

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

       
      <a href="Index.php" class="logo"><img src="Pictures/logog.png" style=float:left alt="CreatingPossbility">Creating<span>Possibility</span></a>

         <nav class="nav">
            <a href="Index.php">Home</a>
            <a href="About.php">About Us</a>
            <a href="Contact.php">Contact</a>
         </nav>

         <a href="Login_Employer-Seeker.php" class="link-btn">LOGIN</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>
<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="Pictures/about-us.png" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>Lorem ipsum dolor sit</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam cupiditate vero in provident ducimus. Totam quas labore mollitia cum nisi, sint, expedita rem error ipsa, nesciunt ab provident. Aperiam, officiis!</p>
            <a href="#contact" class="link-btn">Contact Us</a>
         </div>

      </div>

   </div>

</section>


<section class="reviews" id="reviews">

   <h1 class="heading"> MISSION AND VISION </h1>

   <div class="box-container container">

      <div class="box">
         <img src="Pictures/mission.png" alt="">
         <h3>MISSION</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>

        
      </div>

      <div class="box">
         <img src="Pictures/vision.png" alt="">
         <h3>VISION</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
    
        
        
       
      </div>

   
</section>
<section class="process">

   <h1 class="heading">The Team Behind Creating Possibility</h1>

   <div class="box-container container">

      <div class="box">
         <img src="Pictures/aj.png" alt="">
         <h3>Angelo Jervyne Redruco</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>

      <div class="box">
         <img src="Pictures/fem.png" alt="">
         <h3>Ma. Femela Aila T. Manay</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>

      <div class="box">
         <img src="Pictures/bill.png" alt="">
         <h3>Billy N. Bocal</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maxime, excepturi?</p>
      </div>

   </div>

</section>

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+123-456-7890</p>
         <p>+111-222-3333</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>philippines - 400104</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>00:07am to 10:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>umak@gmail.com</p>
         <p>umak@gmail.com</p>
      </div>

   </div>

 

</section>

<!-- reviews section starts  -->




</body>
</html>