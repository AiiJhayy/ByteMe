<?php
include_once("Database.php");
// Connection Created Successfully
$errors = [];
session_start();

// Store All Errors
$errors = [];

// When Sign Up Button Clicked - SEEKER
if (isset($_POST['seeker_signup'])) {
    $seeker_first_name = mysqli_real_escape_string($connect, $_POST['seeker_first_name']);
    $seeker_last_name = mysqli_real_escape_string($connect, $_POST['seeker_last_name']);
    $seeker_email = mysqli_real_escape_string($connect, $_POST['seeker_email']);
    $seeker_gender = mysqli_real_escape_string($connect, $_POST['seeker_gender']);

    // check password length if password is less then 8 character so
    if (strlen(trim($_POST['password'])) < 8) {
        $errors['password'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
    } else {
        // if password not matched so
        if ($_POST['password'] != $_POST['confirmPassword']) {
            $errors['password'] = 'Password not matched';
        } else {
            $password = md5($_POST['password']);
        }
    }
    // generate a random Code
    $code = rand(999999, 111111);
    // set Status
    $status = "Not Verified";

    // check email validation and save information
    $sql = "SELECT * FROM seeker WHERE seeker_email = '$seeker_email'";
    $res = mysqli_query($connect, $sql) or die('query failed');
    if (mysqli_num_rows($res) > 0) {
        $errors['seeker_email'] = 'Email is Already Taken';
    }

    // count erros
    if (count($errors) === 0) {
        $insertQuery = "INSERT INTO seeker (seeker_first_name,seeker_last_name,seeker_email,password,seeker_gender,code,status)
            VALUES ('$seeker_first_name','$seeker_last_name','$seeker_email','$password','$seeker_gender',$code,'$status')";
        $insertInfo = mysqli_query($connect, $insertQuery);

        // Send Varification Code In Gmail
        if ($insertInfo) {
            // Configure Your Server To Send Mail From Local Host Link In Video Description (How To Config LocalHost Server)
            $subject = 'Email Verification Code';
            $message = "our verification code is $code";
            $sender = 'From: creatingpossibility11@gmail.com';

            if (mail($seeker_email, $subject, $message, $sender)) {
                $message = "We've sent a verification code to your Email <br> $seeker_email";

                $_SESSION['message'] = $message;
                header('location: OTP_Seeker.php');
            } else {
                $errors['otp_errors'] = 'Failed while sending code!';
            }
        } else {
            $errors['db_errors'] = "Failed while inserting data into database!";
        }
    }
}

// When Sign Up Button Clicked - EMPLOYER
if (isset($_POST['employer_signup'])) {
    $employer_first_name = mysqli_real_escape_string($connect, $_POST['employer_first_name']);
    $employer_last_name = mysqli_real_escape_string($connect, $_POST['employer_last_name']);
    $employer_posistion = mysqli_real_escape_string($connect, $_POST['employer_posistion']);
    $employer_company = mysqli_real_escape_string($connect, $_POST['employer_company']);
    $employer_email = mysqli_real_escape_string($connect, $_POST['employer_email']);
    $employer_gender = mysqli_real_escape_string($connect, $_POST['employer_gender']);

    // check password length if password is less then 8 character so
    if (strlen(trim($_POST['password'])) < 8) {
        $errors['password'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
    } else {
        // if password not matched so
        if ($_POST['password'] != $_POST['confirmPassword']) {
            $errors['password'] = 'Password not matched';
        } else {
            $password = md5($_POST['password']);
        }
    }
    // generate a random Code
    $code = rand(999999, 111111);
    // set Status
    $status = "Not Verified";

    // check email validation and save information
    $sql = "SELECT * FROM employer WHERE employer_email = '$employer_email'";
    $res = mysqli_query($connect, $sql) or die('query failed');
    if (mysqli_num_rows($res) > 0) {
        $errors['employer_email'] = 'Email is Already Taken';
    }

    // count erros
    if (count($errors) === 0) {
        $insertQuery = "INSERT INTO employer (employer_first_name, employer_last_name, employer_posistion, employer_company, employer_email, password, employer_gender, code, status)
            VALUES ('$employer_first_name','$employer_last_name', '$employer_posistion', '$employer_company', '$employer_email','$password','$employer_gender',$code,'$status')";
        $insertInfo = mysqli_query($connect, $insertQuery);

        // Send Varification Code In Gmail
        if ($insertInfo) {
            // Configure Your Server To Send Mail From Local Host Link In Video Description (How To Config LocalHost Server)
            $subject = 'Email Verification Code';
            $message = "our verification code is $code";
            $sender = 'From: creatingpossibility11@gmail.com';

            if (mail($employer_email, $subject, $message, $sender)) {
                $message = "We've sent a verification code to your Email <br> $seeker_email";

                $_SESSION['message'] = $message;
                header('location: OTP_Employer.php');
            } else {
                $errors['otp_errors'] = 'Failed while sending code!';
            }
        } else {
            $errors['db_errors'] = "Failed while inserting data into database!";
        }
    }
}

// Employer LogIn
if (isset($_POST["employer_login"])) {
    $employer_email = mysqli_real_escape_string($connect, $_POST['employer_email']);
    $password = md5($_POST['password']);

    $emailQuery = "SELECT * FROM employer WHERE employer_email = '$employer_email'";
    $email_check = mysqli_query($connect, $emailQuery);

    if (mysqli_num_rows($email_check) > 0) {
        $passwordQuery = "SELECT * FROM employer WHERE employer_email = '$employer_email' AND password = '$password'";
        $password_check = mysqli_query($connect, $passwordQuery);
        if (mysqli_num_rows($password_check) > 0) {
            $fetchInfo = mysqli_fetch_assoc($password_check);
            $status = $fetchInfo['status'];
            $employer_first_name = $fetchInfo['employer_first_name'] . " " . $fetchInfo['employer_last_name'];
            $_SESSION['employer_first_name'] = $employer_first_name;
            $_SESSION['employer_email'] = $fetchInfo['employer_email'];
            $_SESSION['password'] = $fetchInfo['password'];
            if ($status === 'Verified') {
                header('location: Index.php');
            } else {
                $info = "It's look like you haven't still verify your email $employer_email";
                $_SESSION['message'] = $info;
                header('location: otp.php');
            }
        } else {
            $errors['employer_email'] = 'Password did not matched';
        }
    } else {
        $errors['employer_email'] = 'Invalid Email Address';
    }
}
if (isset($_POST["employer_login"])) {
    $email = $_POST["employer_email"];
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
    $seeker_email = mysqli_real_escape_string($connect, $_POST['seeker_email']);
    $password = md5($_POST['password']);

    $emailQuery = "SELECT * FROM seeker WHERE seeker_email = '$seeker_email'";
    $email_check = mysqli_query($connect, $emailQuery);

    if (mysqli_num_rows($email_check) > 0) {
        $passwordQuery = "SELECT * FROM seeker WHERE seeker_email = '$seeker_email' AND password = '$password'";
        $password_check = mysqli_query($connect, $passwordQuery);
        if (mysqli_num_rows($password_check) > 0) {
            $fetchInfo = mysqli_fetch_assoc($password_check);
            $status = $fetchInfo['status'];
            $seeker_first_name = $fetchInfo['seeker_first_name'] . " " . $fetchInfo['seeker_last_name'];
            $_SESSION['seeker_first_name'] = $seeker_first_name;
            $_SESSION['seeker_email'] = $fetchInfo['seeker_email'];
            $_SESSION['password'] = $fetchInfo['password'];
            if ($status === 'Verified') {
                header('location: Timeline.php');
            } else {
                $info = "It's look like you haven't still verify your email $seeker_email";
                $_SESSION['message'] = $info;
                header('location: otp.php');
            }
        } else {
            $errors['seeker_email'] = 'Password did not matched';
        }
    } else {
        $errors['seeker_email'] = 'Invalid Email Address';
    }
}
if (isset($_POST["seeker_login"])) {
    $email = $_POST["seeker_email"];
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


// if Verify Button Clicked - SEEKER
if (isset($_POST['verify_seeker'])) {
    $_SESSION['message'] = "";
    $otp_seeker = mysqli_real_escape_string($connect, $_POST['otp_seeker']);
    $otp_query = "SELECT * FROM seeker WHERE code = $otp_seeker";
    $otp_result = mysqli_query($connect, $otp_query);

    if (mysqli_num_rows($otp_result) > 0) {
        $fetch_data = mysqli_fetch_assoc($otp_result);
        $fetch_code = $fetch_data['code'];

        $update_status = "Verified";
        $update_code = 0;

        $update_query = "UPDATE seeker SET status = '$update_status', code = $update_code WHERE code = $fetch_code";
        $update_result = mysqli_query($connect, $update_query);

        if ($update_result) {
            header('location: LogIn_Seeker.php');
        } else {
            $errors['db_error'] = "Failed To Insering Data In Database!";
        }
    } else {
        $errors['otp_error'] = "You enter invalid verification code!";
    }
}

// if Verify Button Clicked - EMPLOYER
if (isset($_POST['verify_employer'])) {
    $_SESSION['message'] = "";
    $otp_employer = mysqli_real_escape_string($connect, $_POST['otp_employer']);
    $otp_query = "SELECT * FROM employer WHERE code = $otp_employer";
    $otp_result = mysqli_query($connect, $otp_query);

    if (mysqli_num_rows($otp_result) > 0) {
        $fetch_data = mysqli_fetch_assoc($otp_result);
        $fetch_code = $fetch_data['code'];

        $update_status = "Verified";
        $update_code = 0;

        $update_query = "UPDATE employer SET status = '$update_status', code = $update_code WHERE code = $fetch_code";
        $update_result = mysqli_query($connect, $update_query);

        if ($update_result) {
            header('location: LogIn_Seeker.php');
        } else {
            $errors['db_error'] = "Failed To Insering Data In Database!";
        }
    } else {
        $errors['otp_error'] = "You enter invalid verification code!";
    }
}

//If seeker_find button was clicked (Forgot Pass) - SEEKER
if (isset($_POST['seeker_find'])) {
    $seeker_email = $_POST['seeker_email'];
    $_SESSION['seeker_email'] = $seeker_email;

    $emailCheckQuery = "SELECT * FROM seeker WHERE seeker_email = '$seeker_email'";
    $emailCheckResult = mysqli_query($connect, $emailCheckQuery);

    if ($emailCheckResult) {
        if (mysqli_num_rows($emailCheckResult) > 0) {
            $code = rand(999999, 111111);
            $update_query = "UPDATE seeker SET code = '$code' WHERE seeker_email = '$seeker_email'";
            $update_result = mysqli_query($connect, $update_query);
            if ($update_result) {
                $subject = 'Email Verification Code';
                $message = "our verification code is $code";
                $sender = 'From: creatingpossibility11@gmail.com';

                if (mail($seeker_email, $subject, $message, $sender)) {
                    $message = "We've sent a verification code to your Email <br> $seeker_email";

                    $_SESSION['message'] = $message;
                    header('location: VerifyEmail_Seeker.php');
                } 
                else {
                    $errors['otp_errors'] = 'Failed while sending code!';
                }
            }
            else {
                $errors['db_errors'] = "Failed while inserting data into database!";
            }
        }
        else {
            $errors['invalidEmail'] = "Invalid Email Address";
        } 
    }
    else {
        $errors['db_errors'] = "Failed while checking data from database!";
    }
}

//If seeker_find button was clicked (Forgot Pass) - EMPLOYER
if (isset($_POST['employer_find'])) {
    $employer_email = $_POST['employer_email'];
    $_SESSION['employer_email'] = $employer_email;

    $emailCheckQuery = "SELECT * FROM employer WHERE employer_email = '$employer_email'";
    $emailCheckResult = mysqli_query($connect, $emailCheckQuery);

    if ($emailCheckResult) {
        if (mysqli_num_rows($emailCheckResult) > 0) {
            $code = rand(999999, 111111);
            $update_query = "UPDATE employer SET code = '$code' WHERE employer_email = '$employer_email'";
            $update_result = mysqli_query($connect, $update_query);
            if ($update_result) {
                $subject = 'Email Verification Code';
                $message = "our verification code is $code";
                $sender = 'From: creatingpossibility11@gmail.com';

                if (mail($employer_email, $subject, $message, $sender)) {
                    $message = "We've sent a verification code to your Email <br> $seeker_email";

                    $_SESSION['message'] = $message;
                    header('location: VerifyEmail_Employer.php');
                } 
                else {
                    $errors['otp_errors'] = 'Failed while sending code!';
                }
            }
            else {
                $errors['db_errors'] = "Failed while inserting data into database!";
            }
        }
        else {
            $errors['invalidEmail'] = "Invalid Email Address";
        } 
    }
    else {
        $errors['db_errors'] = "Failed while checking data from database!";
    }
}

//if verify_Email button was clicked - SEEKER
if(isset($_POST['verify_email_seeker'])) {
    $_SESSION['message'] = "";
    $OTPVerify = mysqli_real_escape_string($connect, $_POST['OTPVerify']);
    $verifyQuery = "SELECT * FROM seeker WHERE code = $OTPVerify";
    $runVerifyQuery = mysqli_query($connect, $verifyQuery);
    if($runVerifyQuery) {
        if(mysqli_num_rows($runVerifyQuery) > 0) {
            $newQuery = "UPDATE seeker SET code = 0";
            header("location: NewPass_Seeker.php");
        }
        else {
            $errors['verification_error'] = "Invalid Verification Code!";
        }
    }
    else {
        $errors['db_error'] = "Failed while checking Verification Code from database!";
    }
}

//if newpass_seeker button was clicked - SEEKER
if(isset($_POST['newpass_seeker'])) {
    $password = md5($_POST['password']);
    $confirmPassword = md5(($_POST['confirmPassword']));
    if (strlen(trim($password)) < 8) {
        $errors['password'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
    } else {
        // if password not matched so
        if ($password != $_POST['confirmPassword']) {
            $errors['password'] = 'Password not matched';
        } else {
            $password = md5($_POST['password']);
            $seeker_email = $_SESSION['seeker_email'];
            $code = 0;
            $update_password = "UPDATE seeker SET password = '$password' WHERE seeker_email = '$seeker_email'";
            $update_pass = mysqli_query($connect, $update_password);
            session_unset($seeker_email);
            session_destroy();
            header('location: LogIn_Seeker.php');
        }
    }
}

//if verify_Email button was clicked - EMPLOYER
if(isset($_POST['verify_email_employer'])) {
    $_SESSION['message'] = "";
    $OTPVerify = mysqli_real_escape_string($connect, $_POST['OTPVerify']);
    $verifyQuery = "SELECT * FROM employer WHERE code = $OTPVerify";
    $runVerifyQuery = mysqli_query($connect, $verifyQuery);
    if($runVerifyQuery) {
        if(mysqli_num_rows($runVerifyQuery) > 0) {
            $newQuery = "UPDATE employer SET code = 0";
            header("location: NewPass_Employer.php");
        }
        else {
            $errors['verification_error'] = "Invalid Verification Code!";
        }
    }
    else {
        $errors['db_error'] = "Failed while checking Verification Code from database!";
    }
}

//if newpass_seeker button was clicked - EMPLOYER
if(isset($_POST['newpass_employer'])) {
    $password = md5($_POST['password']);
    $confirmPassword = md5(($_POST['confirmPassword']));
    if (strlen(trim($password)) < 8) {
        $errors['password'] = 'Use 8 or more characters with a mix of letters, numbers & symbols';
    } else {
        // if password not matched so
        if ($password != $_POST['confirmPassword']) {
            $errors['password'] = 'Password not matched';
        } else {
            $password = md5($_POST['password']);
            $employer_email = $_SESSION['employer_email'];
            $code = 0;
            $update_password = "UPDATE employer SET password = '$password' WHERE employer_email = '$employer_email'";
            $update_pass = mysqli_query($connect, $update_password);
            session_unset($employer_email);
            session_destroy();
            header('location: LogIn_Employer.php');
        }
    }
}