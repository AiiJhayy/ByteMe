<!DOCTYPE html>
<html lang = "en">
    <head>
    <meta charset = "UTF-8">
    <meta name = "veiwport" content = "width=device-width, initial-scale = 1">
        <title>ByteMe | Registration Form - Employer</title>
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

.container {
            
            max-width: 600px;
            margin: 0 auto;
            padding: 150px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            margin-top: 8rem;
            margin-bottom: 8rem;
        }

        .form-group {
            margin-bottom: 30px;
            
        }

  

/* media queries  */

@media (max-width:991px){

html{
   font-size: 55%;
}

.header .link-btn{
   display: none;
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
        

        <div class = "container">
            <?php if (isset($_POST["submit"])) {
                $employer_first_name = $_POST["first_name"];
                $employer_last_name = $_POST["last_name"];
                $employer_posistion= $_POST["employer_posistion"];
                $company_name = $_POST["company_name"];
                $company_email = $_POST["email"];
                $company_number = $_POST["company_number"];
                $password = $_POST["password"];
                $confirm_password = $_POST["confirm_password"];
                $passwordhash = password_hash($password, PASSWORD_DEFAULT);

                $errors = array();
                    if (empty($employer_first_name) OR empty($employer_last_name) OR empty($company_name) OR empty($company_email) OR  empty($company_number) OR empty($password) OR empty($confirm_password)) {
                        array_push($errors, "All fields are required!");
                    }
                    if (!filter_var($company_email, FILTER_VALIDATE_EMAIL)) {
                        array_push($errors, "Invalid email!");
                    }
                    if (strlen($company_number) < 11) {
                        array_push($errors, "Password must be 11 characters long");
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
                        $sql = "INSERT INTO employer (first_name, last_name, employer_posistion, company_name, email, company_number, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
                        $stmt = mysqli_stmt_init($connect);
                        $preparestmt = mysqli_stmt_prepare($stmt, $sql);
                            if ($preparestmt) {
                                mysqli_stmt_bind_param($stmt, "sssssss", $employer_first_name, $employer_last_name, $company_name, $company_email, $company_number, $passwordhash);
                                mysqli_stmt_execute($stmt);
                                echo "<div class= 'alert alert-success'>You are registered successfully!</div>";
                            }
                            else {
                                die("SOMETHING WENT WRONG!");
                            }
                    }
                }    
            ?>

            <form action = "Registration.php" method = "post">
                <div class = "form-group">
                    <input type = "text" class = "form-control" name = "first_name" placeholder = "Employer First Name:">
                </div>
                <div class = "form-group">
                    <input type = "text" class = "form-control" name = "last_name" placeholder = "Employer Last Name:">
                </div>
                <div class = "form-group">
                    <input type = "text" class = "form-control" name = "employer_posistion" placeholder = "Employer Posistion:">
                </div>
                <div class = "form-group">
                    <input type = "text" class = "form-control" name = "company_name" placeholder = "Company Name:">
                </div>
                <div class = "form-group">
                    <input type = "text" class = "form-control" name = "email" placeholder = "Company E-mail:">
                </div>
                <div class = "form-group">
                    <input type = "text" class = "form-control" name = "company_number" placeholder = "Company Number:">
                </div>
                <div class = "form-group">
                    <input type = "password" class = "form-control" name = "password" placeholder = "Password:">
                </div>
                <div class = "form-group">
                    <input type = "password" class = "form-control" name = "confirm_password" placeholder = "Confirm Password:">
                </div>
                <div class = "form-group-btn">
                    <input type = "submit" class = "btn btn-primary" name = "submit" placeholder = "SUBMIT">
                </div>
                <div><p>Already Registered? <a href = "LogIn_Employer-Seeker.php">Login Here</a></p></div>
            </form>
        </div>

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
    </body>

</html>