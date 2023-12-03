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
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    // $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    if (empty($username) || empty($password)) {
        if (empty($username)) {
            echo "<font color='red'>Username is required.</font><br/>";
        }

        if (empty($password)) {
            echo "<font color='red'>Password is required.</font><br/>";
        }

    } else {
        $result = mysqli_query($mysqli, "SELECT id, password_hash FROM res_users WHERE username='$username'");
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($password == $row['password_hash']) {
                header("Location: index.php");
                // exit();
            } else {
                echo "<font color='red'>Username or Password didn't match.</font><br/>";
                echo "<a href='signup.php'>Go Back</a>";
            }
        } else {
            echo "Error: " . mysqli_error($mysqli);
        }
    }
}
?>
</body>
</html>
