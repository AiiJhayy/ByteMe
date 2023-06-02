<?php include_once("Controller.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreatingPossibility | Change Password - Employer</title>
    <link rel="stylesheet" href="css/registration.css">
</head>

<body>
    <div id="container">
        <h1>Forgot Password</h1>
        <div id="line"></div>
        <form action="LogIn_Employer.php" method="POST" autocomplete="off">
            <?php
            if ($errors > 0) {
                foreach ($errors as $displayErrors) {
            ?>
                    <div id="alert"><?php echo $displayErrors; ?></div>
            <?php
                }
            }
            ?>
            <input type="password" name="password" class="form-control" placeholder="Password" required><br>
            <input type="password" name="confirmPassword" class="form-control" placeholder="Confirm Password" required><br>
            <input type="submit" name="newpass_employer" value="Save">
            <div id="line"></div>
        </form>
    </div>
</body>

</html>