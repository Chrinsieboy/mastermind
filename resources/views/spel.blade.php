<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BigBrainGame</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/app.js"></script>
    <link rel="icon" href="/img/brain.ico">
</head>

<body>
    <div class="page-container">

        <div class="logocontainer">
            <img src="/img/logo2.png" alt="" class="logo-levelscreen">
        </div>

        <div class="alert alert-primary center" role="alert">
        Speluitleg wordt aangeraden voor het spelen van het spel
        </div>

        <div class="level-container">
            <div class="levels">
                <button class="btn-primary btn-levels" onclick="window.location.href='/spel/1'">
                    <h2>Level 1</h2>
                </button>
                <button class="btn-primary btn-levels" onclick="window.location.href='/spel/2'">
                    <h2>Level 2</h2>
                </button>
                <button class="btn-primary btn-levels" onclick="window.location.href='/spel/3'">
                    <h2>Level 3</h2>
                </button>
                <button class="btn-primary btn-levels" onclick="window.location.href='/spel/4'">
                    <h2>Level 4</h2>
                </button>
                <button class="btn-primary btn-levels" onclick="window.location.href='/spel/5'">
                    <h2>Level 5</h2>
                </button>
                <button class="btn-primary btn-levels" onclick="window.location.href='/spel/6'">
                    <h2>Level 6</h2>
                </button>
                <button class="btn-primary btn-levels" onclick="window.location.href='/spel/7'">
                    <h2>Level 7</h2>
                </button>
                <button class="btn-primary btn-levels" onclick="window.location.href='/spel/8'">
                    <h2>Level 8</h2>
                </button>
                <button class="btn-primary btn-levels" onclick="window.location.href='/spel/9'">
                    <h2>Level 9</h2>
                </button>
                <!-- level 10 for desktop -->
                <button class="btn-primary btn-levels hide-mobile" onclick="window.location.href='/spel/10'">
                    <h2>Level 10</h2>
                </button>
                <button class="btn-primary btn-levels btn-info" onclick="window.location.href='/'">
                    <h2>Terug</h2>
                </button>
                <!-- Level 10 for mobile -->
                <button class="btn-primary btn-levels hide-desktop" onclick="window.location.href='/spel/10'">
                    <h2>Level 10</h2>
                </button>
                <button class="btn-primary btn-levels btn-info" onclick="window.open('//mart-van-der-molen.newdeveloper.nl/')">
                    <h2>Support</h2>
                </button>
            </div>
            <br>
        </div>

        <footer class="footer">
            <p class="footer-right footer-text footer-bottom">
                &copy; 2021 - <?php echo date("Y"); ?> - BigBrainGame door Chris en Frank
            </p>
        </footer>
    </div>
</body>

</html>