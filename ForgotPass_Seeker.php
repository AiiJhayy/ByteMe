<?php include_once("Database.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forgot Password</title>
    </head>

    <style>

    </style>

    <body>
        <h2>Reset Your Password</h2>
            <p></p>
            <div id="line"></div>
            <form action="LogIn_Seeker.php" method="POST">
                <?php 
                    if($errors > 0) {
                        foreach($errors AS $displayError) {
                            ?>
                                <div id="alert"><?php echo $displayError; ?></div>
                            <?php
                            }
                    }
                ?>
                <input type="email" name="email" placeholder="Email"><br>
                <input type="submit" name="forgot_password" value="Verify">
            </form>
    </body>
</html>