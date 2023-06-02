<?php include_once("Controller.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Otp.css">
    <title>CreatingPossibility | OTP - Employer</title>
</head>
<body>
    <div id="container">
        <h1>OTP Verification</h1>
        <div id="line"></div>
        <form action="" method="post">
            <?php 
                if(isset($_SESSION['message'])) {
                    ?>
                        <div id="alert"><?php echo $_SESSION['message']; ?> </div>
                    <?php
                }
            ?>
            <?php 
                if($errors > 0) {
                    foreach($errors AS $displayErrors) {
                        ?>
                            <div id="alert"><?php echo $displayErrors; ?> </div>
                        <?php
                    }
                }
            ?>
            <input type="number" name="otp_employer" placeholder="Verification Code" required> <br>
            <input type="submit" name="verify_employer" value="verify">
        </form>
    </div>
</body>
</html>