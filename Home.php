<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "veiwport" content = "width=device-width, initial-scale = 1">
    <title>Home | ByteMe Co.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<style>

.home{
    display: flex;
    align-items: center;
    justify-content: center;
    background:url(../images/home-bg-img.png) no-repeat;
    background-size: cover;
    background-position: center;
}

.home .image img{
    width:40vw;
    animation: float 3s linear infinite;
}
.btn{
    display: inline-block;
    margin-top: 1rem;
    padding:.8rem 3rem;
    border-radius: 5rem;
    background:var(--gradient);
    font-size: 1.7rem;
    color:#aaaaa;
    cursor: pointer;
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
    transition: all .3s linear;
}

.btn:hover{
    transform: scale(1.1);
}

.home .content h3{
    font-size: 5.5rem;
    color:#333;
    text-transform: uppercase;
}

.home .content h3 span{
    color:var(--pink);
    text-transform: uppercase;
}

.home .content p{
    font-size: 1.7rem;
    color:#666;
    padding:1rem 0;
}
</style>

<body>
<?php include 'Navigation.php'?>

<section class="home" id="home">
<div class = "content">
<h3>LOREM IPSUM <span>showcase</span></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus suscipit porro nam libero natus error consequatur sed repudiandae eos quo?</p>
        <a href="#" class="btn">SIGN UP NOW!</a>
</div>
<div class="image">
        <img src="pwd.jpg" alt="">
    </div>

</body>
</html>