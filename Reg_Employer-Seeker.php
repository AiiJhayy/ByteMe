<!DOCTYPE html>
<html>

<head>
    <title>REGISTER | CreatingPossibility</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="home_style.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

    :root {
        --blue: #00b8b8;
        --black: #333;
        --white: #fff;
        --light-color: #666;
        --light-bg: #eee;
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

    body {
        font-family: Arial;
        color: white;
    }

    .split {
        height: 100%;
        width: 50%;
        position: fixed;
        z-index: 1;
        top: 0;
        overflow-x: hidden;
        padding-top: 20px;
    }

    .left {
        left: 0;
        background-color: #2b6777;
    }

    .right {
        right: 0;
        background-color: #2b7a78;
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
    }

    .centered img {
        width: 200px;
        border-radius: 50%;
    }

    .button {
        height: 50px;
        width: 300px;
        position: relative;
        background-color: transparent;
        cursor: pointer;
        border: 2px solid var(--white);
        overflow: hidden;
        border-radius: 30px;
        color: #333;
        transition: all 0.5s ease-in-out;
    }

    .btn-txt {
        z-index: 1;
        font-weight: 800;
        letter-spacing: 4px;
    }

    .type1::after {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        transition: all 0.5s ease-in-out;
        background-color: var(--blue);
        border-radius: 30px;
        visibility: hidden;
        height: 10px;
        width: 10px;
        z-index: -1;
    }

    .button:hover {
        box-shadow: 1px 1px 200px #252525;
        color: #fff;
        border: none;
    }

    .type1:hover::after {
        visibility: visible;
        transform: scale(100) translateX(2px);
    }
</style>

<body>
    <a href="Reg_Seeker.php">
        <div class="split left">
            <div class="centered">
                <img src="Pictures/Seeker.png" alt="APPLICANT">
                <h2>APPLICANT REGISTRATIONS</h2>
                <button class="button type1">
                    <span class="btn-txt">Click to Register as an Applicant</span>
                </button>
            </div>
        </div>
    </a>

    <a href="Reg_Employer.php">
        <div class="split right">
            <div class="centered">
                <img src="Pictures/Employer.png" alt="Employer">
                <h2>EMPLOYER REGISTRATIONS</h2>
                <button class="button type1">
                    <span class="btn-txt">Click to Register as an Employer</span>
                </button>
            </div>
        </div>
    </a>
</body>

</html>