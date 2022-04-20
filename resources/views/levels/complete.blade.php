<?php
$description = "Kan jij de goede code raden in 12 gokken? ";
?>

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
            <img src="../img/logo2.png" alt="logo" class="logo-completed">
        </div>

        <br>

        <div class="alert alert-primary center space-between-links" role="alert">
            <a class="no-underline" href="https://twitter.com/intent/tweet?text={{ $description }}&url={{ url()->current() }}" target="_blank">
                <i class="fab fa-twitter alert-link" alt="Twitter"></i>
            </a>

            <a class="no-underline" href="https://www.linkedin.com/sharing/share-offsite/?url={{ url()->current() }}" target="_blank">
                <i class="fab fa-linkedin-in alert-link" alt="Linkedin"></i>
            </a>

            <a class="no-underline" href="https://www.reddit.com/submit?url={{ url()->current() }}&title={{ $description }}" target="_blank">
                <i class="fab fa-reddit-alien alert-link" alt="Reddit"></i>
            </a>
        </div>
        <div class="complete center">
            <div class="complete-text">
                <h1>Je hebt level {{$levelTag}} gehaald!</h1>
                <h2>Dit heb je gedaan in {{$trycount}} poging(en)</h2>
                <?php
                if ($levelTag == 10) {
                    echo "<h2>Dat betekent dat je het spel klaar hebt!</h2><h2>Goed gespeelt en wie weet tot later!</h2>";
                }
                ?><br>
                <?php
                if ($levelTag == 10) {
                    echo "<a href='/'><button class='btn btn-primary'>Ga terug naar het hoofdscherm</button></a>";
                } else {
                    echo "<a href='/spel/" . $nextLevel . "'><button class='btn btn-primary'>Volgende level</button></a><br>";
                    echo "<a href='/'><button class='btn btn-primary'>Ga terug naar het hoofdscherm</button></a>";
                }
                ?>
            </div>
        </div>
        <br>
        <br>
        <br>
        <footer class="footer">
            <!-- <p class="footer-right footer-text footer-bottom"> -->
                &copy; 2021 - <?php echo date("Y"); ?> - BigBrainGame door Chris en Frank
            <!-- </p> -->
        </footer>
    </div>

</body>

</html>