<!DOCTYPE html>
<html lang="en-FR">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/zabuto_calendar.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">

    <link rel="stylesheet" href="assets/css/trackpad-scroll-emulator.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery.nouislider.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(function(){
            setInterval(function(){
                $(".slideshow ul").animate({marginLeft:-350},800,function(){
                    $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
                })
            }, 3500);
        });
    </script>

    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>" />
    <meta name="keywords" content="<?php echo $pageKeywords; ?>" />

</head>

<body class="nav-btn-only homepage">
<div class="page-wrapper">
    <header id="page-header">
        <nav>
            <div class="left">
                <a href="/index.php" class="brand"><img class="imgTaille" src="assets/img/logo.png" alt=""></a>
            </div>
            <!--end left-->
            <div class="right">
                <div class="primary-nav has-mega-menu">
                    <ul class="navigation">
                        <li class="has-child"><a href="/index.php">Offres</a>
                            <div class="wrapper">
                                <div id="nav-homepages" class="nav-wrapper">
                                    <ul>
                                        <li class="active has-child"><a href="/index.php">Nos offres</a>
                                            <div id="nav-grid-listing" class="nav-wrapper">
                                                <ul>
                                                    <li><a href="/index.php?page=accueil&liste=bureau">Bureau</a></li>
                                                    <li><a href="/index.php?page=accueil&liste=commerce">Commerce</a></li>
                                                    <li><a href="/index.php?page=accueil&liste=entrepot">Entrepôt</a></li>
                                                    <li><a href="/index.php?page=accueil&liste=industrie">Industrie</a></li>
                                                    <li><a href="/index.php?page=accueil&liste=coworking">Coworking</a></li>
                                                    <li><a href="/index.php?page=accueil&liste=laboratoire">Laboratoire</a></li>
                                                    <li><a href="/index.php?page=accueil&liste=seminaire">Salle de séminaire</a></li>
                                                    <li><a href="/index.php?page=accueil&liste=congres">Espace congrés</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="/index.php?page=map">Afficher la carte</a></li>
                                        <li><a href="/index.php?page=recherche">Soumettre une recherche</a></li>
                                        <li><a href="/index.php?page=propose">Proposer un bien</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="has-child"><a href="/index.php?page=pro">Professionnels</a>
                            <div class="wrapper">
                                <div id="nav-professionnels" class="nav-wrapper">
                                    <ul>
                                        <li><a href="/index.php?page=pro">Liste des partenaires</a></li>
                                        <li><a href="/index.php?page=inscription#adherent">Devenir adhérent</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li><a href="/index.php?page=contact">Contact</a></li>
                    </ul>
                    <!--end navigation-->
                </div>
                <!--end primary-nav-->
                <div class="secondary-nav">
                    <a href="#" data-modal-external-file="/modal_sign_in.php" data-target="modal-sign-in">Connexion</a>
                    <a class="promoted" href="/index.php?page=inscription">Inscription</a>
                    <!--<a href="#" class="promoted" data-modal-external-file="/modal_register.php" data-target="modal-register">Inscription</a>-->
                </div>
                <!--end secondary-nav-->

            </div>
            <!--end nav-btn-->


            <!--end right-->
        </nav>
        <!--end nav-->
    </header>
    <!--end page-header-->