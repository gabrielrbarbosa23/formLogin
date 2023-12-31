<?php

    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplication</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

        :root,
        input[type='text'] {
            font-size: 20px;
            font-family: "Poppins", sans-serif;
        }

        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: #333;
            background-image: url("img/background.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .exit{
            position: absolute;
            top: 10px;
            right: 10px;
            text-decoration: none;
            color: #fff;
            font-size: 16px;
        }

        #container {
            position: relative;
        }

        input[type='text'] {
            padding: 1em;
            border: none;
            border-radius: 0.2em;
            background-color: gray;
            transition: background 0.3s;
            outline: none;
        }

        .chat-bubble {
            text-align: center;
            width: 100%;
            max-width: 80vw;
            position: absolute;
            left: 50%;
            bottom: 100%;
            transform: translateX(-50%);
            margin-bottom: 7em;
            color: #fff;
        }

        #container {
            animation: float 3s infinite alternate;
        }

        @keyframes float {
            from {
                transform: translateY(0.5em);
            }

            to {
                transform: translateY(-0.5em);
            }
        }

        .ghost {
            background-color: #fff;
            color: #fff;
        }

        .ghost * {
            transition: all 0.3s;
        }

        .ghost>* {
            position: absolute;
            left: 50%;
            bottom: 100%;
            transform: translateX(-50%);
        }

        .ghost-welcome {
            position: absolute;
            bottom: 230px;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            z-index: 1;
        }

        .ghost-torso {
            width: 5em;
            height: 7em;
            background-color: inherit;
            border-radius: 100px;
            box-shadow: 0 0 12px #424242;
            transition: all 0.3 background 0.4s 0.1s;
            transform: translate(-50%, 50px);
            z-index: -1;
        }

        .ghost-face {
            margin-bottom: 1em;
            background: none;
        }

        .ghost-face .ghost-eyes-l,
        .ghost-face .ghost-eyes-r {
            width: 0.8em;
            height: 0.8em;
            background-color: #333;
            border-radius: 100%;
            position: absolute;
            bottom: 0.4em;
        }

        .ghost-face .ghost-eyes-l {
            right: 1em;
        }

        .ghost-face .ghost-eyes-r {
            left: 1em;
        }

        .ghost-face .ghost-mouth {
            width: 0.5em;
            height: 0.3em;
            border-radius: 50px;
            border: 0.2em solid #333;
            border-top: none;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .ghost-face .ghost-mouth-open {
            border-top: 0.2em solid #333;
            height: 0.2em;
        }

        .ghost-hands {
            color: inherit;
        }

        .ghost-hands .ghost-hands-l,
        .ghost-hands .ghost-hands-r {
            width: 1em;
            height: 1.5em;
            border-radius: 100px;
            background: #fff;
            box-shadow: 0px 4px 4px rgba(51, 51, 51, 0.3);
        }

        .ghost-hands .ghost-hands-r {
            transform: translate(1.5em, 1em) rotate(15deg);
        }

        .ghost-hands .ghost-hands-l {
            transform: translate(-1.5em, 2.5em) rotate(-15deg);
        }

        .ghost-legs {
            width: 5em;
            height: 1.5em;
            top: 100%;
            background-color: inherit;
            box-shadow: 0 0 12px #424242;
            border-bottom-left-radius: 0.4em;
            border-bottom-right-radius: 0.4em;
        }

        input[type='text']:focus {
            background: #fff;
        }

        input[type='text']::placeholder {
            color: rgba(0, 0, 0, 0.5);
        }

        input[type='text']:focus+.ghost {
            background: rgba(255, 255, 255, 0.2);
            color: transparent;
        }

        input[type='text']:focus+.ghost .ghost-torso {
            transform: translate(-50%, 42px) scaleY(0.9);
        }

        input[type='text']:focus+.ghost .ghost-eyes * {
            background: rgba(255, 255, 255, 0.6);
        }

        input[type='text']:focus+.ghost .ghost-face {
            transform: translate(-50%, 0.4em);
        }

        input[type='text']:focus+.ghost .ghost-mouth {
            transform: scaleY(0.6);
            border-color: rgba(255, 255, 255, 0.6);
        }

        input[type='text']:focus+.ghost .ghost-hands {
            transform: translate(-50%, 0.2em);
        }

        input[type='text']:focus+.ghost .ghost-hands * {
            background: transparent;
        }

        input[type='text']:focus+.ghost .ghost-legs {
            border-bottom-right-radius: 0.6em;
            border-bottom-left-radius: 2em;
            transform: translateX(-50%) scaleY(0.85);
            transform-origin: top;
        }
    </style>
</head>
<body>
    <a class="exit" href="sair.php">Exit</a>
    <div id="container">
        <div id="ghost-bubble" class="chat-bubble"></div>
        <input
            type="text"
            name=""
            placeholder="type a message..."
            id="ghost-input"
        />
        <div class="ghost">
            <div class="ghost-welcome">
                <?php
                    echo "<h1>Welcome $logado </h1>";
                ?>
            </div>
            
            <div class="ghost-face">
            <div class="ghost-eyes">
                <div class="ghost-eyes-l"></div>
                <div class="ghost-eyes-r"></div>
            </div>
            <div class="ghost-mouth"></div>
            </div>
            <div class="ghost-torso"></div>
            <div class="ghost-hands">
            <div class="ghost-hands-l"></div>
            <div class="ghost-hands-r"></div>
            </div>
            <div class="ghost-legs"></div>
        </div>
        </div>
    </body>
    <script src="./main.js"></script>
    <script>
        const input = document.getElementById("ghost-input");
        const bubble = document.getElementById("ghost-bubble");
        const mouth = document.querySelector(".ghost-mouth");

        input.onkeydown = (e) => {
        if (e.keyCode == 13) {
            bubble.innerText = e.target.value;
            e.target.value = "";
            let i = 0;
            if (mouthChatter) clearInterval(mouthChatter);
            const mouthChatter = setInterval(() => {
            mouth.classList.toggle("ghost-mouth-open");
            if (i === 6) clearInterval(mouthChatter);
            i++;
            }, 300);
        }
        };
    </script>
</body>
</html>