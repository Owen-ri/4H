<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time(); ?>">
</head>

<body>

    <header class="header">
        <nav class="nav container">
            <div class="nav__data">
                <a href="#" class="nav__logo">
                    <i class=""></i> JOCAJI WEB
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__burger"></i>
                    <i class="ri-close-line nav__close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li><a href="#head" class="nav__link">Início</a></li>

                    <!--<li><a href="#" class="nav__link">ola</a></li>-->

                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link">
                            Aquí <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <ul class="dropdown__menu">

                            <li>
                                <a href="#head" class="dropdown__link">
                                    <i class="ri-file-list-line"></i>
                                    <div>Info</div>
                                </a>
                            </li>

                            <li>
                                <a href="#Carrusel" class="dropdown__link">
                                    <i class="ri-file-list-line"></i>
                                    <div>Carrusel</div>
                                </a>
                            </li>

                            <li>
                                <a href="#cards" class="dropdown__link">
                                    <i class="ri-file-list-line"></i>
                                    <div>Exposiciónes</div>
                                </a>
                            </li>

                            <li>
                                <a href="#foot" class="dropdown__link">
                                    <i class="ri-file-list-line"></i>
                                    <div>Contactános</div>
                                </a>
                            </li>


                            <!--=============== DROPDOWN SUBMENU ===============
                        <li class="dropdown__subitem">
                           <div class="dropdown__link">
                              <i class="ri-bar-chart-line"></i> n <i class="ri-add-line dropdown__add"></i>
                           </div>

                           <ul class="dropdown__submenu">
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-file-list-line"></i> n
                                 </a>
                              </li>
      
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-cash-line"></i> n
                                 </a>
                              </li>
      
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-refund-2-line"></i> n
                                 </a>
                              </li>
                           </ul>
                           -->
                    </li>
                </ul>
                </li>


                <!--<li><a href="#" class="nav__link">oka</a></li>-->

                <!--=============== DROPDOWN 2 ===============-->
                <li class="dropdown__item">
                    <div class="nav__link">
                        Cuenta<i class="ri-arrow-down-s-line dropdown__arrow"></i>
                    </div>

                    <ul class="dropdown__menu">
                        <li>
                            <a href="login.php" class="dropdown__link">
                                <i class="ri-user-line"></i> Usuario
                            </a>
                        </li>

                        <li>
                            <a href="login.php" class="dropdown__link">
                                <i class="ri-lock-line"></i> Cerrar Sesión
                            </a>
                        </li>

                    </ul>
                </li>

                <li><a href="#foot" class="nav__link">Contactános</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="inicio" id="head">
        <div class="intro">
            <h1>JOCAJI WEB </h1>
            <h2><br>Encuentra las presentaciónes de los alúmnos del 4H de programación acerca de <span
                    style="color: purple;">herramientas del lado del servidor</span> que te pueden servir para tu sitio
                web.</h2>
            <p class="pp"> <br>Encuentra la información sobre la herramienta que gustes, mira y descarga la presentación
                totalmente gratis! <br></p>
        </div>
        <div class="imgi"></div>
    </div>
    <div style="padding: 20px;"></div>
    <!-- CARRUSEL INFINITO (FALTA) -->
    <div class="slider" id="Carrusel">
        <div class="move">

            <div class="box">
                <img src="assets/img/Apache.png" alt="">
            </div>
            <div class="box">
                <img src="assets/img/gitth.png" alt="">
            </div>
            <div class="box">
                <img src="assets/img/Kubernetes.png" alt="">
            </div>

            <div class="box">
                <img src="assets/img/Bitbucket.png" alt="">
            </div>

            <div class="box">
                <img src="assets/img/Docker-.png" alt="">
            </div>
            <div class="box">
                <!--Slide-->
                <img src="assets/img/Nginx.png" alt="">
            </div>
            <div class="box">
                <img src="assets/img/dtadog.png" alt="">
            </div>


            <!-- 2da vuelta -->

            <div class="box">
                <img src="assets/img/Apache.png" alt="">
            </div>

            <div class="box">
                <img src="assets/img/gitth.png" alt="">
            </div>
            <div class="box">
                <img src="assets/img/Kubernetes.png" alt="">
            </div>
            <div class="box">
                <img src="assets/img/Bitbucket.png" alt="">
            </div>
            <div class="box">
                <img src="assets/img/Docker-.png" alt="">
            </div>
            <div class="box">
                <!--Slide-->
                <img src="assets/img/Nginx.png" alt="">
            </div>
            <div class="box">
                <img src="assets/img/dtadog.png" alt="">
            </div>



        </div>
    </div>

    <div class="container2">
        <div class="overlay" id="contenido">
            <embed src="../4h/assets/pdf/Back4app.pdf" type="application/pdf" class="pdf-container">
            <button id="hideButton" style="display: none;">Ocultar contenido</button>
        </div>
        <div class="card">
            <a id="showButton">
                <h3>Back4app</h3>
                <p>Anel Gutiérrez</p>
                <img src="assets/img/back4app.png" />
            </a>
        </div>

        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div> 
            <a id="showButton">
                <img src="assets/img/Heroku Wordmark New.png" />
                <h3>Heroku</h3>
                <p>Villafañez Luna</p>
            </a>
        </div>

        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/firebase.png" />
                <h3>Firebase</h3>
                <p>Yoselin Hernandez</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/Kubernetes.png" />
                <h3>Kubernetes</h3>
                <p>Abril Lopez</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/Docker-.png" />
                <h3>Docker</h3>
                <p>alumno</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/Nginx.png" />
                <h3>NGINX</h3>
                <p>Jazmin Martinez</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/PivotalTracker.png" />
                <h3>Pivotal Tracker</h3>
                <p>Gamaliel Ramírez</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf/Presentación1 jira.pptx" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/Jira Software.png" />
                <h3>Jira</h3>
                <p>Omar Santillan</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/Slack-Logo.png" />
                <h3>Slack</h3>
                <p>Owen Reyna</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/Google-PageSpeed.png" />
                <h3>Google Pagespeed Insights</h3>
                <p>Enrique González</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/GitLab New 2022.png" />
                <h3>GitLab</h3>
                <p>Ebbin Ruiz</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/gitth.png" />
                <h3>GitHub</h3>
                <p>David Antonio</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf/Apache_IsaiRamírezPalma.pptx" type="application/pdf"
                    class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/Apache.png" />
                <h3>Apache</h3>
                <p>Isai Ramírez</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/Bitbucket.png" />
                <h3>Bitbucket</h3>
                <p>Jonathan Antonio</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/New Relic New 2022.png" />
                <h3>New Relic</h3>
                <p>nose</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/dtadog.png" />
                <h3>Datadog</h3>
                <p>Ian Vigueraz</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/gitkraken-logo.png" />
                <h3>GitKraken</h3>
                <p>Kevin Roldan</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/Stack Overflow Rainbow.png" />
                <h3>Stack Overflow</h3>
                <p>Oscar Acosta</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/postman.png" />
                <h3>Postman API</h3>
                <p>Elvis Toledo</p>
            </a>
        </div>
        <div class="card">
            <div class="overlay" id="contenido">
                <embed src="../4h/assets/pdf" type="application/pdf" class="pdf-container">
                <button id="hideButton" style="display: none;">Ocultar contenido</button>
            </div>
            <a id="showButton">
                <img src="assets/img/Microsoft Visual Studio.png" />
                <h3>Visual Studio</h3>
                <p>Salibeth Zenil</p>
            </a>
        </div>
        <script src="../4h/assets/js/ocultar.js"></script>
    </div>

    <footer class="footer" id="foot">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>JOCAJI WEB</h4>
                    <ul>
                        <p style="color: #bbbbbb; margin: 0; ">Aquí encontraras una recopilación de presentaciónes
                            hechas por alúmnos del 4H de programación sobre "Herramientas del lado del servidor" y
                            podras decargarlas.</p>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>En esta pagína</h4>
                    <ul>
                        <li><a href="#head">Início</a></li>
                        <li><a href="#foot">Contactános</a></li>
                        <li><a href="#Carrusel">Carrusel</a></li>
                        <li><a href="#cards">Exposiciónes</a></li>
                        <li><a href="#">Cerrar Sesión</a></li>

                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Redes Sociales</h4>

                    <ul>
                        <li><a href="https://www.instagram.com/enriquexz_/"><i class="fab fa-instagram"></i><span>
                                    Enrique González Ramírez</span></a></li>
                        <li><a href="https://www.instagram.com/owen.rii/"><i class="fab fa-instagram"></i><span> Edxon
                                    Owen Reyna Islas</span></a></li>

                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Ubicación</h4>
                    <ul>
                        <li>
                            <a style="color: #bbbbbb; margin: 0; "
                                href="https://www.google.com/maps/place/Centro+de+Estudios+Tecnol%C3%B3gicos+industrial+y+de+servicios+No.+26/@20.0569803,-99.2232371,3a,75y,158.83h,90t/data=!3m7!1e1!3m5!1sETN31m0XEL4W-_LdEBTsVg!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DETN31m0XEL4W-_LdEBTsVg%26cb_client%3Dsearch.gws-prod.gps%26w%3D211%26h%3D120%26yaw%3D158.82721%26pitch%3D0%26thumbfov%3D100!7i16384!8i8192!4m19!1m12!4m11!1m3!2m2!1d-99.2204787!2d20.0564491!1m6!1m2!1s0x85d22aef76e508ad:0x5ff524caa028ccab!2sAvenida,+Calle+Ignacio+Zaragoza+SN,+Centro,+42970+Atitalaquia,+Hgo.!2m2!1d-99.2231808!2d20.0568043!3m5!1s0x85d22aef76e508ad:0x5ff524caa028ccab!8m2!3d20.056808!4d-99.2231809!16s%2Fg%2F1w97vr5v?coh=205409&entry=ttu">Atitalaquia,
                                Hidalgo<br />
                                CETis No.26 "Fray Diego de Rodríguez"</a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </footer>

    <script src="assets/js/main.js"></script>
</body>

</html>