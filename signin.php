<?php
require_once("dbConnection.php");
?>

<html>
<head>	
	<title>Sign In</title>
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
    <form action="addSignin.php" method="post" name="signin">
        <div class="center-login">
            <h2>Sign In</h2>
            <input type="text" name="username" placeholder="Username"/><br/>
            <input type="password" name="password" placeholder="Password"/><br/>
            <input class="button" type="submit" name="submit" value="Login">
            <br/>
            <p>Don't have an account <a href="signup.php">Sign Up</a></p>
        </div>
    </form>
</body>
</html>
