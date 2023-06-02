<?php include_once ("Controller.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreatingPosibility | Registration - Employer</title>
    <link rel="stylesheet" href="css/registration.css">
</head>
<body>
    <div id="container">
        <h1>Employer's Registration</h1>
        <div id="line"></div>
        <form action="Registration_Employer.php" method="POST" autocomplete="off">
        <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                }
            }
            ?> 
            <input type="text" name="employer_first_name" class="form-control" placeholder="First Name" required>
            <input type="text" name="employer_last_name" class="form-control" placeholder="Last Name" required><br>
            <input type="text" name="employer_posistion" class="form-control" placeholder="Employer Posistion" required><br>
            <input type="text" name="employer_company" class="form-control" placeholder="Company Name" required><br>
            <input type="email" name="employer_email" class="form-control" placeholder="Email" required><br>
            <input type="password" name="password" class="form-control" placeholder="Password" required><br>
            <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password" required><br>
            <input type="radio" name="seeker_gender" id="male" value="male" required><label for="male">Male</label>
            <input type="radio" name="seeker_gender" id="female" value="female" required><label for="female">Female</label><br>
            <h5>By clicking Sign Up, you agree to our Terms, Data Policy, and Cookie Policy. You may receive SMS
                notifications from us and opt out at any time.</h5>
            <input type="submit" name="employer_signup" value="Sign Up">
            <div id="line"></div>
        </form>
        <p>Already have a account? <a href="LogIn_Employer.php">Login</a></p>
    </div>
</body>
</html>