<?php require_once 'header.php'; ?>
<!-- Sección principal -->
        <section class="row bigbox mobileSlider container"><!-- Importante la clase mobileSlider, ya que permite transformar los articulos marcados en su interior con el atributo dataToSlide, en un slider en la visualización de Smartphones -->
            <!-- Banners laterales -->
            <div class='banner-lateral left hide-on-phones hide-on-tablets'>
                <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-lateral.jpg" alt="banner" />
            </div>
            <div class='banner-lateral right hide-on-phones hide-on-tablets'>
                <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-lateral.jpg" alt="banner" />
            </div>
            <!-- Fin Banners laterales -->
            <!-- Sección Contingencia -->
        <section class="row contingencia table-wrapp">
            <h3>Cobertura Especial</h3>
            <article class="wrp">
                <h2>Gobierno investigará salmones prohibidos en EE.UU. y gremio solicita información a autoridades locales e internacionales</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                <!-- Slider de imágenes para articulo de contingencia -->
                <div class="cont-slider hide-on-phones">
                    <div class="slide">
                        <ul>
                            <li>
                               <a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/contingencia.jpg" alt="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina"></a>
                            </li>
                            <li>
                               <a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/contingencia.jpg" alt="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina"></a>
                            </li>
                            <li>
                               <a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/contingencia.jpg" alt="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina"></a>
                            </li>
                            <li>
                               <a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/contingencia.jpg" alt="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina"></a>
                            </li>
                        </ul>
                        <!-- Navegación del Slider -->
                        <div class="navigation-slide">
                            <button class="bullet prev" data-func="changeSlider">Anterior</button>
                            <div class="bullets-wrapp buttons-slide">
                                <button class="bullet round active" data-func="changeTab" data-slide="0" data-type="slider"></button>
                                <button class="bullet round" data-func="changeTab" data-slide="1" data-type="slider"></button>
                                <button class="bullet round" data-func="changeTab" data-slide="2" data-type="slider"></button>
                                <button class="bullet round" data-func="changeTab" data-slide="3" data-type="slider"></button>
                            </div>
                            <button class="bullet next" data-func="changeSlider">Siguiente</button>
                        </div>
                        <!-- Fin de la Navegación del Slider -->
                    </div>
                </div>
                <!-- Fin Slider de imágenes para articulo de contingencia -->
                <aside>
                    <h4>Seguimiento de la Noticia</h4>
                    <ul>
                        <li><a href="single.html" title="SalmonChile: Mercado de EEUU sigue abierto para salmón nacional, excepto para Marine Harvest" rel="contents">SalmonChile: Mercado de EEUU sigue abierto para salmón nacional, excepto para Marine Harvest</a></li>
                        <li class="locked"><a href="single.html" title="SalmonChile: Mercado de EEUU sigue abierto para salmón nacional, excepto para Marine Harvest" rel="contents">SalmonChile: Mercado de EEUU sigue abierto para salmón nacional, excepto para Marine Harvest</a></li>
                    </ul>
                </aside>
                <aside>
                    <article class="box">
                        <a class="video-thumb thumb" href="single.html" title="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example01.jpg" alt="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”"></a>
                        <div class="category-wrapp">
                            <h4 class="category"><a href="df-tv.html" title="ir a DF TV" rel="contents">DF TV | Entrevista</a></h4>
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM" rel="contents">Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”</a></h3>
                    </article>
                </aside>
            </article>
        </section>
        <!-- Fin Sección Contingencia-->
            <section class="column3">
                <article class="box" data-toSlide="true" data-imageToSlide="http://diariofinanciero.ida.cl/templates/default/images/examples/example02.jpg"><!-- Articulo marcado con el atributo data-toSlide que permitirá desplegarlo en un slider para la visualización Smartphones, el atributo imageToSlide es la ruta a la imagen que se desplegará en el slider, en caso de que no la tuviera -->
                    <div class="category-wrapp">
                        <h4 class="category"><a href="mercados.html" title="ir a Mercados" rel="contents">Mercados</a></h4>
                        <span class="date">10/02/2013</span>
                    </div>
                    <h3><a href="single.html" title="Bolsa local sube más de un 1% y sector salmón lidera ganancias" rel="contents">Bolsa local sube más de un 1% y sector salmón lidera ganancias</a></h3>
                </article>
                <article class="box" data-toSlide="true" data-imageToSlide="http://diariofinanciero.ida.cl/templates/default/images/examples/example02.jpg"><!-- Articulo marcado con el atributo data-toSlide que permitirá desplegarlo en un slider para la visualización Smartphones, el atributo imageToSlide es la ruta a la imagen que se desplegará en el slider, en caso de que no la tuviera -->
                    <div class="category-wrapp">
                        <h4 class="category"><a href="mercados.html" title="ir a Mercados" rel="contents">Mercados</a></h4>
                        <span class="date">10/02/2013</span>
                    </div>
                    <h3><a href="single.html" title="Bolsa local sube más de un 1% y sector salmón lidera ganancias" rel="contents">Bolsa local sube más de un 1% y sector salmón lidera ganancias</a></h3>
                </article>
                <article class="box" data-toSlide="true"><!-- Articulo marcado con el atributo data-toSlide que permitirá desplegarlo en un slider para la visualización Smartphones -->
                    <a class="video-thumb thumb" href="single.html" title="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example01.jpg" alt="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”"/></a>
                    <div class="category-wrapp">
                        <h4 class="category"><a href="df-tv.html" title="ir a DF TV" rel="contents">DF TV | Entrevista</a></h4>
                        <span class="date">10/02/2013</span>
                    </div>
                    <h3><a href="single.html" title="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM" rel="contents">Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”</a></h3>
                </article>
                <article class="locked">
                  <div class="category-wrapp">
                        <h4 class="category"><a href="unidad-de-inteligencia.html" title="ir a Unidad de inteligencia" rel="contents">Unidad de Inteligencia</a></h4>
                        <span class="date">10/02/2013</span>
                  </div>
                  <h3><a href="single.html" title="Utilidades de Microsoft rozan los US$5.000 millones entre abril y junio" rel="contents">Utilidades de Microsoft rozan los US$5.000 millones entre abril y junio</a></h3>
                </article>
            </section>
            <section class="column5">
                <article class="featured doble-border" data-toSlide="true"><!-- Articulo marcado con el atributo data-toSlide que permitirá desplegarlo en un slider para la visualización Smartphones -->
                  <a href="single.html" title="Gobierno investigará salmones prohibidos en EE.UU. y gremio solicita información a autoridades locales e internacionales" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example02.jpg" alt="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”"/></a>
                  <div class="category-wrapp">
                        <h4 class="category"><a href="empresas.html" title="ir a Empresas" rel="contents">Empresas</a></h4>
                        <span class="date">10/02/2013</span>
                  </div>
                  <h2><a href="single.html" title="Gobierno investigará salmones prohibidos en EE.UU. y gremio solicita información a autoridades locales e internacionales" rel="contents">Gobierno investigará salmones prohibidos en EE.UU. y gremio solicita información a autoridades locales e internacionales</a></h2>
                  <p>Sernapesca pidió antecedentes a la FDA. SalmonChile, en tanto, aclaró que el mercado de EE.UU. sigue abierto para salmón nacional, menos para Marine Harvest.<p>
                  <aside class="hide-on-phones">
                      <h4>Noticias Relacionadas</h4>
                      <ul>
                          <li><a href="single.html" title="SalmonChile: Mercado de EEUU sigue abierto para salmón nacional, excepto para Marine Harvest" rel="contents">SalmonChile: Mercado de EEUU sigue abierto para salmón nacional, excepto para Marine Harvest</a></li>
                          <li class="locked"><a href="single.html" title="EEUU Suspende ingreso de salmón de Marine Harvest" rel="contents">EEUU Suspende ingreso de salmón de Marine Harvest</a></li>
                      </ul>
                  </aside>    
                </article>
                <div class="locked-message hide-on-phones">
                    <p>Para acceder a una mayor cobertura de las noticias que mueven al mundo financiero</p>
                    <a href="#" title="Suscribirse" rel="help" class="btn dark-orange">Suscríbete Ahora</a>
                </div>
            </section>
            <aside class="column4 last">
                <!-- Banner -->
                <div class="banner-holder">
                    <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-aside.jpg" alt="banner" />
                </div>
                <!-- Fin Banner -->
                <div class="last-minute doble-border up">
                    <header>
                        <h4 class="category">Último minuto</h4>
                        <span class="date">20/07/2013 | 16:15</span>
                    </header>
                    <div class="article-list">
                        <article>
                            <time>16:15</time>
                            <div class="content">
                                <p>Bolsas de Europa cierran con cifras mixtas en jornada sin grandes referencias "macro".</p>
                            </div>
                        </article>
                        <article>
                            <time>15:15</time>
                            <div class="content">
                                <p>La Moneda acepta la renuncia de Matthei y reitera solicitud de unidad en la Alianza</p>
                            </div>
                        </article>
                        <article>
                            <time>14:05</time>
                            <div class="content">
                               <p>Rajoy irá al Congreso para aclarar supuesto caso de corrupción en su partido</p> 
                            </div>
                        </article>
                        <article>
                            <time>14:05</time>
                            <div class="content">
                                <p>Consumo de bebidas refrescantes crece 2,9% en Chile durante el primer semestre</p>
                            </div>
                        </article>
                        <article class="auspicio">
                            <time>14:05</time>
                            <div class="content">
                                <h3>Matthei inicia campaña: incluiremos "mucha gente que nunca se ha metido en política"</h3>
                                <p>Los avances fueron liderados por el FTSE Mib (0,68%), mientras que las caídas las encabezó el FTSE 100 (-0,11%).</p>
                            </div>
                            <img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example03.png" alt="Banco Itaú" />
                        </article>
                        <article>
                            <time>14:05</time>
                            <div class="content">
                               <p>Rajoy irá al Congreso para aclarar supuesto caso de corrupción en su partido</p> 
                            </div>
                        </article>
                        <article>
                            <time>14:05</time>
                            <div class="content">
                                <p>La Moneda acepta la renuncia de Matthei y reitera solicitud de unidad en la Alianza</p>
                            </div>
                        </article>
                    </div>
                </div>
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
            <h2 class="section-title doble-border up hide-on-phones">Actualizaciones de Empresas, Economía, Política e Internacional</h2>
            <div class="row">
                <div class="column8 down-m">
                    <section class="inner-column4 down-m"><!-- Clase down-m permite que la columna tome el ancho completo en visualización Smartphone -->
                        <h3><a class="rotulo" href="empresas.html" title="Ir a Empresas" rel="contents">Empresas</a></h3>
                        <article class="box">
                            <a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example03.jpg" alt="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina"/></a>
                            <div class="category-wrapp">
                                <h4 class="category"><a href="retail.html" title="ir a Mercados" rel="contents">Retail</a></h4>
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                            <p>La operación debiera cerrarse entre fines de Septiembre y Octubre. Ayer, ambas partes firmaron el acuerdo</p>
                        </article>
                        <article class="box doble-border">
                            <div class="category-wrapp">
                                <h4 class="category"><a href="banca.html" title="ir a Banca" rel="contents">Banca / Servicios Financieros</a></h4>
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Sernapesca inicia investigación por químico prohibido en salmones de Marine Harvest" rel="contents">Sernapesca inicia investigación por químico prohibido en salmones de Marine Harvest</a></h3>
                            <p>SalmonChile también solicitó información a la empresa con respecto a las trazas de Cristal Violeta encontradas en un contenedor en EEUU.</p>
                        </article>
                        <div class="tags-wrapp hide-on-phones">
                            <p>Más sobre:
                                <a href="tags.html" title="ver artículos relacionados a Commodities" rel="tag">Commodities,</a> 
                                <a href="tags.html" title="ver artículos relacionados a Renta Fija" rel="tag">Renta Fija,</a> 
                                <a href="tags.html" title="ver artículos relacionados a Divisas" rel="tag">Divisas,</a> 
                                <a href="tags.html" title="ver artículos relacionados a Finanzas personales" rel="tag">Finanzas personales,</a> 
                                <a href="tags.html" title="ver artículos relacionados a Mercado en acción" rel="tag">Mercado en acción,</a> </p>
                        </div>
                    </section>

                    <section class="inner-column4 last down-m"><!-- Clase down-m permite que la columna tome el ancho completo en visualización Smartphone -->
                        <h3><a class="rotulo" href="economia.html" title="Ir a Economía y Política" rel="contents">Economía y Política</a></h3>
                        <article class="box">
                            <div class="category-wrapp">
                                <h4 class="category"><a href="regulacion.html" title="ir a Regulación" rel="contents">Regulación</a></h4>
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Gobierno ajusta cambio a INE autónomo para precisas funciones y aumento de recursos" rel="contents">Gobierno ajusta cambio a INE autónomo para precisas funciones y aumento de recursos</a></h3>
                            <p>Las conversaciones se están desarrollando entre el ente estadísticos y el Ministerio de Economía, precisó el subsecretario de esa cartera, Tomás Flores.</p>
                        </article>
                        <article class="box">
                            <div class="category-wrapp">
                                <h4 class="category"><a href="comercio-exterior.html" title="ir a Comercio Exterior" rel="contents">Comercio Exterior</a></h4>
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Alianza posterga decisión de candidatos para buscar unidad" rel="contents">Alianza posterga decisión de candidatos para buscar unidad</a></h3>
                            <p>Las conversaciones se están desarrollando entre el ente estadísticos y el Ministerio de Economía, precisó el subsecretario de esa cartera, Tomás Flores.</p>
                        </article>
                        <article class="box doble-border">
                            <div class="category-wrapp">
                                <h4 class="category"><a href="legislacion.html" title="ir a Legislación" rel="contents">Legislación</a></h4>
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Allamand: “En los próximos días voy a dar a conocer mi posición”" rel="contents">Allamand: “En los próximos días voy a dar a conocer mi posición”</a></h3>
                            <p>“tengo que hablar con mucha gente. Tengo que hablar con la directiva de Renovación, con gente independiente”, sostuvo a su llegada al país.</p>
                        </article>
                        <div class="tags-wrapp hide-on-phones">
                            <p>Más sobre:
                                <a href="tags.html" title="ver artículos relacionados a Commodities" rel="tag">Commodities,</a> 
                                <a href="tags.html" title="ver artículos relacionados a Renta Fija" rel="tag">Renta Fija,</a> 
                                <a href="tags.html" title="ver artículos relacionados a Divisas" rel="tag">Divisas,</a> 
                                <a href="tags.html" title="ver artículos relacionados a Finanzas personales" rel="tag">Finanzas personales,</a> 
                                <a href="tags.html" title="ver artículos relacionados a Mercado en acción" rel="tag">Mercado en acción,</a> </p>
                        </div>
                    </section>
                    <!-- Banner -->
                    <div class="banner-holder hide-on-phones">
                        <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-full2.jpg" alt="banner" />
                    </div>
                    <!-- Fin Banner -->
                </div>
                <section class="column4 last down-m"><!-- Clase down-m permite que la columna tome el ancho completo en visualización Smartphone -->
                    <h3><a class="rotulo" href="internacional.html" title="Ir a EInternacional" rel="contents">Internacional</a></h3>
                    <article class="box">
                        <div class="category-wrapp">
                            <h4 class="category"><a href="south-china.html" title="ir a South China" rel="contents">South China</a></h4>
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="Detroit se avoge a protección en la mayor bancarrota municipal en la historia de EEUU" rel="contents">Detroit se avoge a protección en la mayor bancarrota municipal en la historia de EEUU</a></h3>
                        <p>Por otra parte, Moody’s rebajó la calificación de crédito de Chicago debido a los problemas de su desfinanciado...</p>
                    </article>
                    <article class="box doble-border">
                        <div class="category-wrapp">
                            <h4 class="category"><a href="ft-espanol.html" title="ir a FT Español" rel="contents">FT Español</a></h4>
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="Encuesta global reconoce a China como la próxima superpotencia mundial" rel="contents">Encuesta global reconoce a China como la próxima superpotencia mundial</a></h3>
                        <p>Sin embargo, sólo la mitad de las naciones encuestadas tiene una visión favorable del país asiático</p>
                    </article>
                    <div class="tags-wrapp hide-on-phones">
                        <p>Más sobre:
                            <a href="tags.html" title="ver artículos relacionados a Commodities" rel="tag">Commodities,</a> 
                            <a href="tags.html" title="ver artículos relacionados a Renta Fija" rel="tag">Renta Fija,</a> 
                            <a href="tags.html" title="ver artículos relacionados a Divisas" rel="tag">Divisas,</a> 
                            <a href="tags.html" title="ver artículos relacionados a Finanzas personales" rel="tag">Finanzas personales,</a> 
                            <a href="tags.html" title="ver artículos relacionados a Mercado en acción" rel="tag">Mercado en acción,</a> </p>
                    </div>
                    <!-- Banner -->
                    <div class="banner-holder hide-on-phones">
                        <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-aside2.jpg" alt="banner" />
                    </div>
                    <!-- Fin Banner -->
                </section>
            </div>
        </section>
        <!-- Fin Sección Empresas, Economía, Política e Internacional -->
        <!-- Sección Mercados y Market Data -->
        <section class="bigbox bottom oneColumnDeploy">
            <h2 class="section-title doble-border up hide-on-phones">Informacion de Mercados y Market Data</h2>
            <div class="row container">
                <section class="column4 down-m">
                    <h3><a class="rotulo" href="mercados.html" title="Ir a Mercados" rel="contents">Mercados</a></h3>
                    <article class="box">
                        <div class="category-wrapp">
                            <h4 class="category"><a href="commodities.html" title="ir a Commodities" rel="contents">Commodities</a></h4>
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="SVS solicita a compañias de seguros informar respecto de contratos de reaseguro en exterior" rel="contents">SVS solicita a compañias de seguros informar respecto de contratos de reaseguro en exterior</a></h3>
                        <p>Medida tendría relación con nueva normativa del SII sobre operaciones con partes relacionadas en el extranjero.</p>
                    </article>
                    <article class="box">
                        <div class="category-wrapp">
                            <h4 class="category"><a href="bolsa.html" title="ir a Bolsa" rel="contents">Bolsa</a></h4>
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="El IPSA retrocede casi 2% en jornada negativa para las bolsas del globo" rel="contents">El IPSA retrocede casi 2% en jornada negativa para las bolsas del globo</a></h3>
                        <p>SalmonChile también solicitó información a la empresa con respecto a las trazas de Cristal violeta.</p>
                    </article>
                    <article class="box doble-border">
                        <div class="category-wrapp">
                            <h4 class="category"><a href="finanzas.html" title="ir a Finanzas Personales" rel="contents">Finanzas Personales</a></h4>
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="Wall Street cierra con nuevo récord del S&P y Microsoft cae más de 11% tras resultados" rel="contents">Wall Street cierra con nuevo récord del S&P y Microsoft cae más de 11% tras resultados</a></h3>
                        <p>SalmonChile también solicitó información a la empresa con respecto a las trazas de Cristal violeta.</p>
                    </article>
                    <div class="tags-wrapp hide-on-phones">
                        <p>Más sobre:
                            <a href="tags.html" title="ver artículos relacionados a Commodities" rel="tag">Commodities,</a> 
                            <a href="tags.html" title="ver artículos relacionados a Renta Fija" rel="tag">Renta Fija,</a> 
                            <a href="tags.html" title="ver artículos relacionados a Divisas" rel="tag">Divisas,</a> 
                            <a href="tags.html" title="ver artículos relacionados a Finanzas personales" rel="tag">Finanzas personales,</a> 
                            <a href="tags.html" title="ver artículos relacionados a Mercado en acción" rel="tag">Mercado en acción,</a> </p>
                    </div>
                    <div class="banner-holder hide-on-tablets hide-on-desktop">
                        <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-aside.jpg" alt="banner">
                    </div>
                </section>
                <section class="column8 last hide-on-phones">
                    <h3><a class="rotulo" href="market-data.html" title="Ir a EMarket Data" rel="contents">Market Data</a></h3>
                    <div class="inner-column4">
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
                                    <li>
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
                                    <li>
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
                                    <li>
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
                        <div class="table-wrapp tab-panels chart-options">
                            <h3>Bolsas</h3>
                            <h4>IPSA</h4>
                            <!-- Gráfico, dentro de este elemento debería generarse un gráfico -->
                            <div class="chart">
                                <img src="http://diariofinanciero.ida.cl/templates/default/images/examples/grafico.jpg" alt="gráfico" />
                            </div>
                            <!-- Fin Gráfico -->
                            <ul class="chart-ul">
                                <li data-func="changeChart">
                                    <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" /></span>BOVESPA</span>
                                    <span class="value">2.343.43</span>
                                </li>
                                <li class="active" data-func="changeChart">
                                    <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" /></span>IPSA</span>
                                    <span class="value">2.343.43</span>
                                </li>
                                <li data-func="changeChart">
                                    <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" /></span>IBEX</span>
                                    <span class="value">2.343.43</span>
                                </li>
                                <li data-func="changeChart">
                                    <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" /></span>NIKKEI</span>
                                    <span class="value">2.343.43</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner-column4 last">
                        <div class="locked box">
                            <h3>Descargar la aplicación <strong>DF Mercados</strong></h3>
                            <a href="/" title="Descargar en Google Play" rel="external" class="btn mac download">Android app<span>Google Play</span></a>
                            <a href="/" title="Descargar en App Store" rel="external" class="btn android download">Available on the <span>App Store</span></a>
                        </div>
                        <div class="slider table-wrapp tab-panels chart-options">
                            <h3>Índices</h3>
                            <ul class="buttons-tab inline-list buttons-slide">
                                <li><button class="active" data-func="changeTab" data-slide="0" data-type="tabs">Monedas</button></li>
                                <li><button data-func="changeTab" data-slide="1" data-type="tabs">Commodities</button></li>
                                <li><button data-func="changeTab" data-slide="2" data-type="tabs">Indicadores</button></li>
                            </ul>
                            <div class="slide-tabs">
                                <ul class="tabs">
                                    <li>
                                        <h4>Euro EUR/USD</h4>
                                        <!-- Gráfico, dentro de este elemento debería generarse un gráfico -->
                                        <div class="chart">
                                            <img src="http://diariofinanciero.ida.cl/templates/default/images/examples/grafico.jpg" alt="gráfico" />
                                        </div>
                                        <!-- Fin Gráfico -->
                                        <ul class="chart-ul">
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" /></span>BOVESPA</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li class="active" data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" /></span>IPSA</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" /></span>IBEX</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" /></span>NIKKEI</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Euro EUR/USD</h4>
                                        <!-- Gráfico, dentro de este elemento debería generarse un gráfico -->
                                        <div class="chart">
                                            <img src="http://diariofinanciero.ida.cl/templates/default/images/examples/grafico.jpg" alt="gráfico" />
                                        </div>
                                        <!-- Fin Gráfico -->
                                        <ul class="chart-ul">
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" /></span>BOVESPA</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li class="active" data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" /></span>IPSA</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" /></span>IBEX</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" /></span>NIKKEI</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <h4>Euro EUR/USD</h4>
                                        <!-- Gráfico, dentro de este elemento debería generarse un gráfico -->
                                        <div class="chart">
                                            <img src="http://diariofinanciero.ida.cl/templates/default/images/examples/grafico.jpg" alt="gráfico" />
                                        </div>
                                        <!-- Fin Gráfico -->
                                        <ul class="chart-ul">
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" /></span>BOVESPA</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li class="active" data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" /></span>IPSA</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" /></span>IBEX</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                            <li data-func="changeChart">
                                                <span class="title"><span class="more-image"><img src="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/iconos/more.png" alt="Ver BOVESPA" /></span>NIKKEI</span>
                                                <span class="value">2.343.43</span>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <!-- Fin Sección Mercados y Market Data -->
        <!-- Sección Tendencia y Opinión -->
        <section class="bigbox bottom white-bg oneColumnDeploy container">
            <h2 class="section-title doble-border up hide-on-phones">Actualizaciones de Tendencia y Opinión</h2>
            <div class="row">
                <section class="column8 down-m">
                    <h3><a class="rotulo" href="tendencia.html" title="Ir a Tendencia" rel="contents">Tendencia</a></h3>
                    <div class="inner-column4 down-m">
                        <article class="box">
                            <div class="category-wrapp">
                                <h4 class="category"><a href="motores.html" title="ir a Finanzas Personales" rel="contents">Motores</a></h4>
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents">Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina</a></h3>
                            <p>La operación debiera cerrarse entre fines de Septiembre u Octubre. Ayer, ambas partes firmaron el acuerdo.</p>
                        </article>
                        <article class="box doble-border">
                            <div class="category-wrapp">
                                <h4 class="category"><a href="tecnologia.html" title="ir a Finanzas Personales" rel="contents">Tecnología</a></h4>
                                <span class="date">10/02/2013</span>
                            </div>
                            <h3><a href="single.html" title="Sernapesca inicia investihgación por químico prohibido en salmones de Marine Harvest" rel="contents">Sernapesca inicia investihgación por químico prohibido en salmones de Marine Harvest</a></h3>
                            <p>SalmonChile también solicitó información a la empresa con respecto a las trazas de Cristal violeta.</p>
                        </article>
                        <div class="tags-wrapp hide-on-phones">
                            <p>Más sobre:
                                <a href="tags.html" title="ver artículos relacionados a Commodities" rel="tag">Commodities,</a> 
                                <a href="tags.html" title="ver artículos relacionados a Renta Fija" rel="tag">Renta Fija,</a> 
                                <a href="tags.html" title="ver artículos relacionados a Divisas" rel="tag">Divisas,</a> 
                                <a href="tags.html" title="ver artículos relacionados a Finanzas personales" rel="tag">Finanzas personales,</a> 
                                <a href="tags.html" title="ver artículos relacionados a Mercado en acción" rel="tag">Mercado en acción,</a> </p>
                        </div>
                    </div>
                    <div class="inner-column4 last hide-on-phones">
                        <!-- Slider -->
                        <div class="slide table-wrapp">
                            <ul>
                                <li>
                                   <article class="box">
                                        <a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example03.jpg" alt="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina"></a>
                                        <div class="box-wrapp">
                                            <h4 class="category"><a href="tecnologia.html" title="ir a Mercados" rel="contents">Destacado en tecnología</a></h4>
                                            <h3><a href="single.html" title="Gobierno investigará salmones prohibidos en EE.UU. y gremio solicita información a autoridades locales e internacionales" rel="contents">Gobierno investigará salmones prohibidos en EE.UU. y gremio solicita información a autoridades locales e internacionales</a></h3>
                                            <p>Sernapesca pidió antecedentes a la FDA. SalmonChile, en tanto, aclaró que el mercado de EE.UU. sigue abierto para salmón nacional, menos para Marine Harvest.</p>
                                        </div>
                                   </article> 
                                </li>
                                <li>
                                   <article class="box">
                                        <a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example03.jpg" alt="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina"></a>
                                        <div class="box-wrapp">
                                            <h4 class="category"><a href="tecnologia.html" title="ir a Mercados" rel="contents">Destacado en tecnología</a></h4>
                                            <h3><a href="single.html" title="Gobierno investigará salmones prohibidos en EE.UU. y gremio solicita información a autoridades locales e internacionales" rel="contents">Gobierno investigará salmones prohibidos en EE.UU. y gremio solicita información a autoridades locales e internacionales</a></h3>
                                            <p>Sernapesca pidió antecedentes a la FDA. SalmonChile, en tanto, aclaró que el mercado de EE.UU. sigue abierto para salmón nacional, menos para Marine Harvest.</p>
                                        </div>
                                   </article> 
                                </li>
                                <li>
                                   <article class="box">
                                        <a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example03.jpg" alt="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina"></a>
                                        <div class="box-wrapp">
                                            <h4 class="category"><a href="tecnologia.html" title="ir a Mercados" rel="contents">Destacado en tecnología</a></h4>
                                            <h3><a href="single.html" title="Gobierno investigará salmones prohibidos en EE.UU. y gremio solicita información a autoridades locales e internacionales" rel="contents">Gobierno investigará salmones prohibidos en EE.UU. y gremio solicita información a autoridades locales e internacionales</a></h3>
                                            <p>Sernapesca pidió antecedentes a la FDA. SalmonChile, en tanto, aclaró que el mercado de EE.UU. sigue abierto para salmón nacional, menos para Marine Harvest.</p>
                                        </div>
                                   </article> 
                                </li>
                                <li>
                                   <article class="box">
                                        <a href="single.html" title="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example03.jpg" alt="Nutresa compra a Tresmontes Lucchetti por US$758 millones y deja atrás a CCU y Andina"></a>
                                        <div class="box-wrapp">
                                            <h4 class="category"><a href="tecnologia.html" title="ir a Mercados" rel="contents">Destacado en tecnología</a></h4>
                                            <h3><a href="single.html" title="Gobierno investigará salmones prohibidos en EE.UU. y gremio solicita información a autoridades locales e internacionales" rel="contents">Gobierno investigará salmones prohibidos en EE.UU. y gremio solicita información a autoridades locales e internacionales</a></h3>
                                            <p>Sernapesca pidió antecedentes a la FDA. SalmonChile, en tanto, aclaró que el mercado de EE.UU. sigue abierto para salmón nacional, menos para Marine Harvest.</p>
                                        </div>
                                   </article> 
                                </li>
                            </ul>
                            <!-- Navegación del Slider -->
                            <div class="navigation-slide">
                                <button class="bullet prev" data-func="changeSlider">Anterior</button>
                                <div class="bullets-wrapp buttons-slide">
                                    <button class="bullet round active" data-func="changeTab" data-slide="0" data-type="slider"></button>
                                    <button class="bullet round" data-func="changeTab" data-slide="1" data-type="slider"></button>
                                    <button class="bullet round" data-func="changeTab" data-slide="2" data-type="slider"></button>
                                    <button class="bullet round" data-func="changeTab" data-slide="3" data-type="slider"></button>
                                </div>
                                <button class="bullet next" data-func="changeSlider">Siguiente</button>
                            </div>
                            <!-- Fin de la Navegación del Slider -->
                        </div>
                        <!-- Fin Slider -->
                    </div>
                </section>
                <section class="column4 last down-m">
                    <h3><a class="rotulo" href="opinion.html" title="Ir a Opinion" rel="contents">Opinión</a></h3>
                    <article class="box">
                        <div class="category-wrapp">
                            <h4 class="category"><a href="editorial.html" title="ir a Bolsa" rel="contents">Editorial</a></h4>
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="SVS solicita a compañías de seguros informar respecto de contratos de reaseguro en exterior" rel="contents">SVS solicita a compañías de seguros informar respecto de contratos de reaseguro en exterior</a></h3>
                    </article>
                    <article class="box">
                        <div class="category-wrapp">
                            <h4 class="category"><a href="editorial.html" title="ir a Bolsa" rel="contents">Editorial</a></h4>
                            <span class="date">10/02/2013</span>
                        </div>
                        <h3><a href="single.html" title="El IPSA retrocede casi 2% en jornada negativa para las bolsas del globo" rel="contents">El IPSA retrocede casi 2% en jornada negativa para las bolsas del globo</a></h3>
                    </article>
                    <aside class="box doble-border hide-on-phones">
                        <div class="table-wrapp">
                            <div class="wrp">
                                <h4 class="category"><a href="editorial.html" title="ir a Bolsa" rel="contents">Columnistas</a></h4>
                                <p>Estos son algunos de nuestros columnistas de Diario Financiero. <a href="columnistas.html" title="Conoce el listado completo de los columnistas" rel="contents">Conoce el listado completo</a></p>
                            </div>
                            <div class="top-border wrp">
                                <article class="author-list">
                                    <div class="round-image">
                                        <a href="author.html" title="Alberto Etchegaray" rel="author"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/author.jpg" alt="Alberto Etchegaray" /></a>
                                    </div>
                                    <div class="author-meta">
                                        <h3><a href="author.html" title="Alberto Etchegaray" rel="author">Alberto Etchegaray</a></h3>
                                        <div class="meta-data">Abogado, 24 columnas</div>
                                    </div>
                                </article>
                                <article class="author-list">
                                    <div class="round-image">
                                        <a href="author.html" title="Alberto Etchegaray" rel="author"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/author.jpg" alt="Alberto Etchegaray" /></a>
                                    </div>
                                    <div class="author-meta">
                                        <h3><a href="author.html" title="Alberto Etchegaray" rel="author">Alberto Etchegaray</a></h3>
                                        <div class="meta-data">Abogado, 24 columnas</div>
                                    </div>
                                </article>
                                <article class="author-list">
                                    <div class="round-image">
                                        <a href="author.html" title="Alberto Etchegaray" rel="author"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/author.jpg" alt="Alberto Etchegaray" /></a>
                                    </div>
                                    <div class="author-meta">
                                        <h3><a href="author.html" title="Alberto Etchegaray" rel="author">Alberto Etchegaray</a></h3>
                                        <div class="meta-data">Abogado, 24 columnas</div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </aside>
                    <div class="tags-wrapp hide-on-phones">
                        <p>Más sobre:
                            <a href="tags.html" title="ver artículos relacionados a Commodities" rel="tag">Commodities,</a> 
                            <a href="tags.html" title="ver artículos relacionados a Renta Fija" rel="tag">Renta Fija,</a> 
                            <a href="tags.html" title="ver artículos relacionados a Divisas" rel="tag">Divisas,</a>
                    </div>
                </section>
                <!-- Banner-->
                <div class="banner-holder full row hide-on-phones">
                    <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-full3.jpg" alt="banner">
                </div>
                <!-- Fin Banner-->
            </div>
        </section>
        <!-- Fin Sección Tendencia y Opinión -->
        <!-- Sección Multimedia, DF TV y Unidad de Inteligencia -->
        <section class="bigbox bottom container">
            <h2 class="section-title doble-border up hide-on-phones">Actualizaciones de Multimedia, DF TV y Unidad de Inteligencia</h2>
            <div class="row">
                <section class="column3 hide-on-phones">
                    <h3><a class="rotulo" href="multimedia.html" title="Ir a Multimedia" rel="contents">Multimedia</a></h3>
                    <div class="table-wrapp">
                        <!-- Slider -->
                        <div class="slide">
                            <ul>
                                <li>
                                    <article>
                                        <a class="foto-thumb thumb" href="single.html" title="Izquierdo: “Golpe de estado en Egipto" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example05.jpg" alt="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”"></a>
                                        <div class="wrp">
                                            <div class="category-wrapp">
                                                <h4 class="category"><a href="foto.html" title="ir a DF TV" rel="contents">Foto</a></h4>
                                                <span class="date">10/02/2013</span>
                                            </div>
                                            <h3><a href="single.html" title="Golpe de estado en Egipto" rel="contents">Golpe de estado en Egipto</a></h3>
                                        </div>
                                    </article>
                                    <article class="top-border">
                                        <a class="infografia-thumb thumb" href="single.html" title="Energía Geotérmica" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example06.jpg" alt="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”"></a>
                                        <div class="wrp">
                                            <div class="category-wrapp">
                                                <h4 class="category"><a href="infografia.html" title="ir a DF TV" rel="contents">Infografía</a></h4>
                                                <span class="date">10/02/2013</span>
                                            </div>
                                            <h3><a href="single.html" title="Energía Geotérmica" rel="contents">Energía Geotérmica</a></h3>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article>
                                        <a class="foto-thumb thumb" href="single.html" title="Izquierdo: “Golpe de estado en Egipto" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example05.jpg" alt="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”"></a>
                                        <div class="wrp">
                                            <div class="category-wrapp">
                                                <h4 class="category"><a href="foto.html" title="ir a DF TV" rel="contents">Foto</a></h4>
                                                <span class="date">10/02/2013</span>
                                            </div>
                                            <h3><a href="single.html" title="Golpe de estado en Egipto" rel="contents">Golpe de estado en Egipto</a></h3>
                                        </div>
                                    </article>
                                    <article class="top-border">
                                        <a class="infografia-thumb thumb" href="single.html" title="Energía Geotérmica" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example06.jpg" alt="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”"></a>
                                        <div class="wrp">
                                            <div class="category-wrapp">
                                                <h4 class="category"><a href="infografia.html" title="ir a DF TV" rel="contents">Infografía</a></h4>
                                                <span class="date">10/02/2013</span>
                                            </div>
                                            <h3><a href="single.html" title="Energía Geotérmica" rel="contents">Energía Geotérmica</a></h3>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article>
                                        <a class="foto-thumb thumb" href="single.html" title="Izquierdo: “Golpe de estado en Egipto" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example05.jpg" alt="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”"></a>
                                        <div class="wrp">
                                            <div class="category-wrapp">
                                                <h4 class="category"><a href="foto.html" title="ir a DF TV" rel="contents">Foto</a></h4>
                                                <span class="date">10/02/2013</span>
                                            </div>
                                            <h3><a href="single.html" title="Golpe de estado en Egipto" rel="contents">Golpe de estado en Egipto</a></h3>
                                        </div>
                                    </article>
                                    <article class="top-border">
                                        <a class="infografia-thumb thumb" href="single.html" title="Energía Geotérmica" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example06.jpg" alt="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”"></a>
                                        <div class="wrp">
                                            <div class="category-wrapp">
                                                <h4 class="category"><a href="infografia.html" title="ir a DF TV" rel="contents">Infografía</a></h4>
                                                <span class="date">10/02/2013</span>
                                            </div>
                                            <h3><a href="single.html" title="Energía Geotérmica" rel="contents">Energía Geotérmica</a></h3>
                                        </div>
                                    </article>
                                </li>
                                <li>
                                    <article>
                                        <a class="foto-thumb thumb" href="single.html" title="Izquierdo: “Golpe de estado en Egipto" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example05.jpg" alt="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”"></a>
                                        <div class="wrp">
                                            <div class="category-wrapp">
                                                <h4 class="category"><a href="foto.html" title="ir a DF TV" rel="contents">Foto</a></h4>
                                                <span class="date">10/02/2013</span>
                                            </div>
                                            <h3><a href="single.html" title="Golpe de estado en Egipto" rel="contents">Golpe de estado en Egipto</a></h3>
                                        </div>
                                    </article>
                                    <article class="top-border">
                                        <a class="infografia-thumb thumb" href="single.html" title="Energía Geotérmica" rel="contents"><img src="http://diariofinanciero.ida.cl/templates/default/images/examples/example06.jpg" alt="Izquierdo: “Mientras el consumo mantenga el dinamismo, no sería apropiado bajar la TPM”"></a>
                                        <div class="wrp">
                                            <div class="category-wrapp">
                                                <h4 class="category"><a href="infografia.html" title="ir a DF TV" rel="contents">Infografía</a></h4>
                                                <span class="date">10/02/2013</span>
                                            </div>
                                            <h3><a href="single.html" title="Energía Geotérmica" rel="contents">Energía Geotérmica</a></h3>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                            <!-- Navegación del Slider -->
                            <div class="navigation-slide">
                                <button class="bullet prev" data-func="changeSlider">Anterior</button>
                                <div class="bullets-wrapp buttons-slide">
                                    <button class="bullet round active" data-func="changeTab" data-slide="0" data-type="slider"></button>
                                    <button class="bullet round" data-func="changeTab" data-slide="1" data-type="slider"></button>
                                    <button class="bullet round" data-func="changeTab" data-slide="2" data-type="slider"></button>
                                    <button class="bullet round" data-func="changeTab" data-slide="3" data-type="slider"></button>
                                </div>
                                <button class="bullet next" data-func="changeSlider">Siguiente</button>
                            </div>
                            <!-- Fin de la Navegación del Slider -->
                        </div>
                        <!-- Fin Slider -->
                    </div>
                </section>
                <section class="column5 hide-on-phones">
                    <h3><a class="rotulo" href="df-tv.html" title="Ir a DF TV" rel="contents">DF TV</a></h3>
                    <article class="box">
                      <a class="video-thumb thumb" href="entrevista.html" title="Entrevista" rel="contents"><img class="video-thumb" src="http://diariofinanciero.ida.cl/templates/default/images/examples/example02.jpg" alt="Loreto Silva, Ministra de Obras Públicas: “Hay que pensar en Vespucio Oriente como un proyecto integral"></a>
                      <div class="category-wrapp">
                            <h4 class="category"><a href="entrevista.html" title="ir a Entrevistas" rel="contents">Entrevista</a></h4>
                            <span class="date">10/02/2013</span>
                      </div>
                      <h2><a href="single.html" title="Loreto Silva, Ministra de Obras Públicas: “Hay que pensar en Vespucio Oriente como un proyecto integral" rel="contents">Loreto Silva, Ministra de Obras Públicas: “Hay que pensar en Vespucio Oriente como un proyecto integral</a></h2>
                      <p>La secretaría de Estado indicó que se está trabajando en el anteproyecto de esta autopista y sostuvo que se trata de un gran proyecto urbanístico Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                    </article>
                </section>
                <section class="column4 last down-m">
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
                    <div class="banner-holder hide-on-phones">
                        <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-aside3.jpg" alt="banner">
                    </div>
                </section>
                <!-- Banner -->
                <div class="banner-holder full row hide-on-phones">
                    <img src="http://diariofinanciero.ida.cl/templates/default/images/banners/banner-full4.jpg" alt="banner">
                </div>
                <!-- Fin Banner -->
            </div>
        </section>
        <!-- Fin Sección Multimedia, DF TV y Unidad de Inteligencia -->
<?php require_once 'footer.php'; ?>