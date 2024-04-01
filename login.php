<?php
$servername = "sql206.infinityfree.com";
$username = "if0_36266350"; // MySQL User Name
$password = "rfetyEc7YuZSZ0o"; // MySQL Password
$dbname = "if0_36266350_website"; // MySQL DB Name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if login form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Escape user input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    // Check if username and password are provided
    if (empty($username) || empty($password)) {
        $error = "Please enter your username and password.";
    } else {
        // Fetch user data based on username
        $sql = "SELECT * FROM registration WHERE user = '$username'";
        $result = $conn->query($sql);

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();  // Get user data as an associative array

            // Verify password using password_verify (requires password_hash in registration)
            if (password_verify($password, $user['pass'])) {
                // Login successful (redirect or start session)
                session_start();  // Start session if not already started
                $_SESSION['user_id'] = $user['id'];  // Store user ID in session
                header("Location: home.php");  // Redirect to user home page
                exit; // Stop further execution
            } else {
                $error = "Invalid username or password.";
            }
        } else {
            $error = "Invalid username or password.";
        }
    }
}
$conn->close();
?>

<html>
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@700&family=Figtree:wght@700&display=swap" rel="stylesheet">
        <style>
            * {
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }

            body {
                display: flex;
                width: 100vw;
                height: 100vh;
                background-color: #24242c;
            }

            .container {
                width: 50%;
                height: 100%;
                background-color: #24242c;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 15px;
            }

            .pic {
                width: 50%;
                height: 100%;
                overflow: hidden;
                background-image: url("https://res.cloudinary.com/tribune-blog/image/upload/v1711855884/pexels-mehmet-turgut-kirkgoz-16841060_hadobc.jpg");
                background-size: cover;
                background-position: center;
            }

            /* .pic2 {
                width: 100%;
                height: 15px;
                position: absolute;
                display: none;
                top: 0;
                background-image: url("https://4kwallpapers.com/images/wallpapers/dark-blue-pink-2560x2560-12661.jpg");
                background-size: cover;
                background-position: center;
            } */

            .inp {
                width: 350px;
                height: 50px;
                max-height: 50px;
                min-height: 50px;
                display: flex;
                align-items: center;
                position: relative;
            }

            label {
                position: absolute;
                left: 20px;
                color: #777780;
                height: 20px;
                transform: translateY(2.5px);
                padding-left: 5px;
                cursor: text;
                padding-right: 5px;
                transition: .2s;
                font-family: Arial, Helvetica, sans-serif;
            }

            input {
                width: 100%;
                height: 100%;
                background-color: transparent;
                border: 2px solid #494954;
                border-radius: 10px;
                outline: none;
                transition: .4s;
                color: #fff;
                padding-left: 20px;
                padding-right: 20px;
                font-size: 15px;
            }

            input:focus {
                border: 2px solid #1f1fff;
                box-shadow: #6767ff 0px 1px 1px, #6767ff 0px 0px 0px 1px;
            }

            input:focus + label {
                left: 20px;
                transform: translateY(-22px);
                font-size: 12px;
                background-color: #24242c;
            }

            .up {
                left: 20px;
                transform: translateY(-22px);
                font-size: 12px;
                background-color: #24242c;
            }

            button {
                width: 350px;
                height: 50px;
                min-height: 50px;
                max-height: 50px;
                background-color: #2020db;
                border: 2px solid #1f1fff;
                border-radius: 50px;
                outline: none;
                transition: .4s;
                color: #fff;
                padding-left: 20px;
                padding-right: 20px;
                font-size: 15px;
                cursor: pointer;
                font-family: 'Figtree', sans-serif;
            }

            button:hover {
                background-color: #1717c2;
                border: 2px solid #1717c2;
            }

            h1 {
                font-family: 'Be Vietnam Pro', sans-serif;
                font-family: 'Figtree', sans-serif;
                color: #fff;
                margin-bottom: 20px;
            }

            a {
                color: #bbbbbb;
                text-decoration: none;
                font-size: 12px;
                font-family: 'Figtree', sans-serif;
            }

            a:hover {
                text-decoration: underline;
            }

            img {
                width: 120px;
            
            }

            @media only screen and (max-width: 750px) {
                .pic {
                display: none;
                }

                /* .pic2 {
                    display: block;
                } */

                .container {
                    width: 100%;
                }
            }

            @media only screen and (max-height: 450px) {
                .pic {
                display: none;
                }

                .container {
                    width: 100%;
                }

                body {
                    padding-bottom: 10px;
                    overflow: scroll;
                    height: 100%;
                }
            }
            </style>
    </head>
    <body>
        <form class="container" action="login.php" method="post" >
            <div class="pic2"></div>
            <img src="https://res.cloudinary.com/tribune-blog/image/upload/v1708315844/lo_ve_1_ugfo9b.png" alt="">
            <h1>Log in To Continue</h1>
            <?php if (!empty($error)) : ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php endif; ?>
            <div class="inp">
                <input type="text" id="username" name="user"/>
                <label onclick="focusinp('usr')" for="Username">Username</label>
            </div>
            <div class="inp">
                <input type="password" id="password" name="pass"/>
                <label onclick="focusinp('pass')" for="Password">Password</label>
            </div>
            <div style="display: flex;"><a href="">Forgot Password? - Support</a></div>
            <button type="submit">Login</button>
            <a  onclick="myFunction()" href="signup.php">Dont have a account? Sign up</a>
        </form>
        <div class="pic">
        </div>
    </body>
</html>