<?php include_once ("Controller.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreatingPosibility | Forgot Password - Employer</title>
    <link rel="stylesheet" href="css/registration.css">
</head>
<body>
    <div id="container">
        <h1>Verify Email</h1>
        <div id="line"></div>
        <form action="Forgot_Employer.php" method="POST" autocomplete="off">
        <?php
            if($errors > 0){
                foreach($errors AS $displayErrors){
                ?>
                <div id="alert"><?php echo $displayErrors; ?></div>
                <?php
                }
            }
        ?> 
            <input type="email" name="employer_email" class="form-control" placeholder="Email" required><br>
            <input type="submit" name="employer_find" value="Check">
            <div id="line"></div>
        </form>
    </div>
</body>
</html>