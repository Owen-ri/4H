<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="assets/css/login.css?v=<?php echo time(); ?>">
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
                  <li><a href="#" class="nav__link"></a></li>


                  <li><a href="#foot" class="nav__link">Contactános</a></li>
               </ul>
            </div>
         </nav>
      </header>
      <div style="padding: 2.5rem;"  id="head"></div>
    
      <div class="login">
            <div class="login__content">
                <div class="login__img">
                    <img src="assets/img/9931900.svg" alt="">
                </div>

                <div class="login__forms">
                    <form action="" class="login__registre" id="login-in">
                        <h1 class="login__title">Inicia Sesión</h1>
    
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="text" placeholder="Usuario" class="login__input">
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Contraseña" class="login__input">
                        </div>


                        <a href="#" class="login__button">Ingresar</a>

                        <div>
                            <span class="login__account">No tienes una cuenta?</span>
                            <span class="login__signin" id="sign-up">Crea una!</span>
                        </div>
                    </form>

                    <form action="" class="login__create none" id="login-up">
                        <h1 class="login__title">Crear Cuenta</h1>
    
                        <div class="login__box">
                            <i class='bx bx-user login__icon'></i>
                            <input type="text" placeholder="Usuario" class="login__input">
                        </div>
    
                        <div class="login__box">
                            <i class='bx bx-at login__icon'></i>
                            <input type="text" placeholder="Correo" class="login__input">
                        </div>

                        <div class="login__box">
                            <i class='bx bx-lock-alt login__icon'></i>
                            <input type="password" placeholder="Contraseña" class="login__input">
                        </div>

                        <a href="#" class="login__button">Crear</a>

                        <div>
                            <span class="login__account">Ya tienes una cuenta?</span>
                            <span class="login__signup" id="sign-in">Inicia Sesión!</span>
                        </div>

                        
                    </form>
                </div>
            </div>
        </div>
        <div style="padding: 2.5rem;"></div>
        <footer class="footer" id="foot">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>JOCAJI WEB</h4>
  	 			<ul>
               <p style="color: #bbbbbb; margin: 0; ">Aquí encontraras una recopilación de presentaciónes hechas por alúmnos del 4H de programación sobre "Herramientas del lado del servidor" y podras decargarlas.</p>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>En esta pagína</h4>
  	 			<ul>
  	 				<li><a href="#head">Início</a></li>
  	 				<li><a href="#foot">Contactános</a></li>

  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
               <h4>Redes Sociales</h4>
               
  	 			<ul>
                    <li><a href="https://www.instagram.com/enriquexz_/"><i class="fab fa-instagram"></i><span> Enrique González Ramírez</span></a></li>
                    <li><a href="https://www.instagram.com/owen.rii/"><i class="fab fa-instagram"></i><span> Edxon Owen Reyna Islas</span></a></li>
               
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Ubicación</h4>
  	 			<ul>
                        <li>
                        <a style="color: #bbbbbb; margin: 0; " href="https://www.google.com/maps/place/Centro+de+Estudios+Tecnol%C3%B3gicos+industrial+y+de+servicios+No.+26/@20.0569803,-99.2232371,3a,75y,158.83h,90t/data=!3m7!1e1!3m5!1sETN31m0XEL4W-_LdEBTsVg!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fpanoid%3DETN31m0XEL4W-_LdEBTsVg%26cb_client%3Dsearch.gws-prod.gps%26w%3D211%26h%3D120%26yaw%3D158.82721%26pitch%3D0%26thumbfov%3D100!7i16384!8i8192!4m19!1m12!4m11!1m3!2m2!1d-99.2204787!2d20.0564491!1m6!1m2!1s0x85d22aef76e508ad:0x5ff524caa028ccab!2sAvenida,+Calle+Ignacio+Zaragoza+SN,+Centro,+42970+Atitalaquia,+Hgo.!2m2!1d-99.2231808!2d20.0568043!3m5!1s0x85d22aef76e508ad:0x5ff524caa028ccab!8m2!3d20.056808!4d-99.2231809!16s%2Fg%2F1w97vr5v?coh=205409&entry=ttu">Atitalaquia, Hidalgo<br/>
                        CETis No.26 "Fray Diego de Rodríguez"</a>
                        </li>
                        </ul>      
                    
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
        <script src="assets/js/login.js"></script>
</body>
</html>