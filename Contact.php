<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="veiwport" content="width=device-width, initial-scale = 1">
   <title>Contact | ByteMe Co.</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
</head>

<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

   :root {
      --blue: #00b8b8;
      --black: #333;
      --white: #fff;
      --light-color: #666;
      --light-bg: #eee;
      --border: .2rem solid rgba(0, 0, 0, .1);
      --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
   }

   * {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      outline: none;
      border: none;
      text-decoration: none !important;

   }

   *::-webkit-scrollbar {
      height: .5rem;
      width: 1rem;
   }

   *::-webkit-scrollbar-track {
      background-color: transparent;
   }

   *::-webkit-scrollbar-thumb {
      background-color: var(--black);
   }

   html {
      font-size: 62.5%;
      overflow-x: hidden;
      scroll-behavior: smooth;
      scroll-padding-top: 6.5rem;
   }

   section {
      padding: 7rem 1rem;
   }


   .link-btn {
      display: inline-block;
      padding: 1rem 3rem;
      border-radius: .5rem;
      background-color: var(--blue);
      cursor: pointer;
      font-size: 1.7rem;
      color: var(--white);
   }

   .link-btn:hover {
      background-color: var(--black);
      color: var(--white);
   }

   .header {
      padding: 2rem;
      border-bottom: var(--border);
      background-color: var(--white);

   }

   .header .active {
      background-color: var(--white);
      box-shadow: var(--box-shadow);
      border: 0;
   }

   .logo img {
      display: flex;
      width: 30x;
      height: 30px;

   }

   .header .logo {
      font-size: 2rem;
      color: var(--black);
   }

   .header .logo span {
      color: var(--blue);
   }

   .header .nav a {
      margin: 0 1rem;
      font-size: 1.7rem;
      color: var(--black);
   }

   .header .nav a:hover {
      color: var(--blue);
   }

   #menu-btn {
      font-size: 2.5rem;
      color: var(--black);
      cursor: pointer;
      display: none;
   }

   * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
   }

   body {
      height: 100vh;
      display: grid;
      align-items: center;
      font-family: 'Poppins', sans-serif;
   }

   .heading {
      text-align: center;
      font-size: 4rem;
      color: var(--blue);
      text-transform: uppercase;
      font-weight: bolder;
      margin-top: 7rem;

   }

   .heading2{
   text-align: center;
   font-size: 4rem;
   color:var(--blue);
   text-transform: uppercase;
   font-weight: bolder;
   margin-top: 15rem;
}

h3{
   
   font-size: x-large;
   color: #fff;

}
.container-service{
   width: 100%;
   max-width: 108rem;
   padding: 30px;
   background: #00b89c;
   border-radius: 50px 20px;

   margin:auto;
   height: auto;

}

.description{
   text-align:justify;
   font-size: large;
   margin-top: 2rem;
   font-family: sans-serif;
   color: #fff;
   
}
.description1{
   text-align:justify;
   font-size: large;
   margin-top: 2rem;
   color: #fff;
   font-family: sans-serif;
}

   .contact-wrap {
      width: 80%;
      height: auto;
      margin: auto;
      display: flex;
      flex-wrap: wrap;
   }

   .contact-in {
      padding: 40px 30px;
      margin-bottom: 15rem;
   }

   .contact-in:nth-child(1) {
      flex: 30%;
      background: #015249;
      color: #fff;
   }

   .contact-in:nth-child(2) {
      flex: 45%;
      background: var(--light-bg);
   }

   .contact-in:nth-child(3) {
      flex: 25%;
      padding: 0;
   }

   .contact-in h1 {
      font-size: 24px;
      color: var(--blue);
      text-transform: uppercase;
      font-weight: 500;
      margin-bottom: 20px;
   }

   .contact-in h2 {
      font-size: 20px;
      font-weight: 400;
      margin-bottom: 15px;
   }

   .contact-in h2 i {
      font-size: 16px;
      width: 40px;
      height: 40px;
      margin-right: 10px;
      background: #f5f5f5;
      color: #000;
      border-radius: 50px;
      line-height: 40px;
      text-align: center;
   }

   .contact-in p {
      font-size: 14px;
      font-weight: 300;
      margin-bottom: 20px;
   }

   .contact-in ul {
      padding: 0;
      margin: 0;
   }

   .contact-in ul li {
      list-style: none;
      display: inline-block;
      margin-right: 5px;
      margin-top: 5px;
   }

   .contact-in ul li a {
      display: block;
      width: 30px;
      height: 30px;
      text-align: center;
      background: #fff;
      border-radius: 50px;
   }

   .contact-in ul li a i {
      font-size: 14px;
      line-height: 30px;
      color: #000;
   }

   .contact-in form {
      width: 100%;
      height: auto;
   }

   .contact-in-input {
      width: 100%;
      height: 40px;
      margin-bottom: 20px;
      border: 1px solid var(--blue);
      outline: none;
      padding-left: 5px;
      background: transparent;
      color: var(--black);
      font-size: 12px;
      font-weight: 300;
      font-family: 'Poppins', sans-serif;
   }

   .contact-in-input::placeholder {
      color: (--black)
   }

   .contact-in-textarea {
      width: 100%;
      height: 140px;
      margin-bottom: 20px;
      border: 1px solid var(--blue);
      outline: none;
      padding-top: 5px;
      padding-left: 5px;
      background: transparent;
      color: var(--black);
      font-size: 12px;
      font-weight: 300;
      font-family: 'Poppins', sans-serif;
   }

   .contact-in-textarea::placeholder {
      color: var(--black);
   }

   .contact-in-btn {
      width: 100%;
      height: 40px;
      border: 1px solid var(--blue);
      outline: none;
      background: transparent;
      color: var(--black);
      font-size: 12px;
      font-weight: 300;
      font-family: 'Poppins', sans-serif;
      cursor: pointer;
   }

   .contact-in iframe {
      width: 100%;
      height: 100%;

   }

   .footer {
      background-color: var(--light-bg);
   }

   .footer .box-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
      gap: 3rem;
   }

   .footer .box-container .box {
      text-align: center;
   }

   .footer .box-container .box i {
      height: 5rem;
      width: 5rem;
      border-radius: 50%;
      line-height: 5rem;
      font-size: 2rem;
      background-color: var(--blue);
      color: var(--white);
   }

   .footer .box-container .box h3 {
      font-size: 2rem;
      margin: 2rem 0;
      color: var(--black);
   }

   .footer .box-container .box p {
      font-size: 1.5rem;
      color: var(--light-color);
      text-transform: none;
   }

   .footer .credit {
      text-align: center;
      border-top: var(--border);
      padding-top: 2rem;
      margin-top: 2rem;
      font-size: 2rem;
      color: var(--light-color);
   }

   .footer .credit span {
      color: var(--blue);
   }
   
   /* media queries  */

   @media (max-width:991px) {

      html {
         font-size: 55%;
      }

      .header .link-btn {
         display: none;
      }

      section {
         padding: 5rem 2rem;
      }

   }

   @media (max-width:768px) {

      section {
         padding: 3rem 1rem;
      }

      #menu-btn {
         display: inline-block;
         transition: .2s linear;
      }

      #menu-btn.fa-times {
         transform: rotate(180deg);
      }

      .header .nav {
         position: absolute;
         top: 99%;
         left: 0;
         right: 0;
         background-color: var(--white);
         border-top: var(--border);
         border-bottom: var(--border);
         padding: 1rem 0;
         text-align: center;
         flex-flow: column;
         clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
         transition: .2s linear;
      }

      .header .nav.active {
         clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
      }

      .header .nav a {
         margin: 1rem 0;
         font-size: 2rem;
      }

      .home {
         background-position: left;
      }

      .home .content {
         width: auto;
      }

   }

   @media (max-width:450px) {

      html {
         font-size: 50%;
      }

      .home .content h3 {
         font-size: 4rem;
      }

      .heading {
         font-size: 3rem;
      }

   }

   @media only screen and (max-width:480px) {
      .contact-in:nth-child(1) {
         flex: 50%;
      }

      .contact-in:nth-child(2) {
         flex: 50%;
      }

      .contact-in:nth-child(3) {
         flex: 100%;
      }

   }

   @media only screen and (max-width:360px) {
      .contact-in:nth-child(1) {
         flex: 50%;
      }

      .contact-in:nth-child(2) {
         flex: 50%;
      }

      .contact-in:nth-child(3) {
         flex: 100%;
      }

   }
</style>

<body>

   <header class="header fixed-top">

      <div class="container">

         <div class="row align-items-center justify-content-between">


            <<a href="Index.php" class="logo"><img src="Pictures/logog.png" style=float:left alt="CreatingPossbility">Creating<span>Possibility</span></a>

               <nav class="nav">
                  <a href="Index.php">Home</a>
                  <a href="About.php">About Us</a>
                  <a href="Contact.php">Support</a>
               </nav>

               <a href="Login_Employer-Seeker.php" class="link-btn">LOGIN</a>

               <div id="menu-btn" class="fas fa-bars"></div>

         </div>

      </div>

   </header>

   <h1 class="heading2">SUPPORT SERVICES</h1>
      <div class="container-service">
      <h3>Help is available from us</h3>
      <h2 class="description">Our website's support services are here to ensure your satisfaction 
         and a seamless user experience. Our dedicated support team is readily 
         available to address any questions, concerns, or technical issues you may encounter. 
         With our prompt and friendly assistance, we strive to resolve your inquiries 
         and provide guidance whenever you need it. Contact us via email, 
         or phone, and let us take care of your website-related needs. Your satisfaction 
         is our top priority.<h2>
      <h2 class="description1">Below is the provided contact information.</h2>
      </div>

   <h1 class="heading">CONTACT US</h1>
   <div class="contact-wrap">
      <div class="contact-in">
         <h1>Contact Info</h1>
         <h2><i class="fa fa-phone" aria-hidden="true"></i> Phone</h2>
         <p>0966-389-7674</p>
         <h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
         <p>creatingpossibility11@gmail.com</p>
         <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
         <p>Manila, Philippines</p>
         <ul>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
         </ul>
      </div>
      <div class="contact-in">
         <h1>Send a Message</h1>
         <form>
            <input type="text" placeholder="Full Name" class="contact-in-input">
            <input type="text" placeholder="Email" class="contact-in-input">
            <input type="text" placeholder="Subject" class="contact-in-input">
            <textarea placeholder="Message" class="contact-in-textarea"></textarea>
            <input type="submit" value="SUBMIT" class="contact-in-btn">
         </form>
      </div>
      <div class="contact-in">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.627932261151!2d121.05349231187118!3d14.563256977928772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c860ad20d9e9%3A0xeeb71061020f655a!2sUniversity%20of%20Makati!5e0!3m2!1sen!2sph!4v1684257119300!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

   </div>

   <section class="footer">

      <div class="box-container container">

         <div class="box">
            <i class="fas fa-phone"></i>
            <h3>Phone Number</h3>
            <p>+639-663897674</p>
            <p>+639-491938304</p>
         </div>

         <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Our Address</h3>
            <p>Philippines - 400104</p>
         </div>

         <div class="box">
            <i class="fas fa-clock"></i>
            <h3>Opening Hours</h3>
            <p>07:00am to 10:00pm</p>
         </div>

         <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>Email Address</h3>
            <p>creatingpossibility11@gmail.com</p>
            <p>umak@gmail.com</p>
         </div>

      </div>



   </section>

</body>

</html>