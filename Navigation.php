<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "veiwport" content = "width=device-width, initial-scale = 1">
    <title>ByteMe Co.</title>
</head>

<style type = "text/css">

* { 
    padding: 0;
    margin: 0;
}

:root {
    --upper-bg-color: #0072d8;
    --upper22-bg-color: #e5f5ff;
    --text-color: #000;
    --text2-color: #fff;
    --main-color: #eeeee4;
}

#upper_navbar {
    width: 100%;
    background: #0072d8;
}

#upper_navbar a {
    color: var(--text2-color);
    font-size: 1.1rem;
    font-weight: 500;
    padding: 0px 25px;
    margin: 0px 25px;
    transition: all .50s ease;
}

#upper_navbar ul {
    list-style-type: none;
    padding-left: 150px;
}

#upper_navbar li {
    display: inline-block;
    padding: 0px;
}

.logo img {
    display: flex;
    width: 75px;
    height: 75px;
}

.logo {
    display: flex;
    align-items: center;
}

.logo i {
    color: var(--text2-color);
    font-size: 28px;
    margin-right: 3px;
}

.logo span {
    color: var(--text2-color);
    font-size: 1.7rem;
    font-weight: 600;
}

.interface {
    list-style-type: none;
    text-align: right
}

#navbar {
    width: 100%;
    background: #e5f5ff;
}

#navbar a {
    color: var(--text-color);
    font-size: 1.1rem;
    font-weight: 500;
    padding: 5px 0;
    margin: 0px 30px;
    transition: all .50s ease;
}

#navbar ul {
    list-style-type: none;
    text-align: center;
}

#navbar li {
    display: inline-block;
    padding: 15px;
}

</style>

<body>

    <div id = "upper_navbar">
        <ul>
            <li><a href = "Home.php" class = "logo"><img src = "logo_white_new.png"><span>Creating PosiBILLYty</span></a></li>
        </ul>
        <ul class = "interface">
            <li><a href = "LogIn.php" class = "user">SIGN IN</a></li>
            <li><a href = "Registration.php">REGISTER</a></li>
        </ul>
    </div>

    <div id = "navbar">
        <ul>
            <li><a href = "Home.php">Home</a></li>
            <li><a href = "Contact.php">Contact</a></li>
            <li><a href = "About.php">About</a></li>
        </ul>
    </div>

</body>
</html>