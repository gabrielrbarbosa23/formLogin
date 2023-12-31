<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Poppins:wght@500&display=swap');

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

        body,
        input,
        .login__button {
            font-size: var(--normal-font-size);
            font-family: var(--body-font);
        }

        body {
            color: var(--white-color);
        }

        input,
        .login__button {
            border: none;
            outline: none;
        }

        a {
            text-decoration: none;
        }

        img {
            max-width: 100%;
            height: auto;
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

        .login__form {
            position: relative;
            background-color: hsla(0, 0%, 10%, .1);
            border: 2px solid var(--white-color);
            margin-inline: 1.5rem;
            padding: 2.5rem 1.5rem;
            border-radius: 1rem;
            backdrop-filter: blur(8px);
        }
        
        .login__title {
            text-align: center;
            font-size: var(--h1-font-size);
            font-weight: var(--font-medium);
            margin-bottom: 2rem;
        }

        .login__content,
        .login__box {
            display:grid;
        }

        .login__content {
            row-gap: 1.75rem;
            margin-bottom: 1.5rem;
        }

        .login__box {
            grid-template-columns: max-content 1fr;
            align-items: center;
            column-gap: .75rem;
            border-bottom: 2px solid var(--white-color);
        }

        .login__icon,
        .login__eye {
            font-size: 1.25rem;
        }

        .login__input {
            width: 100%;
            padding-block: .8rem;
            background: none;
            color: var(--white-color);
            position: relative;
            z-index: 1;
        }

        .login__box-input {
            position: relative;
        }

        .login__label {
            position: absolute;
            left: 0;
            top: 13px;
            font-weight: var(--font-medium);
            transition: top .3s, font-size .3s;
        }

        .login__eye {
            position: absolute;
            right: 0;
            top: 18px;
            z-index: 10;
            cursor: pointer;
        }

        .login__box:nth-child(2) input {
            padding-right: 1.8rem;
        }

        .login__check,
        .login__check-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .login__check {
            margin-bottom: 1.5rem;
        }

        .login__check-label,
        .login__forgot,
        .login__register {
            font-size: var(--small-font-size);
        }

        .login__check-group {
            column-gap: .5rem;
        }

        .login__check-input {
            width: 16px;
            height: 16px;
        }

        .login__forgot {
            color: var(--white-color);
        }

        .login__forgot:hover {
            text-decoration: underline;
        }

        .login__button {
            width: 100%;
            padding: 1rem;
            border-radius: .5rem;
            background-color: var(--white-color);
            font-weight: var(--font-medium);
            cursor: pointer;
            margin-bottom: 2rem;
        }

        .login__button:hover {
            background-color: #dfe2e0;
        }

        .login__register {
            text-align: center;
        }

        .login__register a {
            color: var(--white-color);
            font-weight: var(--font-medium);
            margin-right: 2rem;
        }

        .login__register a:hover {
            text-decoration: underline;
        }

        .login__input:focus + .login__label {
            top: -12px;
            font-size: var(--small-font-size);
        }

        .login__input:not(:placeholder-shown).login__input:not(:focus) + .login__label {
            top: -12px;
            font-size: var(--small-font-size);
        }

        @media screen and (min-width: 576px){
            .login{
                justify-content: center;
            }

            .login__form {
                width: 432px;
                padding: 4rem 3rem 3.5rem;
                border-radius: 1.5rem;
            }

            .login__title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="login">
        <img src="./img/background.jpg" alt="login image" class="login__img">

        <form action="testLogin.php" method="POST" class="login__form">
            <h1 class="login__title">Login</h1>

            <div class="login__content">
                <div class="login__box">
                    <i class="ri-user-3-line login__icon"></i>

                    <div class="login__box-input">
                        <input type="email" name="email" required class="login__input" placeholder=" ">
                        <label for="" class="login__label">Email</label>
                    </div>
                </div>

                <div class="login__box">
                    <i class="ri-lock-2-line"></i>

                    <div class="login__box-input login__icon">
                        <input type="password" name="senha" required class="login__input" id="login-pass" placeholder=" ">
                        <label for="" class="login__label">Password</label>
                        <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                    </div>
                </div>
            </div>

            <input class="login__button" type="submit" name="submit" value="Login">
           
            <p class="login__register">
                <a class="back__Button" href="home.php">Back</a> Don't have an account? <a href="formulario.php">Register</a>
            </p>
        </form>
    </div>


<!----------------------------------- show hide password ---------------------------------------------------->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            showHiddenPass('login-pass', 'login-eye');
        });

        const showHiddenPass = (loginPass, loginEye) =>{
            const input = document.getElementById(loginPass),
                iconEye = document.getElementById(loginEye);

            iconEye.addEventListener('click', () =>{
                if(input.type === 'password'){
                    input.type = 'text';

                    iconEye.classList.add('ri-eye-line');
                    iconEye.classList.remove('ri-eye-off-line');
                } else{
                    input.type = 'password';

                    iconEye.classList.remove('ri-eye-line');
                    iconEye.classList.add('ri-eye-off-line');
                }
            });
        };
    </script>
</body>
</html>