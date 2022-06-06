<?php session_start();
require_once("../../VerificaIdentita/auth.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>come_funziona_amministratore</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body class="text-center" style="margin-top: 0px;margin-bottom: -28px;font-family: 'Roboto' !important;">
    <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="padding-bottom: 30px;font-size: 20px;">
        <div class="container">
            <a class="navbar-brand" href="../index/index.php" style="font-size: 35px;filter: blur(0px);font-style: italic;">Cicerone</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
                <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse border-secondary d-xl-flex" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item text-left" role="presentation">
                        <a class="nav-link text-center" href="../index/index.php" style="margin-right: 11px;">Home<i class="fa fa-home" style="padding-left: 10px;"></i></a>
                    </li>
                    <li class="nav-item text-left" role="presentation">
                        <a class="nav-link text-center" href="http://localhost/phpmyadmin/" style="margin-right: 11px;">Vai al database<i class="fa fa-database" style="padding-left: 10px;"></i></a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-center" href="../log_out/logout.php" style="margin-right: 11px;">Log
                            Out<i class="fa fa-window-close-o" style="padding-left: 10px;"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col">
            <h1 class="text-center" style="background-color: #5dd167;color: rgb(255,255,255);font-size: 30px;font-weight: bold;">Amministratore:
                come funziona</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1 style="margin-right: -8px;font-size: 36px;margin-left: 10px;"><i class="fa fa-circle-thin" style="font-size: 40px;margin-right: 0px;padding-right: 0px;"></i>&nbsp;Visualizza Attività</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1 style="font-size: 26px;font-weight: normal;margin-left: 10px;">Andando nella sezione "Accesso attività" potrai visualizzare tutte le attività create dai Ciceroni.<br><br></h1>
        </div>
    </div>
    <h1 style="margin-right: -8px;font-size: 36px;margin-left: 10px;"><i class="fa fa-circle-thin" style="font-size: 40px;margin-right: 0px;padding-right: 0px;"></i>&nbsp;Chiusura Attività
    </h1>
    <h1 style="font-size: 26px;font-weight: normal;margin-left: 10px;">Nella nomina di amministratore avrai l'opportunità di chiudere le attività dei Ciceroni in caso non siano conformi.<br><br></h1>
    <h1 style="margin-right: -8px;font-size: 36px;margin-left: 10px;"><i class="fa fa-circle-thin" style="font-size: 40px;margin-right: 0px;padding-right: 0px;"></i>&nbsp;Visualizza Feedback</h1>
    <h1 style="font-size: 26px;font-weight: normal;margin-left: 10px;">Andando nella sezione "Accesso feedback" potrai visualizzare tutti i feedback inviati dai Globetrotter sulla piattaforma.<br><br></h1>
    <h1 style="margin-right: -8px;font-size: 36px;margin-left: 10px;"><i class="fa fa-circle-thin" style="font-size: 40px;margin-right: 0px;padding-right: 0px;"></i>&nbsp;Chiusura attività</h1>
    <h1 style="font-size: 26px;font-weight: normal;margin-left: 10px;">Nella nomina di amministratore avrai l'opportunità di eliminare i feedback dei Globetrotter in caso non siano conformi.<br><br></h1>

    <div class="footer-clean" style="background-color: rgba(146,144,144,0.37);">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 text-center item">
                        <ul></ul><a href="../come_funziona/comefunziona.php" style="color: rgb(255,255,255);font-size: 22px;font-weight: bold;">Come
                            funziona</a>
                    </div>
                    <div class="col-sm-4 col-md-3 text-center item">
                        <ul></ul><a href="../chi_siamo/chisiamo.php" style="color: rgb(255,255,255);font-size: 22px;font-weight: bold;">Chi
                            siamo</a>
                    </div>
                    <div class="col-sm-4 col-md-3 text-center item">
                        <ul></ul><a href="../termini_policy/terminipolicy.php" style="color: rgb(255,255,255);font-size: 22px;font-weight: bold;">Termini
                            e condizioni</a>
                    </div>
                    <div class="col-lg-3 item social">
                        <h3 class="text-center" style="font-size: 22px;color: rgb(255,255,255);font-weight: bold;margin-top: 4px;">Lingua
                        </h3>
                        <div id="google_translate_element"></div>

                        <script type="text/javascript">
                            function googleTranslateElementInit() {
                                new google.translate.TranslateElement({
                                    pageLanguage: 'en'
                                }, 'google_translate_element');
                            }
                        </script>

                        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                        <p class="copyright">Cicerone © 2019</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>