<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Home | ByteMe Co.</title>
   

   <style>
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

      html,
      body {
         height: 100%;
         margin: 0;
         background-color: var(--light-bg);
      }

      .logo {
         text-align: center;
         opacity: 0;
         animation: pop-in 0.5s ease-in-out forwards;
         display: flex;
         justify-content: center;
         align-items: center;
         height: 65%;

      }

      .loader-container {
         text-align: center;
         opacity: 0;
         animation: pop-in 0.5s ease-in-out forwards;
         display: flex;
         justify-content: center;
         align-items: center;
         height: 30%;
      }

      @keyframes pop-in {
         0% {
            transform: scale(0);
         }

         100% {
            transform: scale(1);
            opacity: 1;
         }
      }

      @keyframes pop-out {
         0% {
            transform: scale(1);
            opacity: 1;
         }

         100% {
            transform: scale(0);
            opacity: 0;
         }
      }

      .spinner {
         width: 70.4px;
         height: 70.4px;
         --clr: #00b8b8;
         --clr-alpha: rgba(0, 184, 184, 0.1);
         animation: spinner 1.6s infinite ease;
         transform-style: preserve-3d;
      }

      .spinner>div {
         background-color: var(--clr-alpha);
         height: 100%;
         position: absolute;
         width: 100%;
         border: 3.5px solid var(--clr);
      }

      .spinner div:nth-of-type(1) {
         transform: translateZ(-35.2px) rotateY(180deg);
      }

      .spinner div:nth-of-type(2) {
         transform: rotateY(-270deg) translateX(50%);
         transform-origin: top right;
      }

      .spinner div:nth-of-type(3) {
         transform: rotateY(270deg) translateX(-50%);
         transform-origin: center left;
      }

      .spinner div:nth-of-type(4) {
         transform: rotateX(90deg) translateY(-50%);
         transform-origin: top center;
      }

      .spinner div:nth-of-type(5) {
         transform: rotateX(-90deg) translateY(50%);
         transform-origin: bottom center;
      }

      .spinner div:nth-of-type(6) {
         transform: translateZ(35.2px);
      }

      @keyframes spinner {
         0% {
            transform: rotate(45deg) rotateX(-25deg) rotateY(25deg);
         }

         50% {
            transform: rotate(45deg) rotateX(-385deg) rotateY(25deg);
         }

         100% {
            transform: rotate(45deg) rotateX(-385deg) rotateY(385deg);
         }
      }
   </style>
</head>

<body>
   <div class="logo">
      <img src="Pictures/CreatingPossibility_Logo.png" alt="logo">
   </div>

   <div class="loader-container">
      <div class="spinner">
         <div></div>
         <div></div>
         <div></div>
         <div></div>
         <div></div>
         <div></div>
      </div>
   </div>

   <script>
      setTimeout(function () {
         var logo = document.querySelector(".logo");
         logo.style.animation = "pop-out 0.5s ease-in-out forwards";

         setTimeout(function () {
            window.location.href = "HomePage.php";
         }, 500);
      }, 3000);

      </div>

   </section>

   <!-- services section ends -->

   <!-- process section starts  -->

   <section class="process">

      <h1 class="heading">Why Creating Possibilities</h1>

      <div class="box-container container">

         <div class="box">
            <img src="images/process-1.png." alt="">
            <h3>Inclusivity</h3>
         <p>Our job portal is dedicated to breaking down barriers and creating an inclusive environment where individuals of all abilities can find equal opportunities for employment. We believe in embracing diversity and ensuring that every person, regardless of their disability, feels welcomed and valued in their job search.</p>
      </div>

      <div class="box">
         <img src="images/process-2.png." alt="">
         <h3>Empowerment</h3>
         <p>We strive to empower unique individuals by providing them with the resources and support needed to navigate their career journeys. We aim to foster independence and inspire confidence, enabling job seekers to showcase their unique skills and talents, and ultimately achieve their professional goals.</p>
      </div>

      <div class="box">
         <img src="images/process-3.png." alt="">
         <h3>Opportunity</h3>
         <p>lt is a gateway to a world of opportunities for unique individuals. We are committed to opening doors to employment, connecting job seekers with inclusive employers who recognize and appreciate their potential. By igniting their potential, we aim to create pathways to fulfilling careers and a brighter future.</p>
         </div>

      </div>

   </section>

   <!-- process section ends -->

   <!-- reviews section starts  -->

   <section class="reviews" id="reviews">

      <h1 class="heading"> FEEDBACK AND REVIEWS </h1>

      <div class="box-container container">

         <div class="box">
            <img src="Pictures/profile.png" alt="Hanamichi Sakuragi">
            <p>"Creating Possibility is a game-changer for people with disabilities seeking employment."</p>
            <br></br>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Hanamichi Sakuragi</h3>
            <span>Satisfied Client</span>
         </div>

         <div class="box">
            <img src="Pictures/profile.png" alt="Jennie Park">
            <p>"I have been thoroughly impressed with Creating Possibility as a resource for job seekers with disabilities."</p>
           <br></br>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jennie Park</h3>
            <span>Satisfied Client</span>
         </div>

         <div class="box">
            <img src="Pictures/profile.png" alt="Luffy Roronoa">
            <p>"Creating Possibility has revolutionized the way we approach disability inclusion in the workplace. Kudos to the team for their exceptional work!"</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Luffy Roronoa</h3>
            <span>Satisfied Client</span>
         </div>

      </div>

   </section>

   <!-- reviews section ends -->

   <!-- contact section starts  -->



   <!-- contact section ends -->

   <!-- footer section starts  -->

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

   <!-- footer section ends -->










   <!-- custom js file link  -->


</body>

</html>
