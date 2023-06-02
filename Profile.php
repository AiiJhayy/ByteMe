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
    <title><?php echo $seeker_first_name; ?> | PROFILE</title>
</head>

<style>
    :root {
        --light-color: #666;
        --light-bg: #eee;
        --border: .2rem solid rgba(0, 0, 0, .1);
        --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
    }

    #profile_pic {
        width: 150px;
        margin-top: -200px;
        border-radius: 50%;
        border: solid 2px white;
    }

    #menu_button {
        margin: 5px;
        width: 100px;
        display: inline-block;
    }

    #menu_button a {
        color: black;
    }

    #company_bar {
        min-height: 400px;
        margin-top: 20px;
        color: black;
        padding: 8px;
        background-color: white;
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
        background-color: white;
    }

    #post {
        padding: 5px;
        margin-bottom: 20px;
        font-size: 17px;
        display: flex;
    }

    textarea {
        width: 100%;
        border: none;
        font-family: tahoma;
        font-size: 14px;
        height: 60px;
    }

    #post_button {
        float: right;
        background-color: #00b8b8;
        border: none;
        color: white;
        padding: 5px;
        font-size: 15px;
        border-radius: 2px;
        width: 50px;
    }
</style>

<body style="background-color: #eee">
    <!--cover area -->
    <div style="width: 800px; min-height: 400px; margin: auto;">
        <div style="background-color: white; text-align: center; color: black">
            <img src="Pictures/about-us.png" style="width: 100%;" ;>
            <img src="Pictures/bill.png" id="profile_pic">
            <br>
            <div style="font-size: 30px;"> <?php echo $seeker_first_name, ' ', $seeker_last_name; ?></div>
            <br>
            <div id="menu_button"><a href="Timeline.php">Timeline</a></div>
            <div id="menu_button"><a href="">About</a></div>
            <div id="menu_button"><a href="">Resume</a></div>
        </div>

        <!--company area -->
        <div style="display: flex;">
            <div style="min-height: 400px; flex: 1;">
                <div id="company_bar">
                    Companies <br>
                    <div id="company">
                        <img id="company_img" src="Pictures/logog.png">
                        <br>
                        Company 1
                    </div>

                    <div id="company">
                        <img id="company_img" src="Pictures/embrace.png">
                        <br>
                        Company 2
                    </div>

                    <div id="company">
                        <img id="company_img" src="Pictures/advocate.png">
                        <br>
                        Company 3
                    </div>
                </div>
            </div>

            <!--post area -->
            <div style="min-height: 400px; flex: 2.5; padding: 20; padding-right: 0px; padding-top: 20px; padding-left: 10px;">
                <!--post box -->
                <div style=" border: solid thin  #aaa; padding: 10px; background-color: white;">
                    <textarea placeholder="What's on your mind?"></textarea>
                    <input id="post_button" type="submit" value="POST">
                    <br>
                </div>

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