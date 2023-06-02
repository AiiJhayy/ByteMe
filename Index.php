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

<<<<<<< HEAD
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
</script>
=======
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
>>>>>>> 6ceee644d06f9c1ff40272c535d8d004d9a7da00

    <script>
        setTimeout(function() {
            var logo = document.querySelector(".logo");
            logo.style.animation = "pop-out 0.5s ease-in-out forwards";

            setTimeout(function() {
                window.location.href = "HomePage.php";
            }, 500);
        }, 3000);
    </script>
</body>

</html>