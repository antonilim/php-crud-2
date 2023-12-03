<html>
<head>
	<title>Sign In</title>
    <link rel="icon" type="image/x-icon" href="uvers.png">
</head>

<body>
<?php
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $confirm_pass = mysqli_real_escape_string($mysqli, $_POST['confirm_pass']); 
    // $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $is_error = false;
	if (empty($username) || empty($email) || empty($password) || empty($confirm_pass)) {
		if (empty($username)) {
			echo "<font color='red'>Username is required.</font><br/>";
            $is_error = true;
		}

        if (empty($email)) {
			echo "<font color='red'>Email is required.</font><br/>";
            $is_error = true;
		}
		
		if (empty($password)) {
			echo "<font color='red'>Password is required.</font><br/>";
            $is_error = true;
		}

        if (empty($confirm_pass)) {
			echo "<font color='red'>Confirm Password is required.</font><br/>";
            $is_error = true;
		}

        if ($password != $confirm_pass) {
            echo "<font color='red'>Password didn't match.</font><br/>";
            $is_error = true;
        }

        if ($is_error) {echo "<a href='signup.php'>Go Back</a>";}
		
	} else { 
        $result = mysqli_query($mysqli, "INSERT INTO res_users (`username`, `email`, `password_hash`,`type`) VALUES ('$username', '$email', '$password','user')");
        if ($result) {
            header("Location: index.php");
        } else {
            echo "<a href='signup.php'>Go Back</a>";
        }
	}
}
?>
</body>
</html>
