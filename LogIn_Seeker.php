<!DOCTYPE html>
<html lang = "en">
    <head>
       
        <meta charset = "UTF-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>ByteMe | LogIn - Seeker</title>
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



section{
   padding:3rem 1rem;
}

.heading{
   text-align: center;
   font-size: 2.5rem;
   color:var(--blue);
   text-transform: uppercase;
   font-weight: bolder;
   margin-bottom: 6rem;

}

.link-btn{
   display: inline-block;
   padding:1rem 2.4rem;
   border-radius: .8rem;
   background-color: var(--blue);
   cursor: pointer;
   font-size: 1rem;
   color:var(--white);
}

.link-btn:hover{
   background-color: var(--black);
   color:var(--white);
}

.header{
   padding: 1rem;
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
    width: 20x;
    height: 20px;
    
}

.header .logo{
   font-size: 1rem;
   color:var(--black);
   margin:0 1rem;
   
}

.header .logo span{
   color:var(--blue);
}

header {
  display: flex;
  justify-content: center;
  
}

.nav {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.nav a {
  margin: 0 1.8rem;
  font-size: 1rem;
  color: var(--black);
}
.header .nav a{
   display: flex;
   margin:100 2.3rem;
   font-size: 1rem;
   color:var(--black);
   justify-content: center;
   align-items: center;

}

.header .nav a:hover{
   color:var(--blue);
}

#menu-btn{
   font-size: 2rem;
   color:var(--black);
   cursor: pointer;
   display: none;
}

.container {
            
            max-width: 600px;
            margin: 0 auto;
            padding: 130px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            margin-top: 8rem;
            margin-bottom: 8rem;
        }

        .form-group {
            margin-bottom: 30px;
            
        }


    
/* media queries  */

@media (max-width:991px){



.header .link-btn{
   display: none;
}

section{
   padding: 3rem 2rem;
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

@media (max-width:450px){

html{
   font-size: 50%;
}

.home .content h3{
   font-size: 4rem;
}

.heading{
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

<div class="containers">

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
        <?php 
            if (isset($_POST ["login"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                require_once "Database.php";
                $sql = "SELECT * FROM seeker WHERE email = '$email'";
                $result = mysqli_query($connect, $sql);
                $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    if ($user) {
                        if (password_verify($password, $user["password"])) {
                            header("Location: Index.php");
                            die();
                        }
                        else {
                            echo "<div class = 'alert alert-danger'>Password does not much!</div>";
                        }
                    }
                    else {
                        echo "<div class = 'alert alert-danger'>Email does not much!</div>";
                    }
            }
            session_start();
            if (isset($_POST ["login"])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                require_once "Database.php";
                $sql = "SELECT * FROM admin WHERE email = '$email' AND password='$password'";
                $result = mysqli_query($connect, $sql);
                
                $user = mysqli_num_rows($result);
                        if ($user) {
                            header("Location: AdminDashboard.php");
                            die();
                        }
            }
        ?>

        <div class = "container">
        <h1 class="heading">Job Seeker's Login</h1>
            <form action = "LogIn_Seeker.php" method = "post">
                <div class = "form-group">
                    <input type = "email" placeholder = "Enter Email: " name = "email" class = "form-control">
                </div>
                <div class = "form-group">
                    <input type = "password" placeholder = "Enter Password: " name = "password" class = "form-control">
                    <div class="text-right">
                        
                        <div> <a href = "" style="font-size: 14px;">Forgot password?</a></div>
                        <br>
                </div>
                <div class = "form-group-btn text-center" >
                    <input type = "submit" class = "btn btn-primary" name = "submit" placeholder = "SUBMIT">
                </div>

                <hr>
            </form>
            <div><p>Not registered yet? <a href = "Reg_Employer-Seeker.php">Register Here</a></p></div>
        </div>
    </body>
</html>