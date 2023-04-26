<?php
session_start();
$usuario = $_GET['usuario'];
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
            <link href="./assets/img/1.png" rel="shortcut icon" type="imagen/x-icon">
                <title>
                    Social Pop | Agencia Digital | Social Media
                </title>
                <meta content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0" name="viewport">
                    <link href="./assets/CSS/estilo.css" rel="stylesheet">
                        <link href="./assets/CSS/icon.css" rel="stylesheet">
                        </link>
                    </link>
                </meta>
            </link>
        </meta>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="./assets/js/script.js"></script>
    </head>
    <body>
        <header class="main-header">
            <div class="container container--flex">
                <div class="logo-container column column--50">
                    <h1 class="logo" style="display: flex; align-items: center;">
                    <img src="./assets/img/1.png" alt="Social Pop logo" style="width: 20%; height: auto; margin-left: 10px;">
                    Social Pop
                </h1>
                </div>
            </div>
        </header>
        <nav class="main-nav">
            <div class="container container--flex">
                <span class="icon-bars" id="btnmenu">
                </span>
                <ul class="menu" id="menu">
                    <li class="menu__item">
                        <a class="menu__link " href="index.php?usuario=<?php echo $usuario; ?>">
                            Inicio
                        </a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link menu__link--select" href="">
                            Nuestros Servicios
                        </a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link"onclick="location.href='./api/user/cerrar.php?metodo=get;'">Cerrar sesión</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
        <section class="banner">
            <img alt="" class="banner__img" src="./assets/img/2.jpg">
                <div class="banner__content">
                    You Dream, We Make
                </div>
            </img>
        </section>
        <main class="main">
            <section class="group group--color section--hidden animate__animated animate__fadeInUp">
                <div class="container">
                    <h2 class="main__title">
                        Nuestros Servicios
                    </h2>
                </div>
            </section>
        
            <section class="group today-special section--hidden animate__animated animate__fadeInUp">
                <div class="container container--flex">
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        DIGITAL ADVICE
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 14px" class="today-special__title">
                        SOCIAL NETWORK STRATEGY
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        VIRTUAL REALITY
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        PRESENCE ON THE WEB
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        CONTENT AND MULTIMEDIA DEVELOPMENT
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        MONITORING AND ANALYSIS
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        CLEANING AND DATA MINING
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        ANALYSIS OF DATA
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        DIGITAL MARKETING
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        IMAGE MANAGEMENT IN DIGITAL MEDIA
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        SOCIAL MEDIA
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        COMMUNICATION STRATEGY
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        WEB DESIGN
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        DESIGN OF MOBILE APPS
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        CREATIVE STRATEGY
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        EMAIL MARKETING
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        PUBLIC RELATIONS
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        DATABASE
                    </div>
                    </div>
                    <div style="border: none" class="column column--50-25">
                     <div style="font-size: 15px" class="today-special__title">
                        AUDIOVISUAL PRODUCTION
                    </div>
                    </div> 
                </div>
            </section>
            <div class="container-redes">
                <a href="https://api.whatsapp.com/send?phone=+57 30464050098&text=Estoy interesad@ en Social Pop" target="_blank">
                    <img src="./assets/fonts/icon-verde.png" title="Enviar mensaje por WhatsApp">
                    </img>
                </a>
                <a href="http://m.me/socialpopagency" target="_blank">
                    <img src="./assets/fonts/icon-messenger.png" title="Enviar mensaje por Messenger">
                    </img>
                </a>
            </div>
        </main>
        <footer class="main-footer">
            <div class="container container--flex">
                <div class="column column--33">
                    <h2 class="column__title">
                        ¿Porque Visitarnos?
                    </h2>
                    <p class="column__txt">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
             tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="column column--33">
                    <h2 class="column__title">
                        Contáctanos
                    </h2>
                    <p class="column__txt">
                        <span class="icon-whatsapp">
                            601222117041
                        </span>
                    </p>
                    <p class="column__txt">
                        <span class="icon-envelope-o" style="font-size: 10px">
                        socialpopo@gmail.com
                        </span>
                    </p>
                    <p class="column__txt">
                        <span class="icon-facebook">
                            Social Pop
                        </span>
                    </p>
                </div>
                <div class="column column--33">
                    <h2 class="column__title">
                        Direccion
                    </h2>
                    <p class="column__txt">
                        <span class="icon-map-marker">
                            Colombia, Bogota Calle 93 # 15-27 - Edificio Avante 93 Piso 7
                        </span>
                    </p>
                   
                </div>
                <p class="copy">
                    © 2016 Social Pop | Agencia Digital | Social Media
                </p>
            </div>
        </footer>
        <script src="./assets/js/menu.js"></script>
    </body>
</html>
