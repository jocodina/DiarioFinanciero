<!DOCTYPE html>
<!-- Condiciones que permiten añadir clases a la etiqeuta html y saber que tipo de explorer se está visualizando el sitio -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="es"> <!--<![endif]-->
    <!-- Comienzo del Head -->
    <head>
        <title>Diario Financiero</title><!-- Título del Sitio, debe mantenerse siempre -->
        <meta charset="utf-8"><!-- Codificación de caracteres -->
        <meta name="description" content="Diario Financiero, líder en prensa de negocios"><!-- Descripción de la página, debería variar dependiendo del contenido de la página -->
        <meta name="author" content="Jorge Codina"><!-- Autor del Front del sitio -->
        <meta name="HandheldFriendly" content="True"><!-- Lo mismo que meta viewport, pero para navegadores obsoletos y más antiguos -->
        <meta name="MobileOptimized" content="320"><!-- Lo mismo que meta viewport, pero para navegadores obsoletos y más antiguos -->
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no"><!-- Atributos necesarios para un correcto despliegue del sitio en dispositivos móviles, igualando los pixeles en ancho y adaptandolos a las pantallas,quitando la opción zoom -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><!-- Indica a IE antiguos cómo tiene que visualizar el sitio -->
        <meta name="format-detection" content="telephone=no"><!-- Deshabilita la detección de teléfonos y mails en dispositivos que tengan Safari -->
        <meta http-equiv="cleartype" content="on"><!-- Mobile Internet Explorer nos permite activar cleartype para fuentes con smoothing -->
        
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://diariofinanciero.ida.cl/templates/default/images/appleIcons/apple-touch-icon-144x144-precomposed.png"><!-- Iconos que se desplegarán como favorito en Dispositivos IOS de Alta resolución -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://diariofinanciero.ida.cl/templates/default/images/appleIcons/apple-touch-icon-72x72-precomposed.png"><!-- Para la primera generación de Ipads -->
        <link rel="apple-touch-icon-precomposed" href="http://diariofinanciero.ida.cl/templates/default/images/appleIcons/apple-touch-icon-72x72-precomposed.png"><!-- IOS en general -->
        
        <link rel="shortcut icon" href="favicon.ico"><!-- Favicon -->
        
        <!-- CSS -->
        <link rel="stylesheet" href="http://diariofinanciero.ida.cl/templates/default/css/style.css"><!-- Hoja de estilos principal -->
        <link rel="stylesheet" href="http://diariofinanciero.ida.cl/templates/default/css/grid.css"><!-- Hoja de estilos con la grilla responsiva principal del sitio -->
        <!-- En caso de navegadores IE obsoletos, un CSS especial-->
        <!--[if (lte IE 8)]>
            <link rel="stylesheet" href="http://diariofinanciero.ida.cl/templates/default/css/ie.css">
            <link rel="stylesheet" media="print" href="http://diariofinanciero.ida.cl/templates/default/css/print.css" type="text/css" />
        <![endif]-->
        
        <!-- JS -->
        <script type="text/javascript" src="http://diariofinanciero.ida.cl/templates/default/js/modernizr.js"></script><!-- Librería que permite detectar capacidades de los navegadores, además permite que las etiquetas HTML5 se desplieguen de forma correcta en navegadores IE obsoletos -->
        <script type="text/javascript" src="http://diariofinanciero.ida.cl/templates/default/js/jquery.js"></script><!-- Librería JQuery que se utiliza para las funciones de todo el sitio en general -->
        <script type="text/javascript" src="http://diariofinanciero.ida.cl/templates/default/js/requestAnimationFrame.js"></script><!-- Librería que permite acelerar el motor gráfico del navegador para realizar animaciones y transiciones más fluídas-->
        <script type="text/javascript" src="http://diariofinanciero.ida.cl/templates/default/js/validizr.js"></script><!-- Plugin para validar formularios -->
        <script type="text/javascript" src="http://diariofinanciero.ida.cl/templates/default/js/script.js"></script><!-- Funciones y métodos principales del sitio -->
        
    </head>
    <!-- Fin del Head -->
    <body class="interior single">
        <!-- Comienzo del Header -->
        <header class="top-header zen-hide">
            <!-- Banners -->
            <div class="row banner-header hide-on-phones">
                <div class="fleft">
                    <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-top-left.jpg" alt="M2M soluciones inteligentes" />
                </div>
                <div class="fright">
                    <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-top-right.jpg" alt="UDD experiential learning programs" />
                </div>
            </div>
            <div class="banner-holder hide-on-tablets hide-on-desktop"><!-- Banner para Smarthpones -->
                    <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-aside.jpg" alt="banner">
            </div>
            <!-- Fin Banners -->
            <!-- Menú DF7 -->
            <div class="df7-nav hide-on-phones">
                <ul class="row inline-list">
                    <li><a class="digital-paper" href="#" title="Papel Digital" rel="external">Papel Digital</a></li>
                    <li><a class="df-app" href="#" title="App Diraio Financiero" rel="external">App Diario Financiero</a></li>
                    <li><a class="df-app" href="#" title="App DF Mercados" rel="external">App DF Mercados</a></li>
                    <li><a class="df-portafolio so-far" href="#" title="Portafolio Retail" rel="external">Portafolio Retail</a></li>
                    <li><a class="df-conferencias" href="#" title="DF Conferencias" rel="external">DF Conferencias</a></li>
                    <li><a class="df-tv far" href="#" title="DF TV" rel="external">DF TV</a></li>
                    <li><a class="df-ui far" href="#" title="DF UI" rel="external">DF UI</a></li>
                </ul>
            </div>
            <!-- Fin Menú DF7 -->
            <div class="main-header">
                <!-- Botones -->
                <div class="top-nav row">
                    <ul class="inline-list external-links hide-on-phones">
                        <li><a href="http://capital.cl" title="Ir al sitio de Revista Capital" rel="external"><img src="http://diariofinanciero.ida.cl/templates/default/images/logos/capital.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/logos/capital.png" alt="Revista Capital"/></a></li>
                        <li><a href="http://thenote.cl" title="Ir al sitio de The Note" rel="external"><img src="http://diariofinanciero.ida.cl/templates/default/images/logos/the-note.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/logos/the-note.png" alt="The Note"/></a></li>
                        <li><a href="http://ed.cl" title="Ir al sitio de Revista ED" rel="external"><img src="http://diariofinanciero.ida.cl/templates/default/images/logos/ed.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/logos/ed.png" alt="Revista ED"/></a></li>
                    </ul>
                    <ul class="inline-list profile-btns hide-on-phones hide-on-tablets">
                        <li><a class="suscripciones btn" href="suscripciones.html" title="Suscripciones a Diario Financiero" rel="contents">Suscripciones</a></li>
                        <li>
                            <a class="ingreso btn" data-func="deployIngresoSubmenu" data-deploy="false" href="ingreso.html" title="Ingresar a Diario Financiero" rel="contents">Ingreso</a>
                            <div class="ingreso-submenu">
                                <div class="wrapp-ingreso-sub">
                                    <div class="ingreso-column">
                                        <h3>Si ya estás registrado, ingresa aquí:</h3>
                                        <form class="inscribirForm" action="/" method="post">
                                            <label for="ingreso-email">Email</label>
                                            <input id="ingreso-email" type="email" name="ingreso-email" placeholder="ejemplo@email.com" required />
                                            <label for="ingreso-pass">Contraseña</label>
                                            <input id="ingreso-pass" type="password" name="ingreso-pass" placeholder="Ingresa tu contraseña aquí" required />
                                            <a href="#" class="small-a" title="Recuperar contraseña" rel="help">Olvidé mi contraseña</a>
                                            <div class="buttons-ingreso">
                                                <input id="remember-ingreso" type="checkbox" name="remember-ingreso" checked/>
                                                <label for="remember-ingreso">Recordar mis datos en este equipo</label>
                                                <input type="submit" value="Ingresar" class="btn blue fright"/>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="ingreso-column">
                                        <h3>¿No tienes una cuenta DF.cl?</h3>
                                        <a class="btn blue m-bottom-40" href="#" title="Crear una cuenta en DF.cl" rel="help">Crear Cuenta</a>
                                        <p>O puedes ingresar a través de tus redes sociales</p>
                                        <a class="btn facebookbtn" href="#" title="Ingresa con tu cuenta de Facebook" rel="nofollow">Ingresa Facebook</a>
                                        <a class="btn twitterbtn" href="#" title="Ingresa con tu cuenta de Twitter" rel="nofollow">Ingresa Twitter</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a class="mi-df btn orange" href="mi-df.html" title="Ir a Mi DF" rel="contents">Mi DF</a></li>
                    </ul>
                </div>
                <!-- Fin Botones -->
                <div class="logo-info row container">
                    <div class="logo-wrapp column7">
                        <span class="date hide-on-phones">Jueves 25 de Septiembre, 2013</span>
                        <!-- Logo, Dependiendo del caso la etiqueta H1 varía, por ejemplo, en la home es H1, pero en un artículo, el H1 es el título del artículo -->
                        <a href='/' title='Vovler al Inicio' rel='index'><img src="http://diariofinanciero.ida.cl/templates/default/images/logos/logo.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/logos/logo.png" alt="Diario Financiero" /></a>
                        <!-- Indicadores económicos -->
                        <div class="values hide-on-phones" data-deploy="false">
                            <button class="val" data-func="deployIndicadores" data-pos="1"><strong>UF Hoy:</strong> $23.020,91</button>
                            <button class="val" data-func="deployIndicadores" data-pos="2"><strong>UTM:</strong> $23.020,91</button>
                            <button class="val" data-func="deployIndicadores" data-pos="3"><strong>Dólar US:</strong> $23.020,91</button>
                            <div class="indicadores">
                                <ul><!-- Importante almacenar el valor de cada indicador en el atributo data-value -->
                                    <li data-func="indicadores" data-value="$498,30">Dólar US</li>
                                    <li data-func="indicadores" data-value="$672,20">Euro</li>
                                    <li data-func="indicadores" data-value="$86,34">Peso Arg.</li>
                                    <li data-func="indicadores" data-value="$226,39">Real Bras.</li>
                                    <li data-func="indicadores" data-value="$5,05">Yen Jap.</li>
                                    <li data-func="indicadores" data-value="3,26 USD/lb">Cobre</li>
                                    <li data-func="indicadores" data-value="108,00 USD/lb">Petr. Brent.</li>
                                    <li data-func="indicadores" data-value="102.80 USD/lb">Petr. WTI</li>
                                    <li data-func="indicadores" data-value="21,62 USD/oz">Plata</li>
                                    <li data-func="indicadores" data-value="1.316,20 USD/oz">Oro</li>
                                    <li data-func="indicadores" data-value="3,60 USD/MBTU">Gas Natural</li>
                                </ul>
                                <ul>
                                    <li data-func="indicadores" data-value="3.921,01">IPSA</li>
                                    <li data-func="indicadores" data-value="54.625,83">Bovespa</li>
                                    <li data-func="indicadores" data-value="9.162,50">IBEX</li>
                                    <li data-func="indicadores" data-value="6.570,97">FTSE</li>
                                    <li data-func="indicadores" data-value="13.636,28">Nikkei</li>
                                    <li data-func="indicadores" data-value="$23.081,81">UF Hoy</li>
                                    <li data-func="indicadores" data-value="$496,49">Dólar Obs.</li>
                                    <li data-func="indicadores" data-value="0,20">IPC</li>
                                    <li data-func="indicadores" data-value="$40.447,00">UTM</li>
                                    <li data-func="indicadores" data-value="5,30">IMACEC</li>
                                    <li data-func="indicadores" data-value="23.927,16">IVP</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Fin Indicadores Económicos -->
                    </div>
                    <!-- Buscador -->
                    <form class="column5 last searchForm" method="post" action="search.html">
                        <input type="search" name="s" placeholder="Búsqueda..." autocomplete="off" /><!-- Campo buscador -->
                        <input id="searchButton" type="submit" value="Buscar" data-deploy="false" /><!-- Botón, importante por defecto siempre dejar el atributo data-deploy como false -->
                        <!-- Links de buscador -->
                        <div class="search-options hide-on-phones">
                            <a href="#" title="Búsqueda Avanzada" rel="nofollow">Búsqueda avanzada</a>
                            <a href="#" title="Ediciones anteriores" rel="nofollow">Ediciones anteriores</a>
                        </div>
                    </form>
                    <!-- Fin Buscador -->
                </div>
                <!-- Navegación principal -->
                <div class="navigation">
                    <a class="ingreso btn hide-on-desktop" data-func="deployIngresoSubmenu" data-deploy="false" href="ingreso.html" title="Ingresar a Diario Financiero" rel="contents">Ingreso</a>
                    <div class="ingreso-submenu hide-on-desktop">
                        <div class="wrapp-ingreso-sub">
                            <div class="ingreso-column">
                                <h3>Si ya estás registrado, ingresa aquí:</h3>
                                <form action="/" method="post">
                                    <label for="email-ingreso">Email</label>
                                    <input id="email-ingreso" type="email" name="ingreso-email" placeholder="ejemplo@email.com" required />
                                    <label for="pass-ingreso">Contraseña</label>
                                    <input id="pass-ingreso" type="password" name="ingreso-pass" placeholder="Ingresa tu contraseña aquí" required />
                                    <a href="#" class="small-a" title="Recuperar contraseña" rel="help">Olvidé mi contraseña</a>
                                    <div class="buttons-ingreso">
                                        <input id="ingreso-remember" type="checkbox" name="remember-ingreso" checked/>
                                        <label for="ingreso-remember">Recordar mis datos en este equipo</label>
                                        <input type="submit" value="Ingresar" class="btn blue fright"/>
                                    </div>
                                </form>
                            </div>
                            <div class="ingreso-column">
                                <h3>¿No tienes una cuenta DF.cl?</h3>
                                <a class="btn blue m-bottom-40" href="#" title="Crear una cuenta en DF.cl" rel="help">Crear Cuenta</a>
                                <p>O puedes ingresar a través de tus redes sociales</p>
                                <a class="btn facebookbtn" href="#" title="Ingresa con tu cuenta de Facebook" rel="nofollow">Ingresa Facebook</a>
                                <a class="btn twitterbtn" href="#" title="Ingresa con tu cuenta de Twitter" rel="nofollow">Ingresa Twitter</a>
                            </div>
                        </div>
                    </div>
                    <button class="mobileNav active" data-func="deployMobileNav" data-deploy="false">Economía y Política</button><!-- Botón que se despliega en Smartphones, para desplegar la navegación -->
                    <div class="row nav-wrapp">
                        <nav>
                            <a href="portadilla.html" title="Ir al Inicio" rel="index">Inicio</a>
                            <a class="active" href="portadilla.html" title="Ir a Empresas" rel="contents">Empresas</a>
                            <a href="portadilla.html" title="Ir a Economía y política" rel="contents">Economía y política</a>
                            <a href="portadilla.html" title="Ir a Mercados" rel="contents">Mercados</a>
                            <a href="portadilla.html" title="Ir a Market Data" rel="contents">Market Data</a>
                            <a href="portadilla.html" title="Ir a Internacional" rel="contents">Internacional</a>
                        </nav>
                        <div class="secondary-nav">
                            <ul class="inline-list">
                                <li><a href="tendencia.html" title="ir a Tendencia" rel="contents">Tendencia</a></li>
                                <li><a href="opinion.html" title="ir a Opinión" rel="contents">Opinión</a></li>
                                <li><a href="unidad-de-inteligencia.html" title="ir a Unidad de Inteligencia" rel="contents"><strong>Unidad de Inteligencia</strong></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="submenu hide-on-phones hide-on-tablets">
                        <ul class="inline-list row">
                            <li><a href="portadilla.html" title="Ir a Retail" rel="contents">Retail</a></li>
                            <li><a href="portadilla.html" title="Ir a Retail" rel="contents">Minería</a></li>
                            <li><a href="portadilla.html" title="Ir a Retail" rel="contents">Telecom</a></li>
                            <li><a class="active" href="portadilla.html" title="Ir a Retail" rel="contents">Banca / Servicios financieros</a></li>
                            <li><a href="portadilla.html" title="Ir a Retail" rel="contents">Energía</a></li>
                            <li><a href="portadilla.html" title="Ir a Retail" rel="contents">Infraestructura / Inmobiliaria</a></li>
                            <li><a href="portadilla.html" title="Ir a Retail" rel="contents">Tecnología</a></li>
                            <li><a href="portadilla.html" title="Ir a Retail" rel="contents">Tendencia</a></li>
                            <li><a href="portadilla.html" title="Ir a Retail" rel="contents">Multinacionales</a></li>
                            <li><a href="portadilla.html" title="Ir a Retail" rel="contents">Innovación y Negocios</a></li>
                            <li>
                                <select name="otros">
                                    <option value="">Otros</option>
                                    <option value="retail" data-link="portadilla.html">Retail</option>
                                    <option value="retail" data-link="portadilla.html">Minería</option>
                                    <option value="retail" data-link="portadilla.html">Telecom</option>
                                    <option value="retail" data-link="portadilla.html">Banca</option>
                                    <option value="retail" data-link="portadilla.html">Energía</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Fin de la naveggación principal -->
            </div>
        </header>
        <!-- Fin del Head -->