<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 4 | BigBrainGame</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/app.js"></script>
    <link rel="icon" href="/img/brain.ico">
    <script src="https://kit.fontawesome.com/f83e64cd36.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="page-container">
        <div class="header">
            <img src="../img/logo2.png" alt="logo" class="logo-levelscreen">
            <a href="/spel"><i class="fas fa-times fa-2x margin-bottom-10px tourne cross" aria-hidden="true"></i></a>
        </div>
        <div class="resultnumber">
            <div class="centered">
                <h1>Level 4</h1>
                <h2>@isset($anwser) Laatst gegokte antwoord: {{$anwser}} @endisset</h2>
                <h2>Hoeveelheid gegokte antwoorden: {{$triescount}}</h2>
                <form method="post">
                    @csrf
                    <input class="form-input" type="text" name="input" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="5" required pattern=".{5,5}" title="Graag 5 cijfers invoeren."><br><br>
                    <input class="btn-primary" type="submit" value="Submit">
                </form>
                <div class="guess">
                    @if($full4)
                    <div class="red-box"></div>
                    @endif
                    @if($half4)
                    <div class="white-box"></div>
                    @endif
                    @if($none4)
                    <div class="black-box"></div>
                    @endif
                    @if($full2)
                    <div class="red-box"></div>
                    @endif
                    @if($half2)
                    <div class="white-box"></div>
                    @endif
                    @if($none2)
                    <div class="black-box"></div>
                    @endif
                    @if($full1)
                    <div class="red-box"></div>
                    @endif
                    @if($half1)
                    <div class="white-box"></div>
                    @endif
                    @if($none1)
                    <div class="black-box"></div>
                    @endif
                    @if($full3)
                    <div class="red-box"></div>
                    @endif
                    @if($half3)
                    <div class="white-box"></div>
                    @endif
                    @if($none3)
                    <div class="black-box"></div>
                    @endif
                    @if($full5)
                    <div class="red-box"></div>
                    @endif
                    @if($half5)
                    <div class="white-box"></div>
                    @endif
                    @if($none5)
                    <div class="black-box"></div>
                    @endif
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
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