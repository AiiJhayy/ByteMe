<?php
include "Database.php";
session_start();
$seeker_email = $_SESSION['seeker_email'];
$sql = "SELECT * FROM seeker WHERE seeker_email = '$seeker_email'";
$result = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_object($result)) {
    $seeker_first_name = $row->seeker_first_name;
    $seeker_last_name = $row->seeker_last_name;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="veiwport" content="width=device-width, initial-scale = 1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <title><?php echo $seeker_first_name; ?> | PROFILE</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

    :root {
        --border: .2rem solid rgba(0, 0, 0, .1);
        --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    }

    * {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none !important;

    }

    *::-webkit-scrollbar {
        height: .5rem;
        width: 1rem;
    }

    *::-webkit-scrollbar-track {
        background-color: transparent;
    }

    *::-webkit-scrollbar-thumb {
        background-color: var(--black);
    }

    html {
        font-size: 62.5%;
        overflow-x: hidden;
        scroll-behavior: smooth;
        scroll-padding-top: 6.5rem;
    }

    section {
        padding: 7rem 1rem;
    }

    .heading {
        text-align: center;
        font-size: 4rem;
        color: var(--blue);
        text-transform: uppercase;
        font-weight: bolder;
        margin-bottom: 3rem;

    }

    .link-btn {
        display: inline-block;
        padding: 1rem 3rem;
        border-radius: .5rem;
        background-color: var(--blue);
        cursor: pointer;
        font-size: 1.7rem;
        color: var(--white);
    }

    .link-btn:hover {
        background-color: var(--black);
        color: var(--white);
    }

    .header {
        padding: 2rem;
        border-bottom: var(--border);
        background-color: var(--white);

    }

    .header .active {
        background-color: var(--white);
        box-shadow: var(--box-shadow);
        border: 0;
    }

    .logo img {
        display: flex;
        width: 30x;
        height: 30px;

    }

    .header .logo {
        font-size: 2rem;
        color: var(--black);
    }

    .header .logo span {
        color: var(--blue);
    }

    .header .nav a {
        margin: 0 1rem;
        font-size: 1.7rem;
        color: var(--black);
    }

    .header .nav a:hover {
        color: var(--blue);
    }

    #menu-btn {
        font-size: 2.5rem;
        color: var(--black);
        cursor: pointer;
        display: none;
    }

    #profile_pic {
        width: 150px;
        border-radius: 50%;
        border: solid 2px white;
    }

    #menu_button {
        margin: 5px;
        width: 100px;
        display: inline-block;
    }

    #company_bar {
        min-height: 400px;
        margin-top: 20px;
        color: black;
        padding: 8px;
        text-align: center;
        font-size: 20px;
    }

    #company_img {
        width: 80px;
        float: left;
        margin: 10px;
        border-radius: 50%;
        border: solid 2px white;
    }

    #company {
        clear: both;
        font-size: 15px;
        font-weight: bold;
    }

    #post_bar {
        margin-top: 20px;
        padding: 10px;
        background-color: var(--light-bg);
    }

    #post {
        padding: 5px;
        margin-bottom: 20px;
        font-size: 17px;
        display: flex;
    }

    @media (max-width:991px) {

        html {
            font-size: 55%;
        }

        .header .link-btn {
            display: none;
        }

        section {
            padding: 5rem 2rem;
        }

    }

    @media (max-width:768px) {

        section {
            padding: 3rem 1rem;
        }

        #menu-btn {
            display: inline-block;
            transition: .2s linear;
        }

        #menu-btn.fa-times {
            transform: rotate(180deg);
        }

        .header .nav {
            position: absolute;
            top: 99%;
            left: 0;
            right: 0;
            background-color: var(--white);
            border-top: var(--border);
            border-bottom: var(--border);
            padding: 1rem 0;
            text-align: center;
            flex-flow: column;
            clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
            transition: .2s linear;
        }

        .header .nav.active {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }

        .header .nav a {
            margin: 1rem 0;
            font-size: 2rem;
        }

        .home {
            background-position: left;
        }

        .home .content {
            width: auto;
        }

    }

    @media (max-width:450px) {

        html {
            font-size: 50%;
        }

        .home .content h3 {
            font-size: 4rem;
        }

        .heading {
            font-size: 3rem;
        }

    }
</style>

<body>
    <!-- header section starts  -->
    <header class="header fixed-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="Timeline.php" class="logo"><img src="Pictures/CreatingPossibility_Logo.png" style=float:left alt="CreatingPossbility">Creating<span>Possibility</span></a>
                <nav class="nav">
                    <a href="Profile.php">Profile</a>
                    <a href="">About</a>
                    <a href="">Resume</a>
                    <a href="ResumeBuilder.php">Resume Builder</a>
                </nav>
                <div id="menu-btn" class="fas fa-bars"></div>
            </div>
        </div>
    </header>

    <div style="width: 800px; min-height: 400px; margin: auto;">
        <!--company area -->
        <div style="display: flex;">
            <div style="min-height: 400px; flex: 1;">
                <div id="company_bar">
                    <img src="Pictures/bill.png" id="profile_pic">
                    <div style="font-size: 30px;"> <?php echo $seeker_first_name, ' ', $seeker_last_name; ?></div>
                </div>
            </div>

            <!--post area -->
            <div style="min-height: 400px; flex: 2.5; padding: 20; padding-right: 0px;">
                <div id="post_bar">
                    <div id="post">
                        <div>
                            <img src="Pictures/logog.png" style="width: 75px; margin-right: 5px;">
                        </div>
                        <div>
                            <div style="font-weight: bold;">Company 1</div>
                            Strength is not defined by the absence of limitations, but by the determination to overcome them. Embrace your unique abilities and engage in the workforce.
                            <br /><br />
                            <a href="">Like</a> | <a href="">Comment</a> | <span style="color: #666;">April 30, 2023</span>
                        </div>
                    </div>

                    <div id="post">
                        <div>
                            <img src="Pictures/embrace.png" style="width: 75px; margin-right: 5px;">
                        </div>
                        <div>
                            <div style="font-weight: bold;">Company 2</div>
                            Strength is not defined by the absence of limitations, but by the determination to overcome them. Embrace your unique abilities and engage in the workforce.
                            <br /><br />
                            <a href="">Like</a> | <a href="">Comment</a> | <span style="color: #666;">April 30, 2023</span>
                        </div>
                    </div>

                    <div id="post">
                        <div>
                            <img src="Pictures/advocate.png" style="width: 75px; margin-right: 5px;">
                        </div>
                        <div>
                            <div style="font-weight: bold;">Company 3</div>
                            Strength is not defined by the absence of limitations, but by the determination to overcome them. Embrace your unique abilities and engage in the workforce.
                            <br /><br />
                            <a href="">Like</a> | <a href="">Comment</a> | <span style="color: #666;">April 30, 2023</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>