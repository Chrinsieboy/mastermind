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
    <script src="https://kit.fontawesome.com/f83e64cd36.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="page-container">
        <div class="header">
            <img src="../img/logo2.png" alt="logo" class="logo-failed">
        </div>
        <div class="complete center">
            <div class="complete-text">
                <h1>Je hebt het niet gehaald!</h1>
                <h2>Dit betekent dat je {{$trycount}} pogingen hebt gedaan om alsnog te verliezen.</h2>
                <?php
                echo "<a href='/spel/" . $levelTag . "'><button class='btn btn-primary'>Opnieuw spelen</button></a><br>"
                ?>
                <a href='/'><button class='btn btn-primary'>Ga terug naar het hoofdscherm</button></a>
            </div>
        </div>
        <footer class="footer">
            <p class="footer-right footer-text footer-bottom">
            &copy; 2021 - <?php echo date("Y"); ?> - BigBrainGame door Chris en Frank
            </p>
        </footer>
    </div>

</body>

</html>