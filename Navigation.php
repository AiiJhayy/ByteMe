<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "veiwport" content = "width=device-width, initial-scale = 1">
        <title>ByteMe Co.</title>
    </head>

    <style type = "text/css">
        :root { 
            --main-color: #1abc9c;
            --red: red;
            --light-color: #777;
            --light-vg: #eee;
            --black: #2c3e50;
            --white: #fff;
            --box-shadow:0 .5rem 1rem rgba(0,0,0,.2);
            --border:.1rem solid rgba(0.0.0.2)
        }

        * { 
            padding: 0;
            margin: 0;
        }

        * {
            font-family: 'Poppins', sans-serif;
            margin:0; padding:0;
            box-sizing: border-box;
            text-decoration: none;
            outline: none; 
            border:none;
        }

        *::selection {
            background:var(--main-color);
            color:#1abc9c;
        }

        ::-webkit-scrollbar { 
            width: 1rem;
            height: .5rem;
        }

        ::-webkit-scrollbar-track { 
            background-color: transparent;
        }

        ::-webkit-scrollbar-thumb { 
            background:var(--main-color);
        }

        html {
            font-size: 62.5%;
            overflow-x: hidden;
            scroll-padding-top: 7rem;
            scroll-behavior: smooth;
        }

        body {
            background:#f9f9f9;
        }

        section {
            padding: 2rem;
            margin: 0 auto;
            max-width: 1200px;
        }

        .btn {
            display: inline-block;
            margin-top: 1rem;
            padding: 1rem 3rem;
            cursor: pointer;
            font-size: 1.8rem;
            color: #2b7a78;
            background-color: #f9f9f9;
            border-radius: .5rem;
            text-align: center;
        }

        .btn:hover {
            background-color:#f9f9f9;
        }

        .header {
            position: fixed;
            top:0; left:0; right:0;
            background: #2b7a78;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
        }

        .header .flex {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo img {
            display: flex;
            width: 30px;
            height: 30px;
            float: left;
        }

        .header .logo {
            font-size: 2rem;
            color:var(--);
            color: white;
        }

        .header .logo span {
            color:var(--pink);
        }

        .header .navbar a{
            font-size: 1.7rem;
            margin-left: 3rem;
            color:var(--purple);
            color: white;    
        }

        .header .navbar a:hover {
            color:var(--pink);
        }

        .header input{
            display: none;
        }

        .header label{
            font-size: 3rem;
            color:var(--purple);
            cursor: pointer;
            visibility: hidden;
            opacity: 0;
        }
    </style>

    <header class="header">
        <section class="flex">
        <a href="Home.php" class="logo"><img src="Pictures/logo_white_new.png" alt="CreatingPossbility">CreatingPossibility</a>



        <nav class="navbar">
            <a href="Index.php">Home</a>
            <a href="About.php">About Us</a>
            <a href="Contact.php">Contact</a>
        </nav>
    <a href="LogIn_Employer-Seeker.php" class="btn" style="margin-top: 0;">SIGN IN</a>
    </header>

</html>