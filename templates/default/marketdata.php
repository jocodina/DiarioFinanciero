<?php require_once 'header-interior.php'; ?>
<!-- Sección principal -->
        <section class="row bigbox container"><!-- Importante la clase mobileSlider, ya que permite transformar los articulos marcados en su interior con el atributo dataToSlide, en un slider en la visualización de Smartphones -->
            <!-- Banners laterales -->
            <div class='banner-lateral left hide-on-phones hide-on-tablets'>
                <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-lateral.jpg" alt="banner" />
            </div>
            <div class='banner-lateral right hide-on-phones hide-on-tablets'>
                <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-lateral.jpg" alt="banner" />
            </div>
            <!-- Fin Banners laterales -->
            <!-- Breadcrumbs-->
            <div class="breadcrumbs hide-on-phones">
                <span>Estás en: <a href="/" title="Volver al Inicio" rel="index">Inicio</a> / <a href="marketdata.html" title="Market Data" rel="contents">Market Data</a> / <span class="active">Centro de datos</span></span>
            </div>
            <!-- Fin Breadcrumbs-->
            <section class="column8 down-m">
                <div class="table-wrapp tab-panels chart-options detailed-chart">
                    <h3>Bolsas</h3>
                    <h4><span class="flag"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/flag.png" alt="NASDAQ"></span>NASDAQ</h4>
                    <div class="buttons-tab">
                        <ul class="first inline-list buttons-slide">
                            <li><button class="active" data-func="changeBigChart" data-type="tabs">1 Día</button></li>
                            <li><button data-func="changeBigChart">1 Mes</button></li>
                            <li><button data-func="changeBigChart">6 Meses</button></li>
                        </ul>
                        <ul class="last inline-list buttons-slide">
                            <li><button class="locked-tab" data-func="changeBigChart" data-type="tabs">1 Año</button></li>
                            <li><button class="locked-tab" data-func="changeBigChart">5 Años</button></li>
                        </ul>
                    </div>
                    <!-- Gráfico, dentro de este elemento debería generarse un gráfico -->
                    <div class="chart">
                        <img src="http://diariofinanciero.ida.cl/templates/default/images/examples/big-chart.jpg" alt="gráfico">
                    </div>
                    <!-- Fin Gráfico -->
                    <!-- Tabla Gráfico -->
                    <div class="chart-table-wrapp">
                        <div class="chart-ul">
                            <table class="big-table">
                                <thead>
                                    <tr>
                                        <th>Índice</th>
                                        <th>Precio($)</th>
                                        <th class="hide-on-phones">Variación(%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr data-func="changeChart">
                                        <td><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>IPGA</td>
                                        <td>18.270,94</td>
                                        <td class="hide-on-phones">-0.45%</td>
                                    </tr>
                                    <tr data-func="changeChart">
                                        <td><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>IPSA</td>
                                        <td>18.270,94</td>
                                        <td class="hide-on-phones">-0.45%</td>
                                    </tr>
                                    <tr class="active" data-func="changeChart">
                                        <td><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>NASDAQ</td>
                                        <td>18.270,94</td>
                                        <td class="hide-on-phones">-0.45%</td>
                                    </tr>
                                    <tr data-func="changeChart">
                                        <td><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>SP 500 (NY)</td>
                                        <td>18.270,94</td>
                                        <td class="hide-on-phones">-0.45%</td>
                                    </tr>
                                    <tr data-func="changeChart">
                                        <td><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>BOVESPA (SAO PAULO)</td>
                                        <td>18.270,94</td>
                                        <td class="hide-on-phones">-0.45%</td>
                                    </tr>
                                    <tr data-func="changeChart">
                                        <td><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>MERVAL (BUENOS AIRES)</td>
                                        <td>18.270,94</td>
                                        <td class="hide-on-phones">-0.45%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Fin Tabla Gráfico -->
                    <div class="locked-message nom">
                        <p><a href="/" title="Ingresa a DF" rel="nofollow">Ingresa</a> o <a href="/" title="Regístrate a DF" rel="nofollow">Regístrate</a> para poder ver la información histórica, exclusivo para suscriptores.</p>
                    </div>
                </div>
                <section>
                    <h3><a class="rotulo" href="portadilla.html" title="Ir a Empresas" rel="contents">Precio de Acciones en Línea</a></h3>
                    <div class="table-wrapp tab-panels">
                        <h3 class="wb">Bolsa de Comercio de Santiago</h3>
                        <div class="datos-wrapp clearfix">
                            <div class="col">
                                <div class="slider tab-panels">
                                    <ul class="buttons-tab inline-list buttons-slide">
                                        <li><button class="active" data-func="changeTab" data-slide="0" data-type="tabs" data-delegated="true">Mayores Alzas</button></li>
                                    </ul>
                                    <!-- Slider -->
                                    <div class="slide-tabs">
                                        <ul class="tabs">
                                            <li data-index="0">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Acción</th>
                                                            <th>Precio$</th>
                                                            <th>Var.diaria</th>
                                                            <th>Últ.trans.</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Hites</td>
                                                            <td>436,28</td>
                                                            <td>1,34%</td>
                                                            <td>15:58:56</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Azul Azul</td>
                                                            <td>436,28</td>
                                                            <td>1,34%</td>
                                                            <td>15:58:56</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Parauco</td>
                                                            <td>436,28</td>
                                                            <td>1,34%</td>
                                                            <td>15:58:56</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ripley</td>
                                                            <td>436,28</td>
                                                            <td>1,34%</td>
                                                            <td>15:58:56</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Habitat</td>
                                                            <td>436,28</td>
                                                            <td>1,34%</td>
                                                            <td>15:58:56</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Fin Slider -->
                                </div>
                            </div>
                            <div class="col">
                                <div class="slider tab-panels">
                                    <ul class="buttons-tab inline-list buttons-slide">
                                        <li><button class="active" data-func="changeTab" data-slide="0" data-type="tabs">Mayores Bajas</button></li>
                                        <li><button data-func="changeTab" data-slide="1" data-type="tabs">Más Tranzadas</button></li>
                                    </ul>
                                    <!-- Slider -->
                                    <div class="slide-tabs">
                                        <ul class="tabs">
                                            <li data-index="0">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Acción</th>
                                                            <th>Precio$</th>
                                                            <th>Var.diaria</th>
                                                            <th>Últ.trans.</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Hites</td>
                                                            <td>436,28</td>
                                                            <td>1,34%</td>
                                                            <td>15:58:56</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Azul Azul</td>
                                                            <td>436,28</td>
                                                            <td>1,34%</td>
                                                            <td>15:58:56</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Parauco</td>
                                                            <td>436,28</td>
                                                            <td>1,34%</td>
                                                            <td>15:58:56</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ripley</td>
                                                            <td>436,28</td>
                                                            <td>1,34%</td>
                                                            <td>15:58:56</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Habitat</td>
                                                            <td>436,28</td>
                                                            <td>1,34%</td>
                                                            <td>15:58:56</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                            <li data-index="0">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Acción</th>
                                                            <th>Precio$</th>
                                                            <th>Var.diaria</th>
                                                            <th>Últ.trans.</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Hites</td>
                                                            <td>436,28</td>
                                                            <td>1,34%</td>
                                                            <td>15:58:56</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Azul Azul</td>
                                                            <td>436,28</td>
                                                            <td>1,34%</td>
                                                            <td>15:58:56</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Parauco</td>
                                                            <td>436,28</td>
                                                            <td>1,34%</td>
                                                            <td>15:58:56</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ripley</td>
                                                            <td>436,28</td>
                                                            <td>1,34%</td>
                                                            <td>15:58:56</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Habitat</td>
                                                            <td>436,28</td>
                                                            <td>1,34%</td>
                                                            <td>15:58:56</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Fin Slider -->
                                </div>
                            </div>
                        </div>
                        <h3 class="wb hide-on-phones">Portafolio Personal</h3>
                        <div class="datos-wrapp clearfix hide-on-phones">
                            <p>Esta aplicación DF te permite seleccionar acciones y seguirlas</p>
                            <div class="chart-table-wrapp">
                            <div class="chart-ul">
                                <table class="big-table personal">
                                    <thead>
                                        <tr>
                                            <th>Acción</th>
                                            <th>Precio</th>
                                            <th>Variación</th>
                                            <th>Cantidad</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="content-tr">
                                            <td class="accion">...</td>
                                            <td class="precio">...</td>
                                            <td class="variacion">...</td>
                                            <td class="cantidad">...</td>
                                            <td class="more-td">
                                                <span data-func="deployIngresoSubmenu" data-deploy="false" class="personal-more"></span>
                                                <div class="ingreso-submenu transition">
                                                    <div class="wrapp-ingreso-sub">
                                                        <div class="ingreso-column">
                                                            <label for="acciones">Buscador de Acciones:</label>
                                                            <input id="acciones" type="search" name="acciones-search" placeholder="Ingrese la acción">
                                                            <div id="wrapper">
                                                                <div id="scroller">
                                                                    <ul class="spotlight">
                                                                        <!-- Cada una de estas acciones debe tener como atributo personalizados los valores que se ingresarán en la tabla, estos son: precio y variación  -->
                                                                        <li data-func="listSelected" data-precio="180,00" data-variacion="0,00">Hites</li>
                                                                        <li data-func="listSelected" data-precio="2.110,00" data-variacion="1,03">Azul Azul</li>
                                                                        <li data-func="listSelected" data-precio="38250,00" data-variacion="0,37">Parauco</li>
                                                                        <li data-func="listSelected" data-precio="180,00" data-variacion="0,00">Ripley</li>
                                                                        <li data-func="listSelected" data-precio="180,00" data-variacion="0,00">Hites</li>
                                                                        <li data-func="listSelected" data-precio="2.110,00" data-variacion="1,03">Azul Azul</li>
                                                                        <li data-func="listSelected" data-precio="38250,00" data-variacion="0,37">Parauco</li>
                                                                        <li data-func="listSelected" data-precio="180,00" data-variacion="0,00">Ripley</li>
                                                                        <li data-func="listSelected" data-precio="180,00" data-variacion="0,00">Hites</li>
                                                                        <li data-func="listSelected" data-precio="2.110,00" data-variacion="1,03">Azul Azul</li>
                                                                        <li data-func="listSelected" data-precio="38250,00" data-variacion="0,37">Parauco</li>
                                                                        <li data-func="listSelected" data-precio="180,00" data-variacion="0,00">Ripley</li>
                                                                        <li data-func="listSelected" data-precio="180,00" data-variacion="0,00">Hites</li>
                                                                        <li data-func="listSelected" data-precio="2.110,00" data-variacion="1,03">Azul Azul</li>
                                                                        <li data-func="listSelected" data-precio="38250,00" data-variacion="0,37">Parauco</li>
                                                                        <li data-func="listSelected" data-precio="180,00" data-variacion="0,00">Ripley</li>
                                                                        <li data-func="listSelected" data-precio="180,00" data-variacion="0,00">Hites</li>
                                                                        <li data-func="listSelected" data-precio="2.110,00" data-variacion="1,03">Azul Azul</li>
                                                                        <li data-func="listSelected" data-precio="38250,00" data-variacion="0,37">Parauco</li>
                                                                        <li data-func="listSelected" data-precio="180,00" data-variacion="0,00">Ripley</li>
                                                                        <li data-func="listSelected" data-precio="180,00" data-variacion="0,00">Hites</li>
                                                                        <li data-func="listSelected" data-precio="2.110,00" data-variacion="1,03">Azul Azul</li>
                                                                        <li data-func="listSelected" data-precio="38250,00" data-variacion="0,37">Parauco</li>
                                                                        <li data-func="listSelected" data-precio="180,00" data-variacion="0,00">Ripley</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="ingreso-column">
                                                            <label for="cantidad">Cantidad de acciones:</label>
                                                            <input id="cantidad" type="number" name="acciones-cantidad" placeholder="Ingrese la cantidad de acciones..." min="1">
                                                            <input type="submit" value="Aceptar" class="btn blue" data-func="AgregarAcciones"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="total-field">
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="banner-wrapp zen-hide">
                        <!-- Iframes -->
                        <div class="banner-holder single hide-on-phones fleft video-wrapper">
                            <img src="http://diariofinanciero.ida.cl/templates/default/images/examples/chart.jpg" alt="banner">
                        </div>
                        <div class="banner-holder single hide-on-phones fright video-wrapper">
                            <img src="http://diariofinanciero.ida.cl/templates/default/images/examples/chart2.jpg" alt="banner">
                        </div>
                        <!-- Fin Iframes -->
                    </div>
                </section>
            </section>
            <aside class="column4 last down-m hide-on-phones">
                 <div class="slider table-wrapp tab-panels chart-options">
                    <h3>Índices</h3>
                    <ul class="buttons-tab inline-list buttons-slide">
                        <li><button class="active" data-func="changeTab" data-slide="0" data-type="tabs">Monedas</button></li>
                        <li><button data-func="changeTab" data-slide="1" data-type="tabs">Commodities</button></li>
                        <li><button data-func="changeTab" data-slide="2" data-type="tabs">Indicadores</button></li>
                    </ul>
                    <div class="slide-tabs">
                        <ul class="tabs">
                            <li data-index="0">
                                <h4>Euro EUR/USD</h4>
                                <!-- Gráfico, dentro de este elemento debería generarse un gráfico -->
                                <div class="chart">
                                    <img src="http://diariofinanciero.ida.cl/templates/default/images/examples/grafico.jpg" alt="gráfico">
                                </div>
                                <!-- Fin Gráfico -->
                                <ul class="chart-ul">
                                    <li data-func="changeChart" class="active">
                                        <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" class="transition"></span>BOVESPA</span>
                                        <span class="value">2.343.43</span>
                                    </li>
                                    <li class="" data-func="changeChart">
                                        <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>IPSA</span>
                                        <span class="value">2.343.43</span>
                                    </li>
                                    <li data-func="changeChart">
                                        <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" class="transition"></span>IBEX</span>
                                        <span class="value">2.343.43</span>
                                    </li>
                                    <li data-func="changeChart">
                                        <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" class="transition"></span>NIKKEI</span>
                                        <span class="value">2.343.43</span>
                                    </li>
                                </ul>
                            </li>
                            <li data-index="1">
                                <h4>Euro EUR/USD</h4>
                                <!-- Gráfico, dentro de este elemento debería generarse un gráfico -->
                                <div class="chart">
                                    <img src="http://diariofinanciero.ida.cl/templates/default/images/examples/grafico.jpg" alt="gráfico">
                                </div>
                                <!-- Fin Gráfico -->
                                <ul class="chart-ul">
                                    <li data-func="changeChart" class="active">
                                        <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" class="transition"></span>BOVESPA</span>
                                        <span class="value">2.343.43</span>
                                    </li>
                                    <li class="" data-func="changeChart">
                                        <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>IPSA</span>
                                        <span class="value">2.343.43</span>
                                    </li>
                                    <li data-func="changeChart">
                                        <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" class="transition"></span>IBEX</span>
                                        <span class="value">2.343.43</span>
                                    </li>
                                    <li data-func="changeChart">
                                        <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" class="transition"></span>NIKKEI</span>
                                        <span class="value">2.343.43</span>
                                    </li>
                                </ul>
                            </li>
                            <li data-index="2">
                                <h4>Euro EUR/USD</h4>
                                <!-- Gráfico, dentro de este elemento debería generarse un gráfico -->
                                <div class="chart">
                                    <img src="http://diariofinanciero.ida.cl/templates/default/images/examples/grafico.jpg" alt="gráfico">
                                </div>
                                <!-- Fin Gráfico -->
                                <ul class="chart-ul">
                                    <li data-func="changeChart" class="active">
                                        <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" class="transition"></span>BOVESPA</span>
                                        <span class="value">2.343.43</span>
                                    </li>
                                    <li class="" data-func="changeChart">
                                        <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>IPSA</span>
                                        <span class="value">2.343.43</span>
                                    </li>
                                    <li data-func="changeChart">
                                        <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" class="transition"></span>IBEX</span>
                                        <span class="value">2.343.43</span>
                                    </li>
                                    <li data-func="changeChart">
                                        <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" class="transition"></span>NIKKEI</span>
                                        <span class="value">2.343.43</span>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Banner -->
                <div class="banner-holder hide-on-phones">
                    <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-aside2.jpg" alt="banner">
                </div>
                <!-- Fin Banner -->
                <div class="locked box">
                    <h3>Descargar la aplicación <strong>DF Mercados</strong></h3>
                    <a href="/" title="Descargar en Google Play" rel="external" class="btn mac download">Android app<span>Google Play</span></a>
                    <a href="/" title="Descargar en App Store" rel="external" class="btn android download">Available on the <span>App Store</span></a>
                </div>
                <h3><a class="rotulo" href=midf.html" title="Ir a Empresas" rel="contents">Blog Finanzas Personales</a></h3>
                <article class="box locked">
                    <a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example03.jpg" alt="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina"></a>
                    <div class="category-wrapp">
                        <h4 class="category"><a href="retail.html" title="ir a Mercados" rel="contents">Retail</a></h4>
                        <span class="date">10/02/2013</span>
                    </div>
                    <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                    <p>La operación debiera cerrarse entre fines de Septiembre y Octubre. Ayer, ambas partes firmaron el acuerdo</p>
                </article>
                <article class="box doble-border">
                    <div class="category-wrapp">
                        <h4 class="category"><a href="portadilla.html" title="ir a Bolsa" rel="contents">Banca / Servicios Financieros</a></h4>
                        <span class="date">10/02/2013</span>
                    </div>
                    <h3><a href="single.html" title="El IPSA retrocede casi 2% en jornada negativa para las bolsas del globo" rel="contents">El IPSA retrocede casi 2% en jornada negativa para las bolsas del globo</a></h3>
                </article>
                <div class="tags-wrapp hide-on-phones">
                    <p>Más sobre:
                        <a href="tags.html" title="ver artículos relacionados a Commodities" rel="tag">Commodities,</a> 
                        <a href="tags.html" title="ver artículos relacionados a Renta Fija" rel="tag">Renta Fija,</a> 
                        <a href="tags.html" title="ver artículos relacionados a Divisas" rel="tag">Divisas,</a>
                    </p>
                </div>
                <h3><a class="rotulo" href="portadilla.html" title="Ir a Unidad de Inteligencia" rel="contents">DF UI | Unidad de Inteligencia</a></h3>
                <div class="locked download-items">
                   <article class="box">
                            <h4 class="category"><a href="estudio.html" title="ir a Estudio" rel="contents">Estudio</a></h4>
                            <h3><a href="#" title="Encuesta ADIMARK Octubre 2012" rel="contents">Encuesta ADIMARK Octubre 2012<span class="download-data">PDF, 124kb</span></a></h3>
                   </article>
                    <article class="box doble-border">
                            <h4 class="category"><a href="estudio.html" title="ir a Estudio" rel="contents">Estudio</a></h4>
                            <h3><a href="#" title="Encuesta ADIMARK Octubre 2012" rel="contents">Encuesta ADIMARK Octubre 2012<span class="download-data">PDF, 124kb</span></a></h3>
                   </article>
                    <p class="hide-on-phones"><a href="#" title="Ingresa a DF" rel="nofollow">Ingresa</a> o <a href="#" title="Regístrate en DF" rel="nofollow">Regístrate</a> para seguir tu <a href="#" title="Ingresa a tu Portafolio personal" rel="nofollow">Portafolio personal</a></p>
                </div>
            </aside>
        </section>
        <!-- Banner -->
        <div class="banner-holder full row hide-on-phones">
            <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-full.jpg" alt="banner" />
        </div>
        <!-- Fin Banner -->
        <!-- Fin Sección principal -->
<?php require_once 'footer.php'; ?>