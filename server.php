<?php error_reporting(0); ?> 

<?php

session_start();

//Initialisng variables

$username = "";
$email = "";

$errors = array();

//Connect to db

$db = mysqli_connect('localhost','root','','mwalimu') or die("could not connect to database");

//Register users

$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//form validation

if(empty($username)) array_push($errors, "Username is required");
if(empty($email)) array_push($errors, "Email is required");
if(empty($password_1)) array_push($errors, "Password is required");
if($password_1 != $password_2) array_push($errors, "Passwords do not match");

//check database for existing user or username

$user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";
 
$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user) {

    if ($user['username'] === $username){array_push($errors, "Username already exists");}
    if ($user['email'] === $email){array_push($errors, "This eamil is already registered");}

}

//Register the user if no error

if(count($errors) == 0){

    $password = md5($password_1); //this will encrypt the password
    $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

    mysqli_query($db,$query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Log in Successful";

    header('location: index.php');
    
}

//Login User

if(isset($_POST['login_user'])){

    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password_1']);

    if(empty($username)){

        array_push($errors, "Username is required");

    }

    if(empty($password)){

        array_push($errors, "Password is required");

    }

    if(count($errors) == 0){

        $password = md5($password);

        $query = "SELECT * FROM user WHETE username = '$username' AND password = '$password'";
        $results = mysqli_query($db, $query);

        if(mysqli_num_rows($results)){

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Logged in successfully";
            header('location: index.php');

        }else{
            array_push($errors, "Incorrct username of password. Please try again.");
        }


    }

}

?>