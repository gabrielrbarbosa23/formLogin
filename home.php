<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <style>

        :root {
            --white-color: hsl(0, 0%, 100%);
            --black-color: hsl(0, 0%, 0%);
            --body-font: "Poppins", sans-serif;
            --h1-font-size: 1.75rem;
            --normal-font-size: 1rem;
            --small-font-size: .813rem;
            --font-medium: 500;
        }

        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body{
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            color: white;
        }

        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            border-radius: 10px;
        }

        a{
            text-decoration: none;
            color: white;
            border: 3px solid var(--white-color);
            border-radius: 10px;
            padding: 10px;
        }

        a:hover{
            background-color: var(--white-color);
            color: var(--black-color);
        }

        .login {
            position: relative;
            height: 100vh;
            display: grid;
            align-items: center;
        }

        .login__img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        h1 {
            margin-bottom: 3rem;
        }
    </style>
</head>
<body>
    <div class="login">
        <img src="./img/background.jpg" alt="login image" class="login__img">
        <div class="box">
            <h1>Login form</h1>
            <a href="login.php">Login</a>
        </div>
    </div>
</body>
</html>