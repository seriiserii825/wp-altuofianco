<?php
	$webinar = array('Sicurezza dei dati', 'Gestione del tempo e Outsourcing', 'Smartworking: soluzioni e strumenti', 'Efficientamento energetico nelle imprese', 'Telefonia per il business');
	$hide = array();
	foreach ($webinar as $key => $value) {

		$n = 0;
		$hide[$key] = "";
		$filez = "/home/u103857406/domains/altuofianco.it/public_html/webinar/logs/Webinar-" . $value . '-' . $n . ".csv";


		$filez1 = "/home/u103857406/domains/altuofianco.it/public_html/webinar/logs/Webinar-" . $value . "-1.csv";


		if ((file_exists($filez)) && (file_exists($filez1))) {

			$no_of_lines = count(file($filez)) - 1;
			$no_of_lines1 = count(file($filez1)) - 1;


			if (($no_of_lines > 10) && ($no_of_lines1 > 10)) {
				$hide[$key] = "hidden";
				echo "There are $no_of_lines records in $filez" . "\n";
			}

		}

	}


?>

<!DOCTYPE html>
<html xmlns="">

<head>
    <title>Altuofianco - Webinar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <meta name="description"
          content="Altuofianco, nell'ambito delle iniziative #iorestoacasa organizza webinar formativi gratuiti"/>
    <link rel="canonical" href="https://altuofianco.it/webinar/"/>
    <meta property="og:locale" content="it_IT"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Altuofianco | #iorestoacasa e mi formo"/>
    <meta property="og:description"
          content="Altuofianco, nell'ambito delle iniziative #iorestoacasa organizza webinar formativi gratuiti"/>
    <meta property="og:url" content="https://altuofianco.it/webinar/"/>
    <meta property="og:site_name" content="Altuofianco"/>
    <meta property="og:image" content="https://altuofianco.it/webinar/images/atf-webinar.jpg"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description"
          content="Altuofianco, nell'ambito delle iniziative #iorestoacasa organizza webinar formativi gratuiti"/>
    <meta name="twitter:title" content="Altuofianco | #iorestoacasa e mi formo"/>


    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">

    <!--    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="libs/form-styler/jquery.formstyler.css">-->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .post-thumbnail img[src$='.svg'] {
            width: 100%;
            height: auto;
        }
    </style>
    <link rel="icon" href="https://www.altuofianco.it/wp-content/uploads/2019/02/cropped-favicon-32x32.png"
          sizes="32x32"/>
    <link rel="icon" href="https://www.altuofianco.it/wp-content/uploads/2019/02/cropped-favicon-192x192.png"
          sizes="192x192"/>
    <link rel="apple-touch-icon-precomposed"
          href="https://www.altuofianco.it/wp-content/uploads/2019/02/cropped-favicon-180x180.png"/>
    <meta name="msapplication-TileImage"
          content="https://www.altuofianco.it/wp-content/uploads/2019/02/cropped-favicon-270x270.png"/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126540630-1"></script>
    <script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}

		gtag('js', new Date());

		gtag('config', 'UA-62607754-1', {'anonymize_ip': true});
    </script>

</head>


<body>

<header>
    <nav id='cssmenu'>
        <div class="logo">
            <div class="header__logo">
                <a href="https://www.altuofianco.it/">
                    <img src="images/logo.png" class="waboot-desktop-logo">
                    <!--<img src="https://www.altuofianco.it/wp-content/uploads/2019/02/logo.png" class="waboot-mobile-logo">   -->
                </a>
            </div>
        </div>
        <div id="head-mobile"></div>
        <div class="button" id="js-button"></div>

        <ul class="navigation" id="js-navigation">
            <li>
                <a href='https://www.altuofianco.it/'>Home</a>
            </li>
            <li>
                <a href='https://www.altuofianco.it/chi-siamo'>Chi siamo</a>
            </li>
            <li class="has-children">
                <a href="https://www.altuofianco.it/soluzioni/">Soluzioni</a>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18pt" height="18pt" viewBox="0 0 18 18" version="1.1">
                    <g id="surface1">
                        <path style="fill-rule:nonzero;fill-opacity:1;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke:rgb(100%,100%,100%);stroke-opacity:1;stroke-miterlimit:4;" d="M 268.666635 255.971841 L 404.825695 127.44661 C 418.905649 113.415274 426.641663 94.620253 426.708312 74.620055 C 426.616919 33.509045 393.209072 0.0276752 351.986705 0.00820431 C 332.097865 0.0524187 313.448288 7.760564 299.368335 21.791899 L 107.215631 203.219517 C 96.794184 213.576043 89.823101 226.591573 86.85522 241.042651 C 85.866337 246.044861 85.321899 251.046084 85.333014 256.046072 C 85.343882 260.934949 85.799688 266.045059 86.810801 271.042824 C 89.731547 285.369699 96.760676 298.465217 107.450782 308.997033 L 299.187254 490.126792 C 313.3297 504.206499 332.013858 512.053871 352.013809 512.009409 C 393.125066 512.029127 426.7173 478.509922 426.62566 437.287802 C 426.692556 417.398715 418.873053 398.638274 404.619002 384.336593 Z M 268.666635 255.971841 " transform="matrix(0.0000781549,-0.0351562,0.0351562,0.0000781549,-0.0199854,17.97997)"/>
                    </g>
                </svg>
                <ul class="sub-menu">
                    <li class="has-children">
                        <a href='https://www.altuofianco.it/soluzioni/strategia/'>Strategia</a>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18pt" height="18pt" viewBox="0 0 18 18" version="1.1">
                            <g id="surface1">
                                <path style="fill-rule:nonzero;fill-opacity:1;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke:rgb(100%,100%,100%);stroke-opacity:1;stroke-miterlimit:4;" d="M 268.666635 255.971841 L 404.825695 127.44661 C 418.905649 113.415274 426.641663 94.620253 426.708312 74.620055 C 426.616919 33.509045 393.209072 0.0276752 351.986705 0.00820431 C 332.097865 0.0524187 313.448288 7.760564 299.368335 21.791899 L 107.215631 203.219517 C 96.794184 213.576043 89.823101 226.591573 86.85522 241.042651 C 85.866337 246.044861 85.321899 251.046084 85.333014 256.046072 C 85.343882 260.934949 85.799688 266.045059 86.810801 271.042824 C 89.731547 285.369699 96.760676 298.465217 107.450782 308.997033 L 299.187254 490.126792 C 313.3297 504.206499 332.013858 512.053871 352.013809 512.009409 C 393.125066 512.029127 426.7173 478.509922 426.62566 437.287802 C 426.692556 417.398715 418.873053 398.638274 404.619002 384.336593 Z M 268.666635 255.971841 " transform="matrix(0.0000781549,-0.0351562,0.0351562,0.0000781549,-0.0199854,17.97997)"/>
                            </g>
                        </svg>
                        <ul class="sub-menu-inner">
                            <li>
                                <a href='https://www.altuofianco.it/soluzioni/strategia/comunicazione/telecomunicazioni-avanzate'>TELECOMUNICAZIONI AVANZATE</a>
                            </li>
                            <li>
                                <a href='https://www.altuofianco.it/soluzioni/strategia/competitivita/soluzioni-digital-marketing'>Digital Marketing</a>
                            </li>
                            <li>
                                <a href='https://www.altuofianco.it/soluzioni/strategia/comunicazione/siti-internet-e-app'>Siti internet e App</a>
                            </li>
                            <li>
                                <a href="https://www.altuofianco.it/soluzioni/strategia/comunicazione/sviluppo-del-brand">Sviluppo del tuo brand</a>
                            </li>
                            <li>
                                <a href="https://www.altuofianco.it/soluzioni/strategia/gestione/ufficio-al-tuo-fianco">Ufficio Altuofianco</a>
                            </li>
                            <li>
                                <a href="https://www.altuofianco.it/soluzioni/strategia/gestione/noleggio-operativo-per-aziende">Noleggio operativo</a>
                            </li>
                            <li>
                                <a href="https://www.altuofianco.it/soluzioni/strategia/gestione/fattura-contabilita-cloud">Fattura elettronica</a>
                            </li>
                            <li>
                                <a href="https://www.altuofianco.it/soluzioni/strategia/comunicazione/centralini-virtuali">Centralini virtuali</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href='https://www.altuofianco.it/soluzioni/sicurezza/'>Sicurezza</a>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18pt" height="18pt" viewBox="0 0 18 18" version="1.1">
                            <g id="surface1">
                                <path style="fill-rule:nonzero;fill-opacity:1;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke:rgb(100%,100%,100%);stroke-opacity:1;stroke-miterlimit:4;" d="M 268.666635 255.971841 L 404.825695 127.44661 C 418.905649 113.415274 426.641663 94.620253 426.708312 74.620055 C 426.616919 33.509045 393.209072 0.0276752 351.986705 0.00820431 C 332.097865 0.0524187 313.448288 7.760564 299.368335 21.791899 L 107.215631 203.219517 C 96.794184 213.576043 89.823101 226.591573 86.85522 241.042651 C 85.866337 246.044861 85.321899 251.046084 85.333014 256.046072 C 85.343882 260.934949 85.799688 266.045059 86.810801 271.042824 C 89.731547 285.369699 96.760676 298.465217 107.450782 308.997033 L 299.187254 490.126792 C 313.3297 504.206499 332.013858 512.053871 352.013809 512.009409 C 393.125066 512.029127 426.7173 478.509922 426.62566 437.287802 C 426.692556 417.398715 418.873053 398.638274 404.619002 384.336593 Z M 268.666635 255.971841 " transform="matrix(0.0000781549,-0.0351562,0.0351562,0.0000781549,-0.0199854,17.97997)"/>
                            </g>
                        </svg>
                        <ul class="sub-menu-inner">
                            <li>
                                <a href='https://www.altuofianco.it/soluzioni/sicurezza/legale/gdpr'>GDPR</a>
                            </li>
                            <li>
                                <a href='https://www.altuofianco.it/soluzioni/sicurezza/aziendale/avvocato-altuofianco'>Avvocato Altuofianco</a>
                            </li>
                            <li>
                                <a href='https://www.altuofianco.it/soluzioni/sicurezza/aziendale/formazione-gdpr'>Formazione GDPR</a>
                            </li>
                            <li>
                                <a href="https://www.altuofianco.it/soluzioni/sicurezza/cybersecurity/mdm-mobile-device-management">MDM mobile device management</a>
                            </li>
                            <li>
                                <a href="https://www.altuofianco.it/soluzioni/sicurezza/cybersecurity/wi-fi-webapp-scan-e-firewall">Wi-Fi, Webapp Scan e Firewall</a>
                            </li>
                            <li>
                                <a href="https://www.altuofianco.it/soluzioni/sicurezza/cybersecurity/servizi-in-cloud">Servizi in Cloud</a>
                            </li>
                            <li>
                                <a href="https://www.altuofianco.it/soluzioni/sicurezza/legale/dpo-data-protection-officer">DPO Data Protection Officer</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href='https://www.altuofianco.it/soluzioni/energie/'>Energie</a>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18pt" height="18pt" viewBox="0 0 18 18" version="1.1">
                            <g id="surface1">
                                <path style="fill-rule:nonzero;fill-opacity:1;stroke-width:1;stroke-linecap:butt;stroke-linejoin:miter;stroke:rgb(100%,100%,100%);stroke-opacity:1;stroke-miterlimit:4;" d="M 268.666635 255.971841 L 404.825695 127.44661 C 418.905649 113.415274 426.641663 94.620253 426.708312 74.620055 C 426.616919 33.509045 393.209072 0.0276752 351.986705 0.00820431 C 332.097865 0.0524187 313.448288 7.760564 299.368335 21.791899 L 107.215631 203.219517 C 96.794184 213.576043 89.823101 226.591573 86.85522 241.042651 C 85.866337 246.044861 85.321899 251.046084 85.333014 256.046072 C 85.343882 260.934949 85.799688 266.045059 86.810801 271.042824 C 89.731547 285.369699 96.760676 298.465217 107.450782 308.997033 L 299.187254 490.126792 C 313.3297 504.206499 332.013858 512.053871 352.013809 512.009409 C 393.125066 512.029127 426.7173 478.509922 426.62566 437.287802 C 426.692556 417.398715 418.873053 398.638274 404.619002 384.336593 Z M 268.666635 255.971841 " transform="matrix(0.0000781549,-0.0351562,0.0351562,0.0000781549,-0.0199854,17.97997)"/>
                            </g>
                        </svg>
                        <ul class="sub-menu-inner">
                            <li>
                                <a href="https://www.altuofianco.it/soluzioni/energie/azienda/easyhr-app-risorse-umane">App per la gestione del personale</a>
                            </li>
                            <li>
                                <a href="https://www.altuofianco.it/soluzioni/energie/azienda/efficientamento-energetico">Efficientamento energetico</a>
                            </li>
                            <li>
                                <a href="https://www.altuofianco.it/soluzioni/energie/persone/relazioni-per-business">Relazioni per il business</a>
                            </li>
                            <li>
                                <a href="https://www.altuofianco.it/soluzioni/energie/azienda/business-process-outsourcing">Business process outsourcing</a>
                            </li>
                            <li>
                                <a href="https://www.altuofianco.it/soluzioni/energie/collaboratori/eventi-business">business</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href='https://www.altuofianco.it/lavora-con-noi'>Lavora con noi</a>
            </li>
            <li>
                <a href='https://www.altuofianco.it/news/'>News</a>
            </li>
            <li>
                <a href='https://www.altuofianco.it/contatti'>Contatti</a>
            </li>
            <!--<li><a target="_blank" href="http://wind.monitorcrm.it/crm/autenticazione/modulo-accesso/">-->
            <!--        <i class="fas fa-briefcase"></i>-->
            <!--    </a></li>-->
            <!--<li>-->
            <!--    <form id="searchform" class="navbar-form" role="search" action="https://www.altuofianco.it"-->
            <!--          method="get">-->
            <!--        <input id="s" name="s" type="text" placeholder="Search …" value="Search...">-->
            <!--        <button id="searchsubmit" type="submit" name="submit">Submit</button>-->
            <!--    </form>-->
            <!--</li>-->
        </ul>
    </nav>
</header>

<div class="landing_page_container">
    <div class="container-header">
        <div class="head_info">
            <h1>Webinar Altuofianco</h1>
            <h2>#iorestoacasa e mi formo</h2>
        </div>
    </div>
    <div class="wrap">
        <div class="content_text">
            <h3 class="question-title">Webinar gratuiti organizzati <br> da Altuofianco</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
        <div class="content_form">
            <div class="contattaci_form">
                <form action="" id="apply" method="POST">
                    <div class="container_form">
                        <h2 class="question-title">Iscriviti </h2>
                        <div class="form-group">
                            <select id="webinar" name="webinar" required>
                                <option value="">Scegli il webinar*</option>
								<?php

									foreach ($webinar as $key => $value):

										echo '<option value="' . $key . '" ' . $hide[$key] . '>' . $value . '</option>'; //close your tags!!
									endforeach;
								?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select id="webdata" name="webdata" required>
                                <option value="">Scegli la data*</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email*" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" placeholder="Telefono" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Nominativo*" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="azienda" placeholder="Azienda*" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="provincia" placeholder="Provincia" required>
                        </div>
                        <div class="form-group">
                            <textarea name="messaggio" form="apply" placeholder="Messaggio"></textarea>
                        </div>
                        <div class="obligations">* campo obbligatorio</div>
                        <div class="checkbox">
                            <input type="checkbox" id="cbx" style="display: none;" required>
                            <label for="cbx" class="check privacy">
                                <svg width="18px" height="18px" viewBox="0 0 18 18">
                                    <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                                    <polyline points="1 9 7 14 15 4"></polyline>
                                </svg>
                            </label>

                            <p class="a">
                                <b>Cliccando su invia dichiari di aver preso visione e di accetare la nostra
                                    <a
                                            href="https://www.altuofianco.it/privacy/"
                                            target="_blank">privacy policy
                                    </a>
                                </b></p>
                        </div>

                        <div class="btn">
                            <button name="register-btn" type="submit" class="registerbtn">Iscriviti</button>


                        </div>
                    </div>
                </form>
            </div>
			<?php require 'save.php'; ?>

        </div>


    </div>


</div>


<div id="site-footer" class="site-footer" data-zone="footer">
    <div class="footer-flex">
        <div class="footer-flex__widgetarea wbcontainer">

            <div class="footer-flex__widget footer-flex__widget--1">
                <div id="custom_html-2" class="widget_text widget widget_custom_html">
                    <div class="textwidget custom-html-widget">
                        <p>altuofianco srl<br>
                            viale Marcello Finzi, 587<br>
                            41122 Modena (MO)<br>
                            <a href="mailto:servizioclienti@altuofianco.it">servizioclienti@altuofianco.it</a>
                        <h5>Lavora con noi</h5>
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer-flex__widget footer-flex__widget--2">
                <div id="custom_html-3" class="widget_text widget widget_custom_html">
                    <div class="textwidget custom-html-widget"><p>
                            Feriali 9:30 - 12:30 | 14:30 alle 17:30. <br>
                            Foreign Call + 39 328 7533322
                        </p></div>
                </div>
                <div id="media_image-3" class="widget widget_media_image">
                    <a href="" class="btn-phone">
                        <img src="images/phone-resized.svg" alt="">
                        <span>Contatti</span>
                    </a>
                </div>
            </div>
            <div class="footer-flex__widget footer-flex__widget--3">
                <div id="custom_html-4" class="widget_text widget widget_custom_html">
                    <div class="textwidget custom-html-widget">
                        <div class="footer-logo">
                            <img src="images/autofianco-colored.svg" alt="">
                        </div>
                        <div class="footer-social">
                            <h4 class="footer-social__title">Seguici sui <br> nostri canali</h4>
                            <div class="footer-social__buttons">
                                <a target="_blank" href="https://www.linkedin.com/company/altuofiancosrl/">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a target="_blank" href="https://www.youtube.com/channel/UCn-NvALNlMl-a8ifBuHNfrA">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--<div data-cookieonly="" class="closure site-closure" id="colophon" role="contentinfo">-->
    <!--    <div class="closure__inner wbcontainer">-->
    <!--        <div class="closure__text"><p> 2019 © Copyright - altuofianco srl | P.IVA 03531950362</p></div>-->
    <!--        <ul id="menu-bottom-menu" class="closure__nav"></ul>-->
    <!--    </div>-->
    <!--</div>                            </div>-->

    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/script.js"></script>

</body>

</html>



