<?php
require_once("dbConnection.php");
?>

<html>
<head>	
	<title>Sign Up</title>
    <link rel="icon" type="image/x-icon" href="uvers.png">
</head>
<style type="text/css">
	.center-login {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        border: 2px solid skyblue;
        padding: 50px;
        border-radius: 50px
    }

    .center-login h2 {
        margin-bottom: 20px;
    }

    .center-login input {
        margin-bottom: 10px;
        padding: 8px;
        border: 1px solid skyblue;
        border-radius: 5px;
    }

    .center-login .button {
        padding: 10px 20px;
        background-color: #3498db;
        color: #fff;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .center-login .button:hover {
        background-color: blue;
    }

</style>
<body>
    <form action="addSignup.php" method="post" name="signup">
        <div class="center-login">
            <h2>Sign Up</h2>
            <input type="text" name="username" placeholder="Username"/><br/>
            <input type="text" name="email" placeholder="Email"/><br/>
            <input type="password" name="password" placeholder="Password"/><br/>
            <input type="password" name="confirm_pass" placeholder="Confirm Password"/><br/>
            <input class="button" type="submit" name="submit" value="Register">
            <br/>
            <p>Have an account <a href="signin.php">Sign In</a></p>
        </div>
    </form>
</body>
</html>
