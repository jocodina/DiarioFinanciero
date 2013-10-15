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
            <!-- Breadcrumbs-->
            <div class="breadcrumbs hide-on-phones">
                <span>Estás en: <a href="/" title="Volver al Inicio" rel="index">Inicio</a> / <span class="active">Empresas</span></span>
            </div>
            <!-- Fin Breadcrumbs-->
            <!-- Fin Banners laterales -->
            <section class="column3 down-m">
                <article class="box">
                    <div class="category-wrapp">
                        <h4 class="category"><a href="portadilla.html" title="ir a Retail" rel="contents">Retail</a></h4>
                        <span class="date">10/02/2013</span>
                    </div>
                    <h3><a href="single.html" title="Accionistas de Quiñeco aprueban aumento de capital por casi US$700 millones" rel="contents">Accionistas de Quiñeco aprueban aumento de capital por casi US$700 millones</a></h3>
                    <p>La cifra representa un avance ostensible frente a la pérdida de 483 millones del mismo perdiodo del año anterior.</p>
                </article>
                <article class="box">
                    <div class="category-wrapp">
                        <h4 class="category"><a href="portadilla.html" title="ir a Telecomunicaciones" rel="contents">Telecomunicaciones</a></h4>
                        <span class="date">10/02/2013</span>
                    </div>
                    <h3><a href="single.html" title="Claro sale a competir con Netflix: en segundo semestre lanzará sericio de video por internet" rel="contents">Claro sale a competir con Netflix: en segundo semestre lanzará sericio de video por internet</a></h3>
                </article>
                <article class="box">
                    <div class="category-wrapp">
                        <h4 class="category"><a href="portadilla.html" title="ir a Telecomunicaciones" rel="contents">Telecomunicaciones</a></h4>
                        <span class="date">10/02/2013</span>
                    </div>
                    <h3><a href="single.html" title="Colbún supera falla en Nehuenco y se reduce vulnerabilidad en el SIC" rel="contents">Colbún supera falla en Nehuenco y se reduce vulnerabilidad en el SIC</a></h3>
                </article>
            </section>
            <section class="column5 down-m" data-position="first">
                <article class="featured">
                  <a href="single.html" title="Escondida retoma proyecto de desalinización que frenó en 2009 e invertirá US$3.430 millones" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example02.jpg" alt="Escondida retoma proyecto de desalinización que frenó en 2009 e invertirá US$3.430 millones"/></a>
                  <div class="category-wrapp">
                        <h4 class="category"><a href="portadilla.html" title="ir a Minería" rel="contents">Minería</a></h4>
                        <span class="date">10/02/2013</span>
                  </div>
                  <h2><a href="single.html" title="Escondida retoma proyecto de desalinización que frenó en 2009 e invertirá US$3.430 millones" rel="contents">Escondida retoma proyecto de desalinización que frenó en 2009 e invertirá US$3.430 millones</a></h2>
                  <p>Consiste en la expansión de la planta de Coloso y además, completa las obras de la otrora denominada Fase V del yacimiento.<p>
                  <aside class="hide-on-phones">
                      <h4>Noticias Relacionadas</h4>
                      <ul>
                          <li><a href="single.html" title="SalmonChile: Mercado de EEUU sigue abierto para salmón nacional, excepto para Marine Harvest" rel="contents">SalmonChile: Mercado de EEUU sigue abierto para salmón nacional, excepto para Marine Harvest</a></li>
                          <li class="locked"><a href="single.html" title="EEUU Suspende ingreso de salmón de Marine Harvest" rel="contents">EEUU Suspende ingreso de salmón de Marine Harvest</a></li>
                      </ul>
                  </aside>    
                </article>
            </section>
            <aside class="column4 last down-m">
                    <div class="locked-message cfondo hide-on-phones">
                        <p>Accede a nuestros contenidos desde todos tus dispositivos</p>
                        <div class="price">
                            <p>desde</p>
                            <span class="price-value">$88.888</span>
                            <a href="#" title="Suscribirse" rel="help" class="btn dark-orange">Suscríbete Ahora</a>
                            <a class="details" href="#" title="Ver detalles de suscripciones" rel="help">Ver detalles</a>
                        </div>
                    </div>
                    <!-- Banner -->
                    <div class="banner-holder hide-on-phones">
                        <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-aside4.jpg" alt="banner" />
                    </div>
                    <!-- Fin Banner -->
            </aside>
        </section>
        <!-- Banner -->
        <div class="banner-holder full row hide-on-phones">
            <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-full.jpg" alt="banner" />
        </div>
        <!-- Fin Banner -->
        <!-- Fin Sección principal -->
        <!-- Sección Empresas, Economía, Política e Internacional -->
        <section class="bigbox bottom white-bg container oneColumnDeploy">
            <h2 class="section-title doble-border up" data-changeTitle="Secciones">Actualizaciones de Telecomunicaciones, Retail y Energía</h2><!-- Importante el atributo data-change para que cambie el rotulado en Smartphones -->
            <div class="row">
                <section class="column4 down-m" data-toggle="toggle"><!-- Atributo data-toggle permite la funcionalidad del despliegue de cajas desplegables en las secciones de los artículos para visualización en smartphone -->
                    <!-- Atribut deployArticles permite la funcionalidad de que al hacer tap en el elemento despliegue los artículos en visualización Smartphone, el atributo data-deploy permite definir si los articulos están desplegados o no -->
                    <h3 data-func="deployArticles" data-deploy="false"><a class="rotulo" href="portadilla.html" title="Ir a Telecomunicaciones" rel="contents">Telecomunicaciones<span class="roto-more">Más</span></a></h3><!-- Elemento span contiene la imágen con el ícono de despliegue en Samrtphones -->
                    <article class="box">
                        <a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example03.jpg" alt="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina"/></a>
                        <div class="category-wrapp">
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        <p>La operación debiera cerrarse entre fines de Septiembre y Octubre. Ayer, ambas partes firmaron el acuerdo</p>
                    </article>
                    <article class="box">
                        <div class="category-wrapp">
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="Sernapesca inicia investigación por químico prohibido en salmones de Marine Harvest" rel="contents">Sernapesca inicia investigación por químico prohibido en salmones de Marine Harvest</a></h3>
                    </article>
                    <article class="box">
                        <div class="category-wrapp">
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="Encuesta global reconoce a China como la próxima superpotencia mundial" rel="contents">Encuesta global reconoce a China como la próxima superpotencia mundial</a></h3>
                    </article>
                    <article class="box inline-article">
                        <h3><a href="single.html" title="Saieh quiere retomar las riendas: “Tengo la decisión de reintegrarme al directorio de SMU”" rel="contents">Saieh quiere retomar las riendas: “Tengo la decisión de reintegrarme al directorio de SMU”</a></h3>
                    </article>
                    <article class="box inline-article">
                        <h3><a href="single.html" title="Colbún supera falla en Nehuenco y se reduce vulnerabilidad en el SIC" rel="contents">Colbún supera falla en Nehuenco y se reduce vulnerabilidad en el SIC</a></h3>
                    </article>
                    <article class="box inline-article">
                        <h3><a href="single.html" title="Hites acuerda con Parque Arauco ser tienda ancla en mall de Chillán" rel="contents">Hites acuerda con Parque Arauco ser tienda ancla en mall de Chillán</a></h3>
                    </article>
                </section>
                <section class="column4 down-m" data-toggle="toggle"><!-- Clase down-m permite que la columna tome el ancho completo en visualización Smartphone -->
                    <h3 data-func="deployArticles" data-deploy="false"><a class="rotulo" href="portadilla.html" title="Ir a Telecomunicaciones" rel="contents">Retail<span class="roto-more">Más</span></a></h3>
                    <article class="box">
                        <a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example03.jpg" alt="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina"/></a>
                        <div class="category-wrapp">
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        <p>La operación debiera cerrarse entre fines de Septiembre y Octubre. Ayer, ambas partes firmaron el acuerdo</p>
                    </article>
                    <article class="box">
                        <div class="category-wrapp">
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="Sernapesca inicia investigación por químico prohibido en salmones de Marine Harvest" rel="contents">Sernapesca inicia investigación por químico prohibido en salmones de Marine Harvest</a></h3>
                    </article>
                    <article class="box">
                        <div class="category-wrapp">
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="Encuesta global reconoce a China como la próxima superpotencia mundial" rel="contents">Encuesta global reconoce a China como la próxima superpotencia mundial</a></h3>
                    </article>
                    <article class="box inline-article">
                        <h3><a href="single.html" title="Saieh quiere retomar las riendas: “Tengo la decisión de reintegrarme al directorio de SMU”" rel="contents">Saieh quiere retomar las riendas: “Tengo la decisión de reintegrarme al directorio de SMU”</a></h3>
                    </article>
                    <article class="box inline-article">
                        <h3><a href="single.html" title="Colbún supera falla en Nehuenco y se reduce vulnerabilidad en el SIC" rel="contents">Colbún supera falla en Nehuenco y se reduce vulnerabilidad en el SIC</a></h3>
                    </article>
                    <article class="box inline-article">
                        <h3><a href="single.html" title="Hites acuerda con Parque Arauco ser tienda ancla en mall de Chillán" rel="contents">Hites acuerda con Parque Arauco ser tienda ancla en mall de Chillán</a></h3>
                    </article>
                </section>
                <section class="column4 last down-m" data-toggle="toggle"><!-- Clase down-m permite que la columna tome el ancho completo en visualización Smartphone -->
                    <h3 data-func="deployArticles" data-deploy="false"><a class="rotulo" href="portadilla.html" title="Ir a Telecomunicaciones" rel="contents">Energía<span class="roto-more">Más</span></a></h3>
                    <article class="box">
                        <a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example03.jpg" alt="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina"/></a>
                        <div class="category-wrapp">
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        <p>La operación debiera cerrarse entre fines de Septiembre y Octubre. Ayer, ambas partes firmaron el acuerdo</p>
                    </article>
                    <article class="box">
                        <div class="category-wrapp">
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="Sernapesca inicia investigación por químico prohibido en salmones de Marine Harvest" rel="contents">Sernapesca inicia investigación por químico prohibido en salmones de Marine Harvest</a></h3>
                    </article>
                    <article class="box">
                        <div class="category-wrapp">
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="Encuesta global reconoce a China como la próxima superpotencia mundial" rel="contents">Encuesta global reconoce a China como la próxima superpotencia mundial</a></h3>
                    </article>
                    <article class="box inline-article">
                        <h3><a href="single.html" title="Saieh quiere retomar las riendas: “Tengo la decisión de reintegrarme al directorio de SMU”" rel="contents">Saieh quiere retomar las riendas: “Tengo la decisión de reintegrarme al directorio de SMU”</a></h3>
                    </article>
                    <article class="box inline-article">
                        <h3><a href="single.html" title="Colbún supera falla en Nehuenco y se reduce vulnerabilidad en el SIC" rel="contents">Colbún supera falla en Nehuenco y se reduce vulnerabilidad en el SIC</a></h3>
                    </article>
                    <article class="box inline-article">
                        <h3><a href="single.html" title="Hites acuerda con Parque Arauco ser tienda ancla en mall de Chillán" rel="contents">Hites acuerda con Parque Arauco ser tienda ancla en mall de Chillán</a></h3>
                    </article>
                </section>
                <!-- Banner -->
                <div class="banner-holder full row hide-on-phones">
                    <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-full.jpg" alt="banner">
                </div>
                <!-- Fin Banner -->
                <section class="column8 down-m">
                    <section class="inner-column4 down-m" data-toggle="toggle">
                        <h3 data-func="deployArticles" data-deploy="false"><a class="rotulo" href="portadilla.html" title="Ir a Transporte" rel="contents">Transporte<span class="roto-more">Más</span></a></h3>
                        <article class="box">
                            <div class="category-wrapp">
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        </article>
                        <article class="box">
                            <div class="category-wrapp">
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        </article>
                    </section>
                    <section class="inner-column4 last down-m" data-toggle="toggle">
                        <h3 data-func="deployArticles" data-deploy="false"><a class="rotulo" href="portadilla.html" title="Ir a Farmacéutica" rel="contents">Farmacéutica<span class="roto-more">Más</span></a></h3>
                        <article class="box">
                            <div class="category-wrapp">
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        </article>
                        <article class="box">
                            <div class="category-wrapp">
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        </article>
                    </section>
                    <section class="inner-column4 down-m" data-toggle="toggle">
                        <h3 data-func="deployArticles" data-deploy="false"><a class="rotulo" href="portadilla.html" title="Ir a Automóviles" rel="contents">Automóviles<span class="roto-more">Más</span></a></h3>
                        <article class="box">
                            <div class="category-wrapp">
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        </article>
                        <article class="box">
                            <div class="category-wrapp">
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        </article>
                    </section>
                    <section class="inner-column4 last down-m" data-toggle="toggle">
                        <h3 data-func="deployArticles" data-deploy="false"><a class="rotulo" href="portadilla.html" title="Ir a Servicios" rel="contents">Servicios<span class="roto-more">Más</span></a></h3>
                        <article class="box">
                            <div class="category-wrapp">
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        </article>
                        <article class="box">
                            <div class="category-wrapp">
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        </article>
                    </section>
                    <section class="inner-column4 down-m" data-toggle="toggle">
                        <h3 data-func="deployArticles" data-deploy="false"><a class="rotulo" href="portadilla.html" title="Ir a Minería" rel="contents">Minería<span class="roto-more">Más</span></a></h3>
                        <article class="box">
                            <div class="category-wrapp">
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        </article>
                        <article class="box">
                            <div class="category-wrapp">
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        </article>
                    </section>
                    <section class="inner-column4 last down-m" data-toggle="toggle">
                        <h3 data-func="deployArticles" data-deploy="false"><a class="rotulo" href="portadilla.html" title="Ir a Alimentos y Bebidas" rel="contents">Alimentos y Bebidas<span class="roto-more">Más</span></a></h3>
                        <article class="box">
                            <div class="category-wrapp">
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        </article>
                        <article class="box">
                            <div class="category-wrapp">
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        </article>
                    </section>
                    <section class="inner-column4 down-m hide-on-phones">
                        <h3><a class="rotulo" href="portadilla.html" title="Ir a Retail" rel="contents">Retail</a></h3>
                        <article class="box">
                            <div class="category-wrapp">
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        </article>
                        <article class="box">
                            <div class="category-wrapp">
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        </article>
                    </section>
                    <section class="inner-column4 last down-m hide-on-phones">
                        <h3><a class="rotulo" href="portadilla.html" title="Ir a Retail" rel="contents">Telecomunicaciones</a></h3>
                        <article class="box">
                            <div class="category-wrapp">
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        </article>
                        <article class="box">
                            <div class="category-wrapp">
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                        </article>
                    </section>
                    <section class="column12 down-m hide-on-phones">
                        <h3><a class="rotulo" href="portadilla.html" title="Ir a DF TV" rel="contents">DF TV</a></h3>
                        <div class="interior3 down-m">
                            <article class="box">
                                <a class="video-thumb thumb" href="single.html" title="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example01.jpg" alt="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”"></a>
                                <div class="category-wrapp">
                                    <h4 class="category"><a href="df-tv.html" title="ir a DF TV" rel="contents">DF TV | Entrevista</a></h4>
                                    <span class="date">10/02/2013</span>
                                </div>
                                <h3><a href="single.html" title="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM" rel="contents">Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”</a></h3>
                            </article>
                            <article class="box">
                                <a class="video-thumb thumb" href="single.html" title="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example01.jpg" alt="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”"></a>
                                <div class="category-wrapp">
                                    <h4 class="category"><a href="df-tv.html" title="ir a DF TV" rel="contents">DF TV | Entrevista</a></h4>
                                    <span class="date">10/02/2013</span>
                                </div>
                                <h3><a href="single.html" title="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM" rel="contents">Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”</a></h3>
                            </article>
                        </div>
                        <div class="interior9 last down-m">
                            <article class="box">
                              <a class="video-thumb thumb" href="entrevista.html" title="Entrevista" rel="contents"><img class="video-thumb" src="http://diariofinanciero.ida.cl/templates/default/images/examples/example02.jpg" alt="Loreto Silva, Ministra de Obras Públicas: “Hay que pensar en Vespucio Oriente como un proyecto integral"></a>
                              <div class="category-wrapp">
                                    <h4 class="category"><a href="entrevista.html" title="ir a Entrevistas" rel="contents">Entrevista</a></h4>
                                    <span class="date">10/02/2013</span>
                              </div>
                              <h2><a href="single.html" title="Loreto Silva, Ministra de Obras Públicas: “Hay que pensar en Vespucio Oriente como un proyecto integral" rel="contents">Loreto Silva, Ministra de Obras Públicas: “Hay que pensar en Vespucio Oriente como un proyecto integral</a></h2>
                              <p>La secretaría de Estado indicó que se está trabajando en el anteproyecto de esta autopista y sostuvo que se trata de un gran proyecto urbanístico Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                            </article>
                        </div>
                    </section>
                </section>
                <section class="column4 last down-m hide-on-phones">
                    <h3><a class="rotulo" href="portadilla.html" title="Ir a Market Data" rel="contents">Market Data</a></h3>
                    <div class="slider table-wrapp tab-panels">
                            <h3>Bolsa de Comercio de Santiago</h3>
                            <ul class="buttons-tab inline-list buttons-slide">
                                <li><button class="active" data-func="changeTab" data-slide="0" data-type="tabs">Mayores Alzas</button></li>
                                <li><button data-func="changeTab" data-slide="1" data-type="tabs">Mayores Bajas</button></li>
                                <li><button data-func="changeTab" data-slide="2" data-type="tabs">Más Transadas</button></li>
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
                                    <li data-index="1">
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
                                    <li data-index="2">
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
                            <div class="locked-message nom">
                                <p><a href="/" title="Ingresa a DF" rel="nofollow">Ingresa</a> o <a href="/" title="Regístrate a DF" rel="nofollow">Regístrate</a> para seguir tu <a href="/" title="Ingresa a tu Portafolio Personal" rel="nofollow">Portafolio personal</a></p>
                            </div>
                        </div>
                        <!-- Gráfico con Slider -->
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
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>BOVESPA</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li class="active" data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>IPSA</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>IBEX</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>NIKKEI</span>
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
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>BOVESPA</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li class="active" data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>IPSA</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>IBEX</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>NIKKEI</span>
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
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>BOVESPA</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li class="active" data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>IPSA</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>IBEX</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>NIKKEI</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Fin Gráfico sin Slider -->
                        <!-- Gráfico de Bolsas -->
                        <div class="table-wrapp tab-panels chart-options">
                            <h3>Bolsas</h3>
                            <h4>IPSA</h4>
                            <!-- Gráfico, dentro de este elemento debería generarse un gráfico -->
                            <div class="chart">
                                <img src="http://diariofinanciero.ida.cl/templates/default/images/examples/grafico.jpg" alt="gráfico">
                            </div>
                            <!-- Fin Gráfico -->
                            <ul class="chart-ul">
                                <li data-func="changeChart" >
                                    <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>BOVESPA</span>
                                    <span class="value">2.343.43</span>
                                </li>
                                <li class="active" data-func="changeChart">
                                    <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>IPSA</span>
                                    <span class="value">2.343.43</span>
                                </li>
                                <li data-func="changeChart">
                                    <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>IBEX</span>
                                    <span class="value">2.343.43</span>
                                </li>
                                <li data-func="changeChart">
                                    <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA"></span>NIKKEI</span>
                                    <span class="value">2.343.43</span>
                                </li>
                            </ul>
                        </div>
                        <!-- Fin Gráfico de Bolsas -->
                        <!-- Unidad de Inteligencia -->
                        <section class="box">
                            <h3><a class="rotulo" href="unidad-de-inteligencia.html" title="Ir a Unidad de Inteligencia" rel="contents">DF UI | Unidad de Inteligencia</a></h3>
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
                            <div class="locked box hide-on-tablets hide-on-desktop">
                                <h3>Descargar la aplicación <strong>DF Mercados</strong></h3>
                                <a href="/" title="Descargar en Google Play" rel="external" class="btn mac download">Android app<span>Google Play</span></a>
                                <a href="/" title="Descargar en App Store" rel="external" class="btn android download">Available on the <span>App Store</span></a>
                            </div>
                        </section>
                        <!-- Fin Unidad de Inteligencia -->
                </section>
                <!-- Banner -->
                <div class="banner-holder full row hide-on-phones">
                    <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-full.jpg" alt="banner">
                </div>
                <!-- Fin Banner -->
            </div>
        </section>
        <section class="row hide-on-tablets hide-on-desktop white-bg container">
            <div class="locked box">
                <h3>Descargar la aplicación <strong>DF Mercados</strong></h3>
                <a href="/" title="Descargar en Google Play" rel="external" class="btn mac download">Android app<span>Google Play</span></a>
                <a href="/" title="Descargar en App Store" rel="external" class="btn android download">Available on the <span>App Store</span></a>
            </div>
        </section>
<?php require_once 'footer.php'; ?>