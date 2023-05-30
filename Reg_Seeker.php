<!DOCTYPE html>
<html lang = "en">
    <head>
       
        <meta charset = "UTF-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>ByteMe | Registration Form - Seeker</title>
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
            padding: 120px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            margin-top: 8rem;
            margin-bottom: 8rem;
        }

        .form-group {
            margin-bottom: 30px;
            
        }

  /* FOOTER  */
  .footer {
    width: 100%;
    position: relative;
    height: auto;
    background-color: var(--light-bg) ;
    
  }
  .footer .col {
    width: 190px;
    height: auto;
    float: left;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    padding: 0px 20px 20px 20px;
  }
  .footer .col h1 {
    margin: 0;
    padding: 0;
    font-family: inherit;
    font-size: 12px;
    line-height: 17px;
    padding: 20px 0px 5px 0px;
    color: orange;
    font-weight: normal;
    text-transform: uppercase;
    letter-spacing: 0.250em;
  }
  .footer .col ul {
    
    list-style-type: none;
    margin: 0;
    padding: 0;
  }
  .footer .col ul li {
    color: #999999;
    font-size: 14px;
    font-family: inherit;
    font-weight: bold;
    padding: 5px 0px 5px 0px;
    cursor: pointer;
    transition: .2s;
    -webkit-transition: .2s;
    -moz-transition: .2s;
  }
  .social ul li {
    display: inline-block;
    padding-right: 5px;
  }
  
  .footer .col ul li:hover {
    color: #ffffff;
    transition: .1s;
    -webkit-transition: .1s;
    -moz-transition: .1s;
  }
  .clearfix {
    clear: both;
  }

  .foot {
    border-top: 1px solid #e2e2e2;
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

@media only screen and (min-width: 1280px) {
    .contain {
      width: 1200px;
      margin: 0 auto;
    }
  }
  @media only screen and (max-width: 1139px) {
    .contain .social {
      width: 1000px;
      display: block;
    }
    .social h1 {
      margin: 0px;
    }
  }
  @media only screen and (max-width: 950px) {
    .head {
        height: 30%;
    }
    .page {
        height: 40%;
    }
    .footer .col {
      width: 33%;
    }
    .footer .col h1 {
      font-size: 14px;
    }
    .footer .col ul li {
      font-size: 13px;
    }
  }
  @media only screen and (max-width: 500px) {
    .head {
        height: 30%;
    }
.rool {
  font-size: 60px;
}
      .footer .col {
        width: 50%;
      }
      .footer .col h1 {
        font-size: 14px;
      }
      .footer .col ul li {
        font-size: 13px;
      }
  }
  @media only screen and (max-width: 340px) {
    .footer .col {
      width: 100%;
    }
  }

  @keyframes drop {
    0% {
      opacity: 0;
      transform: translateY(-80px);
    }
    100% {
      opacity: 1;
      transform: translateY(0px);
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

        <div class = "container">
        <h1 class="heading">JOB SEEKER'S Registration</h1>
            <?php if (isset($_POST["submit"])) {
                $seeker_first_name = $_POST["first_name"];
                $seeker_last_name = $_POST["last_name"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $confirm_password = $_POST["confirm_password"];
                $passwordhash = password_hash($password, PASSWORD_DEFAULT);

                $errors = array();
                    if (empty($seeker_first_name) OR empty($seeker_last_name) OR empty($email) OR empty($password) OR empty($confirm_password)) {
                        array_push($errors, "All fields are required!");
                    }
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        array_push($errors, "Invalid email!");
                    }
                    if (strlen($password) < 8) {
                        array_push($errors, "Password must be 8 characters long");
                    }
                    if ($password !== $confirm_password) {
                        array_push($errors, "Password does not much!");
                    }

                    if (count($errors) > 0) {
                        foreach ($errors as $error) {
                            echo "<div class='alert alert-danger'>$error</div>";
                        }
                    }
                    else {
                        require_once "Database.php";
                        $sql = "INSERT INTO seeker (seeker_first_name, seeker_last_name, email, password) VALUES (?, ?, ?, ?)";
                        $stmt = mysqli_stmt_init($connect);
                        $preparestmt = mysqli_stmt_prepare($stmt, $sql);
                            if ($preparestmt) {
                                mysqli_stmt_bind_param($stmt, "ssss", $seeker_first_name, $seeker_last_name, $email, $passwordhash);
                                mysqli_stmt_execute($stmt);
                                echo "<div class= 'alert alert-success'>You are registered successfully!</div>";
                            }
                            else {
                                die("SOMETHING WENT WRONG!");
                            }
                    }
                }    
            ?>

            <form action = "Reg_Seeker.php" method = "post">
                <div class = "form-group">
                    <input type = "text" class = "form-control" name = "first_name" placeholder = "First Name:">
                </div>
                <div class = "form-group">
                    <input type = "text" class = "form-control" name = "last_name" placeholder = "Last Name:">
                </div>
                <div class = "form-group">
                    <input type = "text" class = "form-control" name = "email" placeholder = "E-mail:">
                </div>
                <div class = "form-group">
                    <input type = "password" class = "form-control" name = "password" placeholder = "Password:">
                </div>
                <div class = "form-group">
                    <input type = "password" class = "form-control" name = "confirm_password" placeholder = "Confirm Password:">
                </div>
                <div class = "form-group-btn text-center" >
                    <input type = "submit" class = "btn btn-primary" name = "submit" placeholder = "SUBMIT">
                </div>

                <hr>
                <div><p>Already Have an Account? <a href = "LogIn_Employer-Seeker.php">Sign in</a></p></div>
            </form>
        </div>



        <div class="footer">
        <div class="contain">
            <div class="col">
                <h1>Developers</h1>
                <ul>
                    <li>Mosh</li>
                    <li>Mike</li>
                    <li>John Smith</li>
                    <li>Jayed Ahsan</li>
                    <li>Jarif Kahn</li>
                </ul>
            </div>
            <div class="col">
                <h1>Creation</h1>
                <ul>
                    <li>Resume Builder</li>
                   
                </ul>
            </div>
            <div class="col">
                <h1>About</h1>
                <ul>
                    <li>about us</li>
                    <li >Mission and Vision</li>
                    <li>The Team Behind Creating Possibility</li>
                    
                </ul>
            </div>
            
            <div class="col">
                <h1>Support</h1>
                <ul>
                    <li>Contact us</li>
                    <li>Send Email</li>
                
                </ul>
            </div>
            <div class="col social">
                <h1>Social</h1>
                <ul>
                    <li><img src="1.png" width="32" style="width: 32px;"></li>
                    <li><img src="2.png" width="32" style="width: 32px;"></li>
                    <li><img src="3.png" width="32" style="width: 32px;"></li>

                </ul>
            </div>
            <div class="clearfix"></div>
            <footer class="foot">
               
            </footer>
            </div>
    </body>

</html>