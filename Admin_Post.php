<?php
include "Database.php";
session_start();
$email = $_SESSION['email'];
$sql = "SELECT * FROM admin WHERE email = '$email'";
$result = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_object($result)) {
    $admin_name = $row->admin_name;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="veiwport" content="width=device-width, initial-scale = 1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- bootstrap cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">
    <title><?php echo $admin_name; ?> | USER'S POST</title>
</head>

<style type="text/css">
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
    <header class="header fixed-top">

        <div class="container">
            <div class="row align-items-center justify-content-between">
                <a href="AdminDashboard.php" class="logo"><img src="Pictures/CreatingPossibility_Logo.png" style=float:left alt="CreatingPossbility">Creating<span>Possibility</span></a>

                <nav class="nav">
                    <a href="AdminDashboard.php">Home</a>
                    <a href="Admin_Post.php">Post</a>
                    <a href="Contact.php">Contact</a>
                </nav>
            </div>
        </div>
    </header>
    <?php
    $sql = "SELECT * FROM user_post";
    $post = mysqli_query($connect, $sql);
    while ($row1 = mysqli_fetch_array($post)) {
    ?>
        <h2>Comapany: <?php echo $row1['company']; ?></h2>
        <h2>Date: <?php echo $row1['date']; ?></h2>
        <h2>Description: <?php echo $row1['description']; ?></h2>
        <h2>Post by: <?php echo $row1['poster_by']; ?></h2>
        <hr>
        </hr>
    <?php
    }
    ?>
</body>

</html>