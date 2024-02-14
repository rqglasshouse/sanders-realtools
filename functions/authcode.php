<?php
session_start();
include('../config/dbcon.php');



if (isset($_POST['register_btn'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);


    // Check if email is already in use
    $check_email_query = "SELECT email FROM users WHERE email = '$email' ";
    $check_email_query_run =  mysqli_query($con, $check_email_query);

    // We run an if statement to check if the email query is greater than 0, meaning is the email already stored in the DB.
    if (mysqli_num_rows($check_email_query_run) > 0) {
        $_SESSION['message'] = "Email already in use";
        header('Location: ../sign-up.php');
    } else {

        // We check if passwords match, and then insert data into our database.
        if ($password == $cpassword) {
            // Insert user data
            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert user data with the hashed password
            $insert_query = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
            $stmt = mysqli_prepare($con, $insert_query);
            mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPassword);
            $insert_query_run = mysqli_stmt_execute($stmt);

            if ($insert_query_run) {
                $_SESSION['message'] = "Registration successful";
                header('Location: ../index.php');
                die();
            } else {
                $_SESSION['message'] = "Something went wrong";
                header('Location: ../index.php');
                die();
            }
        } else {
            $_SESSION['message'] = "Passwords do not match";
            header('Location: ../sign-up.php');
            die();
        }
    }
    // Login functions here -->

        } else if (isset($_POST['sign-in-btn'])) {
            $email = mysqli_real_escape_string($con, $_POST['email']);
            // The password variable holds the plaintext password submitted by the user
            $password = mysqli_real_escape_string($con, $_POST['password']);
            
            // Modify the login query to only select the user based on email
            $login_query = "SELECT * FROM users WHERE email = ?";
            $stmt = mysqli_prepare($con, $login_query);
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            
            if ($user = mysqli_fetch_assoc($result)) {
                // Now verify the hashed password with the plaintext password
                if (password_verify($password, $user['password'])) {
                    
                    // Password is correct

                    // Regenerate session ID
                    session_regenerate_id(true);

                    $_SESSION['auth'] = true;
                    $username = $user['name'];
                    $useremail = $user['email'];
                    
                    $_SESSION['auth_user'] = [
                        'name' => $username,
                        'email' => $useremail
                    ];
            
                    $_SESSION['message'] = "Logged in successfully";
                    header('Location: ../admin/index.php');
                    die();
                } else {
                    // Password is incorrect
                    $_SESSION['message'] = "Invalid credentials";
                    header('Location: ../index.php');
                    die();
                }
            } else {
                // Email not found
                $_SESSION['message'] = "Invalid credentials";
                header('Location: ../index.php');
                die();
            }
}



?>
