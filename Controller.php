<?php
$errors = [];
session_start();

// Job Seeker Registration
if (isset($_POST["seeker_submit"])) {
    $seeker_first_name = $_POST["first_name"];
    $seeker_last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $passwordhash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();
    if (empty($seeker_first_name) or empty($seeker_last_name) or empty($email) or empty($password) or empty($confirm_password)) {
        array_push($errors, "All fields are required!");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Invalid email!");
    }
    if (strlen($password) < 8) {
        array_push($errors, "Password must be 8 characters long");
    }
    if ($password !== $confirm_password) {
        array_push($errors, "Password does not much!");
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        require_once "Database.php";
        $sql = "INSERT INTO seeker (seeker_first_name, seeker_last_name, email, password) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($connect);
        $preparestmt = mysqli_stmt_prepare($stmt, $sql);
        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "ssss", $seeker_first_name, $seeker_last_name, $email, $passwordhash);
            mysqli_stmt_execute($stmt);
            echo "<div class= 'alert alert-success'>You are registered successfully!</div>";
        } else {
            die("SOMETHING WENT WRONG!");
        }
    }
}

// Employer Registration
if (isset($_POST["employer_submit"])) {
    $employer_first_name = $_POST["first_name"];
    $employer_last_name = $_POST["last_name"];
    $employer_posistion = $_POST["employer_posistion"];
    $company_name = $_POST["company_name"];
    $company_email = $_POST["email"];
    $company_number = $_POST["company_number"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $passwordhash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();
    if (empty($employer_first_name) or empty($employer_last_name) or empty($company_name) or empty($company_email) or  empty($company_number) or empty($password) or empty($confirm_password)) {
        array_push($errors, "All fields are required!");
    }
    if (!filter_var($company_email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Invalid email!");
    }
    if (strlen($company_number) < 11) {
        array_push($errors, "Company Number must be 11 characters long");
    }
    if (strlen($password) < 8) {
        array_push($errors, "Password must be 8 characters long");
    }
    if ($password !== $confirm_password) {
        array_push($errors, "Password does not much!");
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    } else {
        require_once "Database.php";
        $sql = "INSERT INTO employer (employer_first_name, employer_last_name, employer_posistion, company_name, company_email, company_number, password) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($connect);
        $preparestmt = mysqli_stmt_prepare($stmt, $sql);
        if ($preparestmt) {
            mysqli_stmt_bind_param($stmt, "sssssss", $employer_first_name, $employer_last_name, $employer_posistion, $company_name, $company_email, $company_number, $passwordhash);
            mysqli_stmt_execute($stmt);
            echo "<div class= 'alert alert-success'>You are registered successfully!</div>";
        } else {
            die("SOMETHING WENT WRONG!");
        }
    }
}


// Employer LogIn
if (isset($_POST["employer_login"])) {
    session_start();
    $company_email = $_POST["email"];
    $password = $_POST["password"];
    require_once "Database.php";
    $sql = "SELECT * FROM employer WHERE company_email = '$company_email'";
    $result = mysqli_query($connect, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($user) {
        if (password_verify($password, $user["password"])) {
            $_SESSION['email'] = $email;
            header("Location: Index.php");
            die();
            session_start();
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM employer WHERE email = '$email'";
            $result = mysqli_query($connect, $sql);
            while ($row = mysqli_fetch_object($result)) {
                $employer_first_name = $row->employer_first_name;
                $employer_last_name = $row->employer_last_name;
            }
        } else {
            echo "<div class = 'alert alert-danger'>Password does not much!</div>";
        }
    } else {
        echo "<div class = 'alert alert-danger'>Email does not much!</div>";
    }
}
if (isset($_POST["employer_login"])) {
    session_start();
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once "Database.php";
    $sql = "SELECT * FROM admin WHERE email = '$email' AND password='$password'";
    $result = mysqli_query($connect, $sql);
    $user = mysqli_num_rows($result);
    if ($user) {
        $_SESSION['email'] = $email;
        header("Location: AdminDashboard.php");
        die();
        session_start();
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM admin WHERE email = '$email'";
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_object($result)) {
            $admin_name = $row->admin_name;
        }
    }
}

// Seeker LogIn
if (isset($_POST["seeker_login"])) {
    session_start();
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once "Database.php";
    $sql = "SELECT * FROM seeker WHERE email = '$email'";
    $result = mysqli_query($connect, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($user) {
        if (password_verify($password, $user["password"])) {
            $_SESSION['email'] = $email;
            header("Location: Profile.php");
            die();
            session_start();
            $email = $_SESSION['email'];
            $sql = "SELECT * FROM seeker WHERE email = '$email'";
            $result = mysqli_query($connect, $sql);
            while ($row = mysqli_fetch_object($result)) {
                $seeker_first_name = $row->seeker_first_name;
                $seeker_last_name = $row->seeker_last_name;
            }
        } else {
            echo "<div class = 'alert alert-danger'>Password does not much!</div>";
        }
    } else {
        echo "<div class = 'alert alert-danger'>Email does not much!</div>";
    }
}
if (isset($_POST["seeker_login"])) {
    session_start();
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once "Database.php";
    $sql = "SELECT * FROM admin WHERE email = '$email' AND password='$password'";
    $result = mysqli_query($connect, $sql);

    $user = mysqli_num_rows($result);
    if ($user) {
        $_SESSION['email'] = $email;
        header("Location: AdminDashboard.php");
        die();
        session_start();
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM admin WHERE email = '$email'";
        $result = mysqli_query($connect, $sql);
        while ($row = mysqli_fetch_object($result)) {
            $admin_name = $row->admin_name;
        }
    }
}
