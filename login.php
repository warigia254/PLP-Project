<?php error_reporting(0); ?> 
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
</head>
<body>
    <div class="container">

        <div class="header">

            <h2>Log In</h2>

        </div>

        <form action="login.php" method="post">
        
        <div>

            <label for="username">Username: </label>
            <input type="text" name="username" required>

        </div>

        <div>
            
            <label for="password">Password: </label>
            <input type="password" name="password_1" required>

        </div>

        <button type="submit" name="login_user"> Log In </button>

        <p>Not a user?<a href="registration.php"><b>Register Here </b></a></p>




        </form>





    </div>


</body>
</html>