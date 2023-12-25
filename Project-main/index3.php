<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>User Profile</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <div class="profile">
            <div class="photo">
                <div alt="Profile Picture" class="profile-picture"></div>
                <h1 class="profile-name">Reach Me</h1>
            </div>
            <hr>
            <div class="Setting">
                <div class="icon"><img src="./img2/icons8-setting.gif" alt="" srcset=""></div>
                <p> Setting & Privacy</p>
            </div>
            <div class="Setting">
                <a href="./index4.php" class="setting">
                    <img src="./img2/icons8-customer-support-50.png" alt="" srcset="">
                    <p>Customer-Support</p>
                </a>
            </div>
            <div class="Setting">
                <div class="icon"><img src="./img2/icons8-accessibility-32.png" alt="" srcset=""></div>
                <p> Accessibility</p>
            </div>
            <div class="Setting">
                <a href="./index5.php" class="setting">
                    <img src="./img2/icons8-feedback-48.png" alt="" srcset="">
                    <p>Give Feedback</p>
                </a>
            </div>
            <div class="Setting">
                <a href="./index.php" class="setting">
                    <img src="./img2/icons8-log-out-50.png" alt="" srcset="">
                    <p>Log Out</p>
                </a>
            </div>
        </div>
    </body>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(#2196f3, #e91e63);
            width: 100%;
            height: 100vh;
            overflow: hidden;

        }

        .profile {
            width: 20%;
            max-width: 600px;
            margin: 20px auto;
            background-color: rgba(0, 0, 255, 0.101);

            padding: 20px;
            border-radius: 8px;
            box-shadow: 3px 3px 40px rgba(192, 180, 180, 0.1);
        }


        .photo {
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 30px;
        }

        .profile-picture {
            height: 50px;
            width: 50px;
            background-image: url(./image/logo.png);
            border-radius: 50%;
            object-fit: cover;
            background-color: aqua;
            background-size: cover;
            background-position: center;
        }

        .Setting {
            display: flex;
            justify-content: start;
            gap: 40px;
            align-items: center;
        }

        .Setting a {
            display: flex;
            gap: 40px;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: black;

        }

        .Setting img {
            height: 50px;
            width: 50px;
        }

        .profile-name {
            font-size: 24px;
            margin: 5px 0;
        }

        .profile-bio {
            font-size: 16px;
            color: #555;
        }

        .profile-details {
            list-style: none;
            padding: 0;
        }

        .profile-details li {
            margin-bottom: 5px;
        }
    </style>

</html>