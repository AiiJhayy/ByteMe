<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <meta name = "veiwport" content = "width=device-width, initial-scale = 1">
    <title>About | ByteMe Co.</title>
</head>

<style> 
.about{
    background:url(../images/about-bg.png) no-repeat;
    background-size: cover;
    background-position: center;
    padding-bottom: 3rem;
}

.about .column{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.about .column .image{
    flex:1 1 40rem;
}

.about .column .image img{
    width:100%;
}

.about .column .content{
    flex:1 1 40rem;
}

.about .column .content h3{
    font-size: 3rem;
    color:#666;
}

.about .column .content p{
    font-size: 1.5rem;
    color:#666;
    padding:1rem 0;
}

.about .column .content .buttons a:last-child{
    margin-left: 2rem;
}
</style>

<body>
<?php include 'Navigation.php'?>

<br>

<section class="about" id="about">

    <h1 class="heading"> about the app </h1>

    <div class="column">

        <div class="image">
            <img src="pwd1.jpg" alt="">
        </div>

        <div class="content">
            <h3>Easy And Perfect Solution For Your Business App</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla placeat deserunt saepe repudiandae veniam soluta minima dolor hic aperiam iure.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, quaerat. Dolorem ratione saepe magni quo inventore porro ab voluptates eos, nam eius provident accusantium, quia similique est, repellendus et reiciendis.</p>
            <div class="buttons">
                <a href="#" class="btn"> <i class="fab fa-apple"></i> app store </a>
                <a href="#" class="btn"> <i class="fab fa-google-play"></i> google-play </a>
            </div>
        </div>

    </div>


</body>
</html>