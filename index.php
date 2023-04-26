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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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
                        <a class="menu__link menu__link--select" href="">
                            Inicio
                        </a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__link" href="servicios.php?usuario=<?php echo $usuario; ?>">
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
                        Bienvenido a Social Pop
                    </h2>
                </div>
            </section>
            <section class="group main__about__description section--hidden animate__animated animate__fadeInUp">
                <div class="container container--flex">
                    <div class="column column--50">
                        <img alt="" src="./assets/img/2.1.jpg"/>
                    </div>
                    <div class="column column--50">
                        <h3 class="column__title">
                            SOBRE NOSOTROS
                        </h3>
                        <p style="text-align: justify;" class="column__txt">
                            Somos una agencia digital, que nace por la necesidad de evolucionar la gestión de las plataformas digitales de las empresas. Potencializamos los recursos publicitarios del cliente, explotando sus medios digitales, puntos de contacto (RRSS, Apps, Mail, etc...) e inversión digital, enfocando sus esfuerzos solo en su grupo objetivo. Creemos en los sueños de nuestros clientes, ¡por eso hacemos las cosas con amor! 
                        </p>
                    </div>
                </div>
            </section>
            <section class="group today-special section--hidden animate__animated animate__fadeInUp">
                <h2 class="group__title">
                    Nuestros Servicios
                </h2>
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
                </div>                  
            </section>
            <section class="group today-special section--hidden animate__animated animate__fadeInUp">
                <h2 class="group__title">
                    CLIENTES
                </h2>
                <div class="container container--flex">
                <div style="border: none;" class="column column--50-25">
                    <img src="./assets/img/4.png" alt="" class="today-special__img" style="width: 100%; height: auto; filter: grayscale(100%); transition: filter 0.3s ease-in-out;" onmouseover="this.style.filter='grayscale(0%)';" onmouseout="this.style.filter='grayscale(100%)';">

                </div>
                <div style="position: relative; right: 0px; border: none;" class="column column--50-25">
                    <img src="./assets/img/5.png" alt="" class="today-special__img" style="width: 50%; height: auto; filter: grayscale(100%); transition: filter 0.3s ease-in-out;" onmouseover="this.style.filter='grayscale(0%)';" onmouseout="this.style.filter='grayscale(100%)';">

                </div>
                <div style="position: relative; right: 10px; border: none;" class="column column--50-25">
                    <img src="./assets/img/6.png" alt="" class="today-special__img" style="width: 80%; height: auto; filter: grayscale(100%); transition: filter 0.3s ease-in-out;" onmouseover="this.style.filter='grayscale(0%)';" onmouseout="this.style.filter='grayscale(100%)';">
                </div>
                <div style="position: relative; right: 10px; border: none;" class="column column--50-25">
                    <img src="./assets/img/7.png" alt="" class="today-special__img" style="width: 30%; height: auto; filter: grayscale(100%); transition: filter 0.3s ease-in-out;" onmouseover="this.style.filter='grayscale(0%)';" onmouseout="this.style.filter='grayscale(100%)';">
                </div>
                </div>
            </section>
            <section class="group today-special section--hidden animate__animated">
                <h2 class="group__title">
                    DATOS DE NUESTRAS AVENTURAS
                </h2>
                <div class="container container--flex">
                    <div style="border: none;" class="column column--50-25">
                            <div style="font-size: 20px" class="today-special__title">
                                10679
                            </div>
                            <div style="font-size: 12px" class="today-special__txt">
                            CAMPAÑAS DESARROLLADAS
                        </div>
                    </div>
                    <div style="border: none;" class="column column--50-25">
                            <div style="font-size: 20px" class="today-special__title">
                                198
                            </div>
                            <div style="font-size: 12px" class="today-special__txt">
                            PÁGINAS CREADAS
                        </div>
                    </div>
                    <div style="border: none;" class="column column--50-25">
                            <div style="font-size: 20px" class="today-special__title">
                                59806
                            </div>
                            <div style="font-size: 12px" class="today-special__txt">
                            SOCIAL PUBLICACIONES
                        </div>
                    </div>
                    <div style="border: none;" class="column column--50-25">
                            <div style="font-size: 20px" class="today-special__title">
                                16023
                            </div>
                            <div style="font-size: 12px" class="today-special__txt">
                            RESCATADA LOS CIUDADANOS
                        </div>
                    </div>
                    <div style="position: relative; left: 380px; border: none;" class="column column--50-25">
                            <div style="font-size: 20px" class="today-special__title">
                                257
                            </div>
                            <div style="font-size: 12px" class="today-special__txt">
                            SALVADO GALAXIAS
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
