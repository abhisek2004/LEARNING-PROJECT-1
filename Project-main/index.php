<?php

require 'connect.php';
$userAlreadyExists = false;
$registered = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Form</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="wrapper">
        <div class="form-wrapper sign-up">
            <form action="index.php" method="post">
                <h2>Sign Up</h2>
                <div class="input-group">
                    <input type="text" name="Username" required>
                    <label for="Username">Username</label>
                </div>
                <div class="input-group">
                    <input type="email" name="Email" required>
                    <label for="Email">Email</label>
                </div>
                <div class="input-group">
                    <input type="password" name="Password" required>
                    <label for="Password">Password</label>
                </div>
                <button type="submit" class="btn">Sign Up</button>
                <div class="sign-link">
                    <p>Already have an account? <a href="#" class="signIn-link">Sign In</a></p>
                </div>
            </form>
        </div>
        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Username = $_POST['Username'];
            $Password = $_POST['Password'];
            $Email = $_POST['Email'];
            if ($Username != null) {
                $userExists = "SELECT * FROM `Users` WHERE Username like '$Username';";

                $result = mysqli_query($conn, $userExists);
                $rows = mysqli_num_rows($result);
                if ($rows > 0) {
                    // echo "user alrady exists";
                    $userAlreadyExists = true;
                } else {
                    $hash = password_hash($Password, PASSWORD_DEFAULT);
                    $sql = "INSERT INTO `Users` (`ID`,`Username`,`Email`,`Password`) VALUES (null,'$Username','$Email','$hash');";

                    $resultSql = mysqli_query($conn, $sql);

                    if ($result) {
                        // echo 'successfully registered';
                        $registered = true;
                    }
                }
            }
        }
        ?>
        <div class="form-wrapper sign-in">
            <form action="index.php" method="post">
                <h2>Login</h2>
                <div class="input-group">
                    <input type="text" name="Username_Log" required>
                    <label for="Username_Log">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" name="Password_Log" required>
                    <label for="Password_Log">Password</label>
                </div>
                <div class="forgot-pass">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</></button></button>
                <!-- <button type="submit" class="btn">Login</button> -->
                <div class="sign-link">
                    <p>Don't have an account? <a href="#" class="signUp-link">Sign Up</a></p>
                </div>
            </form>
        </div>
    </div>
   

    <?php include"login.php";?>
    <?php if ($userAlreadyExists) : ?>
        <div id="alertMessage" class="alert alert-danger alert-dismissible fade show" role="alert" style="position: fixed;top:0;">
            <strong>Failed!</strong> Username already exists.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <?php if ($registered) : ?>
        <div id="alertMessage" class="alert alert-success alert-dismissible fade show" role="alert" style="position: fixed;top:0">
            <strong>Success !</strong> You have successfully registered.Now login to continue.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <script>
        setTimeout(function() {
            document.getElementById('alertMessage').style.display = 'none';
        }, 5000);
    </script>
    </script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>