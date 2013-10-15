window.log=function(){log.history=log.history||[];log.history.push(arguments);if(this.console){console.log(Array.prototype.slice.call(arguments))}};
(function( window, $, undefined ){
    "use strict";
    if($('.lt-ie9').length > 0){var oldIE = true;}
    if($('.ie7').length > 0){var ie7 = true;}
    var allIE =  navigator.userAgent.indexOf("MSIE") > -1;
    
    var $body = $('body');
   
    /***
     * Constructor del objeto SiteHandler
     * 
     * Se ejecuta en el DOM ready para setear todos los valores, checkeos y delegaciones del sitio
     * Este objeto cuenta con dos agrupaciones de métodos. El objeto handlers tendrá todas las funciones delegadas y el objeto methods tendrá las funciones ejecutables.
     * 
     */
    window.SiteHandler = function(){//Init para los methodos y funciones del sitio en general   
        var esto = this;
        
        //Objeto que contiene métodos y funciones generales del sitio que se ejecutarán en el Init
        var methods = {
            /**
             * handlerEvents
             * 
             * @param : items (nodo Jquery). Set de nodos JQuery al cual aplicar las delegaciones
             * @return : void.
             * 
             * Este metodo se encarga de delegar automáticamente los objetos dentro del set de nodos $elements
             * a los métodos listados abajo.
             * El método al cual se delegara estará sujeto al valor del atributo "data-func" de cada elemento
             * Opcionalmente cada elemento puede tener definido el atributo "data-event" cuyo valor debe ser un tipo de evento
             * valido en javascript y válido para el elemento. La existencia de este atributo en el elemento cambiará
             * la delegación por defecto (click) por el evento (o sets de eventos separados por espacio) que traiga este atributo
             * 
             */
            handlerEvents : function(items){
                if( ! items.length){ //Si no encuentra elementos, entonces no hace nada
                    return;
                }
                $.each(items,function(i,item) {
                    var $item = $(item); //se almacena el elemento html en la variable $item
                    var func = $item.attr("data-func"); //se almacena el valor del atributo 'data-func' del elemento html
                    var event = $item.attr("data-event") ? $item.attr("data-event") : 'click'; //Si no existe valor definido del atributo 'data-event' del elemento, por defecto el evento a delegar será 'click'
                    if( func && $.isFunction(handlers[ func ])){ //Si existe func y además el valor del atributo 'data-func' existe como función dentro del objeto 'handlers' y además el elemento html no tiene el atributo personalziado 'delegated', la delegación se hará efectiva.
                        $item.off(event, handlers[ func ]);//desactiva la delegación del evento para no producir multiples delegaciones
                        $item.on(event,{ globalesto : esto }, handlers[ func ]);//activa la delegación del evento
                        $item.attr('data-delegated', true);//al elemento html se le asigna un atributo personalizado 'delegated' con valor 'true' para comprobar luego si ha sido delegado anteriormente el evento.
                    }
                });
            },
             /**
             * equalizeHeights
             * 
             * @param : $elements (nodo Jquery). Set de nodos JQuery al cual aplicar las delegaciones
             * @param : $sum (int). Valor que se sumará al alto máximo 
             * @return : void.
             * 
             * Hace que todos los elementos dentro del set $elements tengan la altura del
             * elemento más alto del set, para igualarlas.
             */
            equalizeHeights : function( $elements , sum ){
                if(!sum){
                    sum = 0; //Se inicializa una variable en 0 en caso de que no exista.
                }
                
                var heightArray = [],
                    maxValue;
            
                $elements.height('auto');//se resetea la altura
                $.each($elements, function(index, elm){
                    heightArray.push( $(elm).height() ); // incluye la altura por cada elemento en el array
                });
                maxValue = Math.max.apply( Math, heightArray ); // saca el valor mas alto del array
                $elements.height( maxValue + sum ); // Se setea la nueva altura
            },
            /**
             * svgFallBack
             * Detecta a través de Modernizr si el navegador soporta imagenes en formato SVG, de lo contrario, despliega la imagen en PNG almacenada en el atributo data-svg de la imagen
             */
            svgFallBack : function() {
                if( !Modernizr.svg ) { 
                    var svgObjects = $('[data-png]');
                    $.each(svgObjects, function(i, elm){
                        $(elm).attr('src', $(elm).attr('data-png'));
                    });
                }
            },
            /**
             * setCarrusel
             * 
             * @param : element (nodo Jquery). Set de nodos JQuery al cual aplicar el slider.
             * @param : auto (boolean). Define si el Slider se moverá automáticamente 
             * @return : void.
             * 
             * Setea NinjaSlider.js a todos los nodos JQuery asignados a la variable element.
             * 
            */
            setCarrusel : function(element, auto){
                    element.ninjaSlider({auto:auto, continuous: true, stopPropagation: true, callback: function(index, item){ //setea Swipe con valor de carrusel automático en 5 segundos, y despliegue contínuo.
                    } });
            },
            /**
             * setSmartphoneSlide
             * 
             * @param $section(nodo JQuery). Elemento que contendrá los artículos que se transformarán en Slider
             * @return void.
             * 
             * Transforma todos los artículos dentro del elemento $container en la estructura de un slider, siempre y cuando estos tengan
             * un atributo seteado llamado data-toSlide
             */
            setSmartphoneSlide : function($section){
                   var $articles = $section.find('[data-toSlide]'); //Articulos a desplegar en el slider
                   var html = "";
                   var count = 0;
                   var oldHTML = $section.html(); //Se almacena el HTML por defecto
                   var $contingencia = $section.find('.contingencia'); //Se almacena la noticia de contingencia en caso de que exista
                   
                   $section.data('oldHTML', oldHTML); //Se guarda en el contenedor el HTML por defecto en caso de que se necesite reestablecer la estructura HTML
                   
                   //Se comienza a crear la estructura par ael slider
                   html += '<div class="slide-async table-wrapp">';
                       html += '<ul>';
                            //Artículos
                            $.each($articles.get().reverse(), function(index, elemento){
                               var $element = $(elemento);
                               var link = $element.find('a');
                               var image = $element.attr('data-imageToSlide'); //En caso de que el artículo no cuente con imagen, entonces obtiene la imagen desde el atributo data-imageToSlide
                               var title = link.attr('title');
                               var href = link.attr('href');
                               count++;
                               
                               html += '<li>';
                               html += '<article class="box">';
                               html += image ? '<a href="'+ href +'" title="'+ title +'" rel="contents"><img src="'+ image +'" alt="'+ title +'" /></a>' : '';
                               html += $element.html();
                               html += '</article>';
                               html += '</li>';
                               
                           });
                       html += '</ul>';
                       html += '<div class="navigation-slide">';
                            html += '<button class="bullet prev" data-func="changeSlider">Anterior</button>';
                            html += '<div class="bullets-wrapp buttons-slide">';
                            //Navegación del Slider
                                for(var i = 0; i < count; i++){
                                    var active = i === 0 ? 'active' : '';
                                    html += '<button class="bullet round '+ active +'" data-func="changeTab" data-slide="'+ i +'" data-type="slider"></button>';
                                }
                            html += '</div>';
                            html += '<button class="bullet next" data-func="changeSlider">Siguiente</button>';
                       html += '</div>';
                   html += '</div>';
                   
                   $section.html(html);//Se inserta la nueva estructura dentro del elemento padre
                   $section.prepend($contingencia); //En caso de que exista el bloque de contingencia se inserta al comienzo
                   methods.setCarrusel($('.slide-async'));//Se ejecuta nuevamente el método para setear el slider
                   methods.handlerEvents($('[data-func]'));//Se ejecuta nuevamente el método handlerEvents para la navegación
            },
            /**
             * searchDeploy
             * 
             * @param $item(nodo JQuery). botón de buscador
             * @return void.
             * 
             * En Smartphones, permite que el botón de buscar despliegue el campo para buscar
             */        
            searchDeploy : function($item){
                //Al hacer click en el botón
                $item.on('click', function( event ){
                    event.preventDefault(); //Se previene que haga el submit
                    var $field = $item.prev(); //Campo de buscar
                    var $form = $item.parents('form'); //Formulario contenedor
                    var deploy = $item.attr('data-deploy'); //Atributo que nos permite saber si el campo de buscador está desplegado o no, por defecto, no
                    var $logoWrapp = $('.logo-wrapp'); //El elemento contenedor del logo
                    
                    //Se asigna la clase para permitir animación a través de CSS a los elementos
                    $logoWrapp.addClass('transition');
                    $field.addClass('transition');
                    $form.addClass('transition');
                    
                    if(deploy === "false"){//Si el campo de buscador no se encuentra desplegado, se muestra y el logo desaparece
                        $field.css({
                            'width' : '89%',
                             'padding' : '10px',
                             'border' : '1px solid #CCC'
                        });
                        $form.css('width','100%');
                        $logoWrapp.addClass('away');
                        $item.attr('data-deploy','true').css('width','10%');
                    }else{//Si el campo de buscador se encuentra desplegado, se oculta y el logo aparece
                        $field.css({
                            'width' : 0,
                             'padding' : 0,
                             'border' : 0
                        });
                        
                        $form.css('width','9.625%');
                        $item.attr('data-deploy','false').css('width','100%');
                        $logoWrapp.removeClass('away');
                    }
                });
            },
            /**
             * enquireSetup
             * 
             * @return void.
             * 
             * Utilizando la librería enquire, nos permitimos generar rangos de pantalla para ejecutar ciertas funciones
             */         
            enquireSetup : function(){
                //A través de enquire detectamos ranos de ancho para ejecutar ciertos métodos
                enquire.register("screen and (max-width:640px)", {
                    //Funciones para Smartphones
                    match : function() {
                        //En caso de pantallas pequeñas, el contenido principal de la home se convierte en un Slide a través de este método
                        methods.setSmartphoneSlide($('.mobileSlider'));
                        //Despliega el buscador al hacer click en el botón
                        methods.searchDeploy($('#searchButton'));
                        //En caso de que se aprete el botón enter se realizará el submit en el formulario
                        $('.top-header form').on("keypress", function(e) {
                            if (e.keyCode === 13) {
                                $('.top-header form').submit();
                            }
                         });
                         //Cambia los títulos de la sección en caso de que sea visualización de smartphones
                         methods.changeTitleSection($('[data-changeTitle]'));
                         //Posiciona el articulo destacado en la primera posición en la vista de Smartphone
                         methods.changeArticlePosition($('[data-position]'), 'smartphone');
                         //Crea la funcionalidad de los artículos desplegables por secciones en las portadillas
                         methods.setToggleArticles($('[data-toggle]'));
                         //Setea nuevamente la altura del elemento contenedor de los tabs
                         methods.tabHolderSet($('.tab-holder'));
                    }
                });
                enquire.register("screen and (min-width:640px)", {
                            //Funciones para Desktop
                            match : function() {
                                //En caso que exista la posibilidad de que se despliegue la pantalla con slider a desktop, los contenidos se resetean en su visualización por defecto
                                var $section = $('.mobileSlider');
                                var dataHTML = $section.data('oldHTML');
                                if(dataHTML){
                                    var $form = $('form');
                                    var $inputs = $form.find('input');
                                    //Quita los estilos puestos a través de Javascript
                                    $section.html(dataHTML);
                                    $inputs.removeAttr('style');
                                    $form.removeAttr('style');
                                }
                                
                                //Cambia los títulos de la sección en caso de que sea visualización de smartphones
                                methods.changeTitleSection($('[data-changedText]'));
                                //Posiciona el articulo destacado donde corresponde en caso de que su posición haya sido modificada desde la vista Smartphone
                                methods.changeArticlePosition($('[data-position]'), 'desktop');
                                //Setea nuevamente la altura del elemento contenedor de los tabs
                                methods.tabHolderSet($('.tab-holder'));
                            }
                        });
            },
            /**
             * changeTitleSection
             * 
             * @params $items(nodo JQuery), set de elementos a los cuales se requiere cambiar el texto
             * @return void.
             * 
             * En visualización Smartphones, reemplaza el texto de los títulos de sección por un omás corto que se debe alamacenar como atributo personalizado.
             */    
            changeTitleSection  : function( $items ){
                $.each($items, function(index, item){
                    var $item = $(item);
                    var oldTxt = $item.text(); //Almacena el texto actual antes de modificarlo
                    var newTxt = $item.attr('data-changeTitle'); //Almacena el texto que se insertará en el elemento
                    
                    $item.attr('data-changeTitle', oldTxt); //Guarda el texto actual como atributo del elemento en caso de que se necesite recuperar
                    $item.text(newTxt); //Cambia el texto por el que está almacenado en el atributo data-changeTitle
                    $item.attr('data-changedText','true');
                });
            },
            /**
             * changeArticlePosition
             * 
             * @params $items(nodo JQuery), elemento a posicionar
             * @params dispositivo (string), dispositivo por el cual se ejecutará la función
             * @return void.
             * 
             * En visualización Smartphones, reemplaza el texto de los títulos de sección por un omás corto que se debe alamacenar como atributo personalizado.
             */           
            changeArticlePosition : function( $item, dispositivo ){
                var changed = $item.attr('data-changed'); //Permite saber si el elemento ha sido posicionado
                //Dependiendo desde donde se visualiza la página, el artículo destacado se mostrará en diferentes posiciones
                if(dispositivo === 'smartphone'){
                    var $breadcrumbs = $('.breadcrumbs');    
                    $breadcrumbs.after($item);
                    $item.attr('data-changed','true');
                }else if(dispositivo === 'desktop' && changed === 'true'){
                    $item.parent().find('.last').before($item);
                    $item.attr('data-changed','false');
                }
            },
            /**
             * setToggleArticles
             * 
             * @params $container(nodo JQuery), elemento contenedor de los artículos
             * @return void.
             * 
             * Setea la estructura HTML para los artículos desplegables en la protadilla
             */         
            setToggleArticles : function($container){
        
                $.each($container,function(index, element){
                    var $cont = $(element);
                    var $items = $cont.find('article').detach();
                    var $temp = $('<div />').attr({'class' : 'toggle-wrap'});

                    $temp.appendTo($cont).append($items);
                });   
            },
            /**
             * tabHolderSet
             * 
             * @params $container(nodo JQuery), elemento contenedor de los contenidos en la plantilla Single
             * @return void.
             * 
             * Setea el alto para el contenedor de los tabs de contenidos
             */       
            tabHolderSet : function($container){
                setTimeout(function(){
                    var activeLi = $container.find('li[data-tab].active').outerHeight();
                    $container.css('height', activeLi);
                },1000);
            },
            /**
             * initializeScroll
             * 
             * @return void.
             * 
             * Inicializa el plugin Iscroll5 que permite generar un scroll touch en el elemento para seleccionar acciones de una lista
             */            
            initializeScroll : function(){
                var scroller = new IScroll('#wrapper');
            },
            /**
             * searchAcciones
             * 
             * @param $input (nodo JQuery), nodo Jquery con el campo donde se ingresa la búsqueda
             * @return void.
             * 
             * Permite buscar dentro de la lista de acciones, los caracteres ingresado al campo, escondiendo las que no hagan el match
             */          
            searchAcciones : function ($input){
                var lis = $input.next().find('li'); //Listas con las acciones
                $.each(lis, function(index, element){ //Por cada accion se almacena en un atributo personalizado del elemento, el nombre de la accion en bajas
                    var $ele = $(element);
                    var lowerTxt = $ele.text().toLowerCase();
                    
                    $ele.attr('data-name', lowerTxt);
                });
                
                $input.on('keyup',function(){ //Por cada caracter ingresado, se ocultaran todas las acciones que no hagan match con lo ingresado en el campo de búsqueda
                   var $field = $(this); 
                   var search = $field.val().toLowerCase();
                   var filtro = $field.next().find('li[data-name*="'+ search +'"]');
                   
                   $field.next().find('li').css('display','none');
                   filtro.css('display','block');
                   
                   if($field.val().length <= 0){
                       $field.next().find('li').css('display','block');
                   }
                });
            },
            /**
             * currency
             * 
             * @param : value (int), Valor a formatear
             * @param : decimals (int), Cantidad de decimales
             * @param : separators (array), Separadores para formatear
             * Función que formatea valores numéricos con puntuaciones, ejemplo "1000000" en "1.000.000"
             * 
             * return string
             */ 
            currency : function(value, decimals, separators) {
                decimals = decimals >= 0 ? parseInt(decimals, 0) : 2;
                separators = separators || ['.', "'", ','];
                var number = (parseFloat(value) || 0).toFixed(decimals);
                if (number.length <= (4 + decimals))
                    return number.replace('.', separators[separators.length - 1]);
                var parts = number.split(/[-.]/);
                value = parts[parts.length > 1 ? parts.length - 2 : 0];
                var result = value.substr(value.length - 3, 3) + (parts.length > 1 ?
                    separators[separators.length - 1] + parts[parts.length - 1] : '');
                var start = value.length - 6;
                var idx = 0;
                while (start > -3) {
                    result = (start > 0 ? value.substr(start, 3) : value.substr(0, 3 + start))
                        + separators[idx] + result;
                    idx = (++idx) % 2;
                    start -= 3;
                }
                return (parts.length == 3 ? '-' : '') + result;
            },
            /**
             * calculateAcciones
             * 
             * @param : arrayElements (array), array vacío
             * @param : $newTR (nodo Jquery), nodo Jquery que contiene la fila completa de la acción (<tr>)
             * 
             * return void
             * 
             * Permite calcular el total de las acciones
             */ 
            calculateAcciones : function( arrayElements, $newTR ){
                $.each($newTR, function(index, elemento){
                    var $element = $(elemento),
                        precio = $element.find('.precio').text().split('.').join('').split(',').join('.');
                    var newPrecio = parseFloat(precio);
                    var newCant = parseFloat($element.find('.cantidad').text());
                    var calculo = newPrecio * newCant;
                    arrayElements.push(calculo);
                });
                
                //Calculo del total
                var suma = 0;
                $.each(arrayElements, function(index, element){

                    if(isNaN(element)){element = 0;}
                    suma = suma + element;
                });
                suma = methods.currency(suma, 0, ['.', ".", '.']);
                $('.total-field').html('<p>Total: $'+ suma);
            },
            /**
             * validateForms
             * 
             * @param : $form (nodo Jquery), nodo Jquery que cotniene el formulario a validar
             * 
             * return void
             * 
             * A través del plugin validizr, permite validar los campos requeridos de un formulario
             */         
            validateForms : function ( $form ){  
                 $form.validizr({ //Se ejecuta el validador de formularios
                        notValidInputCallback : function( input ){
                            $form.next('.error').remove();
                            input.css('margin-bottom','5px');
                            input.after('<p class="error">Debe ingresar información válida en el campo</p>');
                        }, //Callback del validador de formularios
                        validInputCallback : function( input ){
//                            $('p.error').remove();
                        }
                    });   
            }        
        };
        //Objeto que contiene métodos y funciones generales del sitio que se ejecutarán al ser delegadas por algún evento.
        var handlers = {
            /**
             * deployIndicadores
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Despliega el menú de indicadores económicos al hacer click en los indicadores en el header
             */   
            deployIndicadores : function ( event ){
                var $item = $(this);
                var $indicadores = $('.indicadores');
                var $parent = $item.parent();
                var deploy = $parent.attr('data-deploy');
                var bodyOnClick = function( event ){ 
                                        $indicadores.css({
                                           'top' : '0px',
                                           'opacity' : '0',
                                           'visibility' : 'hidden'
                                        });
                                        if(oldIE){
                                            $indicadores.hide();
                                        }
                                       $(this).off('click touchstart MSPointerDown', bodyOnClick); 
                                       $parent.attr('data-deploy','false');
                                    };
                var indicadoresOnClick = function( event ){
                        event.stopPropagation();
                };
                $indicadores.addClass('transition');//Se agrega la clase que permitirá animar a través de transiciones CSS
                $indicadores.attr('data-pos', $item.attr('data-pos')); //Se agregá la posición del botón que fue clickeado, para despues saber donde tiene que reemplazar la información
                if(deploy === 'false'){ //Si el menú no está desplegado entonces lo muestra
                    $indicadores.css({
                       'top' : '25px',
                       'opacity' : '1.0',
                       'visibility' : 'visible'
                    });
                    if(oldIE){
                        $indicadores.show();
                    }
                    $parent.attr('data-deploy','true');
                }else{ //Si el menú está desplegado, entonces lo oculta
                    $indicadores.css({
                       'top' : '0px',
                       'opacity' : '0',
                       'visibility' : 'hidden'
                    });
                    if(oldIE){
                        $indicadores.hide();
                    }
                    $parent.attr('data-deploy','false');
                }
//                Permite la funcionalidad de cliquear en cualquier parte y cerrar el menú
                event.stopPropagation();
                $indicadores.on('click touchstart MSPointerDown',indicadoresOnClick);
                $('body').on('click touchstart MSPointerDown',bodyOnClick); 
                
            },
            /**
             * indicadores
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Reemplaza el indicador seleccionado en los indicadores desplegados en el header de la home
             */           
            indicadores : function ( event ){
                var $item = $(this); //El indicador cliqueado
                var valor = $item.attr('data-value'); //El valor del indicador
                var $indicadores = $('.indicadores');
                var posicion = $indicadores.attr('data-pos'); //La posición donde se insertará el nuevo valor
                
                $item.parents('.values').find('button[data-pos="'+ posicion +'"]').html('<strong>'+ $item.text() +':</strong> '+ valor);//Se inserta el valor
                
                //Se oculta el menú de indicadores
                $indicadores.css({
                   'top' : '0px',
                   'opacity' : '0',
                   'visibility' : 'hidden'
                });
                //Se resetean lso valores de despliegue
                $item.parent().parent().parent().attr('data-deploy','false');
                
            },
            /**
             * changeTab
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Da la funcionalidad a los botones de navegación de los sliders
             */             
            changeTab : function ( event ){
                var $item = $(this);
                var type = $item.attr('data-type');
                var $slideTarget = $item.attr('data-slide');
                var $slider;
                
                if(type === 'tabs'){//Si es el despliegue de tabs
                    $slider = $item.parents('.slider').find('.slide-tabs');
                }else{//Si es el despliegue de slide
                    $slider = $item.parent().parent().parent();
                }
                
                //Coloca los botones activos dependiendo del caso
                $item.parents('.buttons-slide').find('.active').removeClass('active');
                $item.addClass('active');
                
                //Se genera el movimiento
                $slider.data('ninjaSlider').slide(parseInt($slideTarget,10));
                
            },
            /**
             * changeSingleTabs
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Da la funcionalidad a los botones de navegación de los sliders de contenido en el single
             */          
            changeSingleTabs : function( event ){
                var $item = $(this);
                var tab = $item.attr('data-tab');
                var $sliderContainer = $item.parents('.single-content-tabs').find('.tab-holder');
                var $targetLi = $sliderContainer.find('li[data-tab="'+ tab +'"]');
                
                //Agrega las clases al botón seleccionado para dejarlo activo
                $item.parent().find('.active').removeClass('active');
                $item.addClass('active');
                
                //Agrega las clases al tab seleccionado para mostrarlo
                $sliderContainer.find('li[data-tab]').removeClass('active');
                $targetLi.addClass('active transition');
                
                //Setea nuevamente la altura del elemento contenedor de los tabs
                methods.tabHolderSet($sliderContainer);
                
            },        
            /**
             * changeChart
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Esta función debería generar los gráficos, actualmente solo está marcando los estados activos del menú de selección de gráfico
             */         
            changeChart : function ( event ){
                  var $item = $(this);
                  var $icon = $item.find('.more-image img');
                  
                  $item.addClass('transition');
                  $icon.addClass('transition');
                  
                  $item.parent().find('.active').removeClass('active');
                  $item.addClass('active');
            },
            /**
             * changeBigChart
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Esta función debería generar los gráficos, actualmente solo está marcando los estados activos del menú de selección de gráfico
             */         
            changeBigChart : function ( event ){
                  var $item = $(this);
                  
                  if(!$item.hasClass('locked-tab')){
                      $item.parent().parent().find('.active').removeClass('active');
                      $item.addClass('active');
                  }
            },
            /**
             * changeSlider
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Método que da la funcionalidad de navegación de los botones "anterior" y "siguiente" para el slider
             */              
            changeSlider : function( event ){
                var $item = $(this);
                var $slider = $item.parent().parent(); //Contenedor del slider
                var $buttonsHolder = $item.parents('.navigation-slide');
                var $navigation = $slider.find('.navigation-slide');
                var currentSlide;
                
                if($item.hasClass('prev')){ //Si es el botón anterior, se mueve hacia la izquierda
                    $slider.data('ninjaSlider').prev();
                }else if($item.hasClass('next')){//Si es el botón siguiente, se mueve hacia la derecha
                    $slider.data('ninjaSlider').next();
                }
                //Estados activos
                currentSlide = $slider.data('ninjaSlider').getIndex();
                $buttonsHolder.find('.bullet.round').removeClass('active');
                $buttonsHolder.find('.bullet.round[data-slide="'+ currentSlide +'"]').addClass('active');
            },
            /**
             * deployArticles
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Permite la funcionalidad de desplegar secciones de artículos y ocultarlos en la plantilla de portadilla visulaización Smartphone
             */           
            deployArticles : function ( event ){
                event.preventDefault(); //Se previene la funcionalidad por defecto
                var $item = $(this);
                var $roto = $item.find('.roto-more');
                var deploy = $item.attr('data-deploy');
                var $content = $item.next();
                var allContents = $item.parents('[class*="column"]').find('.toggle-wrap');
                var allTitles = $item.parents('[class*="column"]').find('.active-toggled');
                var allRotos = $item.parents('[class*="column"]').find('.rotarMore');
                //Se asigna la clase para generar animación
                $('.toggle-wrap').addClass('transition');
                $roto.addClass('transition');
                //Se eliminan las clases y atributos que permiten identificar si el bloque está desplegado
                allTitles.removeClass('active-toggled').attr('data-deploy','false');
                allContents.removeClass('desplegado');
                allRotos.removeClass('rotarMore');
                
                //Si el bloque está desplegado
                if(deploy === 'false'){
                    $roto.addClass('rotarMore'); //Clase que permite girar el icono
                    $content.addClass('desplegado'); //Clase que permite desplegar los contenidos
                    $item.attr('data-deploy','true').addClass('active-toggled');//Atributos para identificar que está desplegado el contenido
                } 
            },
            /**
             * deployIngresoSubmenu
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Despliega la caja de ingreso al hacer click en el botón de ingreso en el header
             */          
            deployIngresoSubmenu : function ( event ){
                event.preventDefault(); //Previene la funcionalidad por defecto
                var $item = $(this);
                var deploy = $item.attr('data-deploy');
                var $container = $item.next();
                var $navButton = $('.mobileNav');
                var bodyOnClick = function( event ){ 
                                        $container.css({
                                           'top' : '0px',
                                           'opacity' : '0',
                                           'visibility' : 'hidden'
                                        });
                                        if(oldIE){
                                            $container.hide();
                                        }
                                       $(this).off('click touchstart MSPointerDown', bodyOnClick); 
                                       $item.attr('data-deploy','false');
                                    };
                var inscribeteOnClick = function( event ){
                        event.stopPropagation();
                };
                
                //Se eliminan las clases y se setea el atributo para identificar que la caja está desplegada
                $navButton.next().removeClass('deployed');
                $navButton.attr('data-deploy','false');
                
                //Se agrega la clase que permite animación por CSS
                $container.addClass('transition');
                
                if(deploy === 'false'){//Si la caja está oculta, la muestra
                    $container.css({
                        'visibility' : 'visible',
                        'top' : '30px',
                        'opacity' : '1.0'
                    });
                    $item.attr('data-deploy','true');
                }else{ //Si la caja está visible, se oculta
                    $container.css({
                        'visibility' : 'hidden',
                        'top' : '0',
                        'opacity' : '0'
                    });
                    $item.attr('data-deploy','false');
                }
                //Permite la funcionalidad de cliquear en cualquier parte y cerrar el menú
                event.stopPropagation();
                $container.on('click touchstart MSPointerDown',inscribeteOnClick);
                $('body').on('click touchstart MSPointerDown',bodyOnClick);
            },
            /**
             * deployMobileNav
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Despliega el menu de navegación principal en dispoitivos móviles
             */          
            deployMobileNav : function( event ){
                var $item = $(this);
                var deploy = $item.attr('data-deploy');
                var navigation = $item.next();
                var $ingresoContainer = $('.ingreso-submenu');
                //Función que desactiva el evento click en el elemento
                var deployFn = function(){
                    event.stopPropagation();
                    $(this).off('click touchstart MSPointerDown', bodyOnClick);
                };
                //Función que permite cerrar el menú al hacer click fuera de este
                var bodyOnClick = function(){
                    navigation.removeClass('deployed');
                    $item.attr('data-deploy','false');
                };
                //Se le asigna la clase para generar animaciones CSS
                navigation.addClass('transition');
                
                //Se oculta la caja de ingreso en caso de que ésta se encuentre abierta
                $ingresoContainer.css({
                        'visibility' : 'hidden',
                        'top' : '0',
                        'opacity' : '0'
                });
                $ingresoContainer.prev().attr('data-deploy','false');
                
                if(deploy === "false"){//Si el menú está oculto, se despliega
                    navigation.addClass('deployed');
                    $item.attr('data-deploy','true');
                }else{ //Si el menú está visible, se oculta
                    navigation.removeClass('deployed');
                    $item.attr('data-deploy','false');
                }
                
                //Permite la funcionalidad de cliquear en cualquier parte y cerrar el menú
                event.stopPropagation();
                navigation.on('click touchstart MSPointerDown',deployFn);
                $('body').on('click touchstart MSPointerDown',bodyOnClick);
            },
            /**
             * modifyText
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Funcionalidad que permite aumentar o disminuir el texto en el single del artículo
             */  
            modifyText : function ( event ){
                var $item = $(this);
                var type = $item.attr('data-type');
                var $parrafo = $('.entry > p');
                var $parrafoSize = $parrafo.css('font-size');
                var number = parseInt($parrafoSize.replace(/font-size:\s*(\d+.{0,1}\d*)/), 10);
                
                if(type === 'big' && number < 26){ //Si el botón es aumentar entonces aumenta el font-size del párrafo principal en 5px con un tope de 26px
                    $parrafo.css('font-size', number + 5 +'px');
                }else if(type === 'little' && number > 11){ //Si el botón es disminuir entonces disminuye el font-size del párrafo principal en 5px con un tope de 11px
                    $parrafo.css('font-size', number - 5 +'px');
                }
                methods.tabHolderSet($('.tab-holder'));
            },
            /**
             * printText
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Funcionalidad que permite imprimir el contenido del artículo
             */
            printText : function( event ){
                var $item = $(this);
                
                window.print();
            },
            /**
             * favoriteArticle
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Esta función debería almacenar el artículo en el perfil del usuario de manera que quede como favorito
             */
            favoriteArticle : function ( event ){
                //Esta función debería almacenar el artículo en el perfil del usuario de manera que quede como favorito
            },
            /**
             * readAfter
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Esta función debería almacenar el artículo en el perfil del usuario de manera que quede para leer después
             */
            readAfter : function ( event ){
                //Esta función debería almacenar el artículo en el perfil del usuario de manera que quede para leer después
            },
            /**
             * zenMode
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Funcionalidad que permite mostrar el contenido del artículo en modo pantalla completa
             */        
            zenMode : function ( event ){
                var $item = $(this);
                var dataFull = $item.attr('data-full');
                
                event.preventDefault();
                
                if(document.fullscreenEnabled === true){ //Si se encuentra en modo pantalla completa, vuelve a la normalidad
                    document.exitFullscreen();
                }else if(document.fullscreenEnabled === false){//Si no se encuentra en modo pantalla completa, entra en modo pantalla completa
                    $('body').get(0).requestFullscreen();
                }else{
                    if(dataFull !== 'true'){
                        $('.zen-hide').css('display','none');
                        $('.zen-show').css('display','block');
                        $('.zen').addClass('full');
                        if(oldIE){$('.zen').addClass('fullIE');}
                        $item.attr('data-full','true');
                        if(allIE){
                            $('.zen.full').css({
                                'width' : '100%',
                                'padding' : '100px 200px'

                            });
                        }
                    }else{
                        $('.zen-hide').css('display','block');
                        $('.zen-show').css('display','none');
                        $('.zen').removeClass('full');
                        if(oldIE){$('.zen').removeClass('fullIE');}
                        $item.attr('data-full','false');
                        if(allIE){
                            $('.zen').css({
                                'width' : '65.5%',
                                'padding' : '0px'

                            });
                        }
                    }
                }
                methods.tabHolderSet($('.tab-holder')); //Setea el slider de contenidos en los tabs de la plantilla Single
            },
            /**
             * zenMode
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Permite agregar una fila a la tabla de acciones con la información necesaria de la acción tomada desde atributos personalizados
             */           
            AgregarAcciones : function ( event ){
                event.preventDefault();
                var $item = $(this);
                var $container = $item.parents('.wrapp-ingreso-sub');
                var $button = $container.parent().prev();
                var $selected = $container.find('.selected');
                var precio = $selected.attr('data-precio');
                var variacion = $selected.attr('data-variacion');
                var cantidad = $container.find('input[name="acciones-cantidad"]').val();
                var emptyRow = $item.parents('tr');
                var $row = $item.parents('tr');
                var $tbody = $row.parent();
                
                if($selected.text()){ //Si existe una acción seleccionada, cierra el lightbox, y agrega la acción a la tabla
                    $('.error-message').remove(); //Se elimina el emnsaje de contingencia
                    emptyRow.find('.personal-more').attr('data-deploy','false'); //Se inserta un atributo al botón para identificar que el lightbox ya no está desplegado
                    $tbody.append('<tr class="content-tr">'+ emptyRow.html() +'</tr>'); //Se agrega la fila con la nueva acción
                    
                    if(!cantidad){ //Si el usuario no ingresa cantidad, por defecto es 1
                        cantidad = 1;
                    }
                    
                    //Se añaden los valores según la acción tomados desde atributos personalizados en lso elementos de lista
                    $row.find('.accion').html($selected.text());
                    $row.find('.precio').html(precio);
                    $row.find('.variacion').html(variacion);
                    $row.find('.cantidad').html(cantidad);

                    //Saca el total de las acciones
                    var $newTable = $item.parents('table');
                    var $newTR = $newTable.find('.content-tr');
                    var arrayElements = [];

                    methods.calculateAcciones(arrayElements, $newTR);
                    
                    //Oculta el lightbox
                    $tbody.find('.ingreso-submenu').css({
                       'visibility' : 'hidden',
                       'opacity' : 0
                    });
                    $button.addClass('change');
                    $button.next().remove();
                    $button.attr('data-func','closeRow');

                    methods.handlerEvents($('[data-func]'));//Inicialización del método usado para delegar eventos
                    methods.initializeScroll(); //Inicializa IScroll
                }else{//Si no se ha seleccionado ninguna acción, aparece un mensaje de contingencia
                    $item.parent().append('<p class="error-message">*Debes Seleccionar una Acción</p>');               
                }
                
                
            },
            /**
             * listSelected
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * En la lista de acciones, marca la acción seleccionada con una clase para destacarla
             */  
            listSelected : function( event ){
                var $item = $(this);
                
                $item.parent().find('.selected').removeClass('selected');
                $item.addClass('selected');
            },
            /**
             * closeRow
             * @param event(evento javascript). Evento javascript delegado
             * @return void.
             * 
             * Elimina la fila con la acción al clickear en el botón de eliminar
             */  
            closeRow : function( event ){
                var $item = $(this);
                var arrayElements = [];
                
                //Elimina la fila
                $item.parents('tr').remove();
                
                var table = $('.personal');
                var trs = table.find('tr');
                
                methods.calculateAcciones(arrayElements, trs); //Vuelve a calcular el total
            },
            showInfo : function ( evento ){
                var $item = $(this);
                var $box = $item.find('.text-box');
                var deploy = $item.attr('data-deploy');
                
                $('.text-box').removeClass('show');
                $('.info').attr('data-deploy','false');
                
                $box.addClass('transition');
                
                if(deploy === 'false'){
                    $box.addClass('show');
                    $item.attr('data-deploy','true');
                }else{
                    $box.removeClass('show');
                    $item.attr('data-deploy','false');
                }
                
            },
            selectTableType : function ( evento ){
              var $item = $(this);
              var $table = $item.parents('table');
              
              for(var i = 1; i <= 3; i ++){
                  $table.find('[data-price="'+ i +'"]').text($item.attr('data-price-'+ i));
              }

            },
            deployTarifas : function ( evento ){
                evento.preventDefault();
                var $item = $(this);
                var lightbox = "";
                
                lightbox += '<div class="tarifas table-wrapp wrp2">';
                lightbox += '<img src="http://diariofinanciero.ida.cl/templates/default/images/logos/logo.svg" data-png="http://diariofinanciero.ida.cl/templates/default/images/logos/logo.png" alt="Diario Financiero">';
                lightbox += '<h2>Tablas de tarifas de servicios de suscripciones</h2>';
                lightbox += '<div class="tarifas-wrapp">';
                lightbox += '<table class="tarifa-table">';
                lightbox += '<thead>';
                lightbox += '<tr>';
                lightbox += '<th>';
                lightbox += '<div class="radio-wrp">';
                lightbox += '<input id="check_anual" type="radio" name="tipo_tarifa" data-func="selectTableType" data-event="change" data-price-1="Gratis" data-price-2="$60.000" data-price-3="$78.500" checked/>';
                lightbox += '<label for="check_anual">Anual</label>';
                lightbox += '<input id="check_mensual" type="radio" name="tipo_tarifa" data-func="selectTableType" data-event="change" data-price-1="$60.000" data-price-2="$78.500" data-price-3="$125.000" />';
                lightbox += '<label for="check_mensual">Mensual</label>';
                lightbox += '</div>';
                lightbox += '<p class="first-th"><strong>Productos y Servicios Incluidos</strong></p>';
                lightbox += '</th>';
                lightbox += '<th>';
                lightbox += '<div class="th-wrapp">';
                lightbox += 'DF Digital Limitado <span data-price="1">Gratis</span>';
                lightbox += '</div>';
                lightbox += '<a href="#" title="Suscribirse" rel="help" class="btn dark-orange">Seleccionar</a>';
                lightbox += '</th>';
                lightbox += '<th>';
                lightbox += '<div class="th-wrapp">';
                lightbox += 'DF Digital Full <span data-price="2">$60.000</span>';
                lightbox += '</div>';
                lightbox += '<a href="#" title="Suscribirse" rel="help" class="btn dark-orange">Seleccionar</a>';
                lightbox += '</th>';
                lightbox += '<th>';
                lightbox += '<div class="th-wrapp">';
                lightbox += 'DF Digital Full + Impreso <span data-price="3">$78.500</span>';
                lightbox += '</div>';
                lightbox += '<a href="#" title="Suscribirse" rel="help" class="btn dark-orange">Seleccionar</a>';
                lightbox += '</th>';
                lightbox += '</tr>';
                lightbox += '</thead>';
                lightbox += '<tbody>';
                lightbox += '<tr>';
                lightbox += '<td>Vista móvil y web <span class="info" data-func="showInfo" data-deploy="false"><span class="text-box">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</span></span></td>';
                lightbox += '<td><span class="check limited">limitado</span></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '</tr>';
                lightbox += '<tr>';
                lightbox += '<td>Titulares estándar <span class="info" data-func="showInfo" data-deploy="false"><span class="text-box">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</span></span></td>';
                lightbox += '<td><span class="limited check">limitado</span></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '</tr>';
                lightbox += '<tr>';
                lightbox += '<td>Archivo de noticias <span class="info" data-func="showInfo" data-deploy="false"><span class="text-box">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</span></span></td>';
                lightbox += '<td><span class="limited check">limitado</span></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '</tr>';
                lightbox += '<tr>';
                lightbox += '<td>DF UI <span class="info" data-func="showInfo" data-deploy="false"><span class="text-box">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</span></span></td>';
                lightbox += '<td><span class="limited check">limitado</span></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '</tr>';
                lightbox += '<tr>';
                lightbox += '<td>RIPE <span class="info" data-func="showInfo" data-deploy="false"><span class="text-box">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</span></span></td>';
                lightbox += '<td></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '</tr>';
                lightbox += '<tr>';
                lightbox += '<td>DF TV <span class="info" data-func="showInfo" data-deploy="false"><span class="text-box">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</span></span></td>';
                lightbox += '<td></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '</tr>';
                lightbox += '<tr>';
                lightbox += '<td>Aplicaciones DF <span class="info" data-func="showInfo" data-deploy="false"><span class="text-box">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</span></span></td>';
                lightbox += '<td></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '</tr>';
                lightbox += '<tr>';
                lightbox += '<td>Extra Titulares <span class="info" data-func="showInfo" data-deploy="false"><span class="text-box">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</span></span></td>';
                lightbox += '<td></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '</tr>';
                lightbox += '<tr>';
                lightbox += '<td>Papel Digital <span class="info" data-func="showInfo" data-deploy="false"><span class="text-box">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</span></span></td>';
                lightbox += '<td></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '</tr>';
                lightbox += '<tr>';
                lightbox += '<td>Portafolio Personal <span class="info" data-func="showInfo" data-deploy="false"><span class="text-box">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</span></span></td>';
                lightbox += '<td></td>';
                lightbox += ' <td><span class="check"></span></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '</tr>';
                lightbox += '<tr>';
                lightbox += '<td>Centro de Datos <span class="info" data-func="showInfo" data-deploy="false"><span class="text-box">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</span></span></td>';
                lightbox += '<td></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '</tr>';
                lightbox += '<tr>';
                lightbox += '<td>Edición Impresa <span class="info" data-func="showInfo" data-deploy="false"><span class="text-box">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</span></span></td>';
                lightbox += '<td></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '<td><span class="check"></span></td>';
                lightbox += '</tr>';
                lightbox += '</tbody>';
                lightbox += '<tfoot>';
                lightbox += '<tr>';
                lightbox += '<td></td>';
                lightbox += '<td><a href="#" title="Suscribirse" rel="help" class="btn dark-orange">Seleccionar</a></td>';
                lightbox += '<td><a href="#" title="Suscribirse" rel="help" class="btn dark-orange">Seleccionar</a></td>';
                lightbox += '<td><a href="#" title="Suscribirse" rel="help" class="btn dark-orange">Seleccionar</a></td>';
                lightbox += '</tr>';
                lightbox += '</tfoot>';
                lightbox += '</table>';
                lightbox += '</div>';
                lightbox += '<button class="btn cerrar" data-func="closeLightbox">Cerrar</button>';
                lightbox += '</div>';
                
                $('body').append('<div class="cortina"></div>');
                
                $('.cortina').after(lightbox);
                
                methods.handlerEvents($('[data-func]'));//Inicialización del método usado para delegar eventos
            },
            closeLightbox : function ( evento ){
                $('.cortina').remove();
                $('.tarifas').remove();
            }        
        };

        methods.handlerEvents($('[data-func]'));//Inicialización del método usado para delegar eventos
        methods.svgFallBack(); //Detecta si el navegador soporta imagenes en formato SVG, si no es el caso utiliza la imagen en formato PNG de la misma versión
        methods.tabHolderSet($('.tab-holder')); //Setea el slider de contenidos en los tabs de la plantilla Single
        methods.searchAcciones($('#acciones')); //Permite buscar acciones en la lista desde el buscador
        methods.validateForms($('.inscribirForm')); //Permite validar los formularios
       
        //Iguala alturas de elementos
        methods.equalizeHeights($('.equal'));
        $(window).on('resize', function(){
            methods.equalizeHeights($('.equal'));
        });
        
        //A través de Modernizr detectamos las capacidades de s navegadores y cargamos los distintos frameworks Javascript dependiendo del soporte de estos
        Modernizr.load([
            {
                test: $('.slide-tabs') || $('.slide') || $('.mobileSlider'),
                yep: 'http://diariofinanciero.ida.cl/templates/default/js/ninjaSlider.js',
                callback: function(test, key){
                    if(test){
                        //Inicialización para setear carruseles o slider de imágenes a través de NinjaSlider a las clases
                        methods.setCarrusel($('.slide-tabs'));
                        methods.setCarrusel($('.slide'));
                    }
                }
            },
            {
                test: $('#wrapper').length > 0,
                yep: 'http://diariofinanciero.ida.cl/templates/default/js/iscroll5.js',
                callback: function(test, key){
                    if(test){
                        methods.initializeScroll(); //Inicializa IScroll
                    }
                }
            },
            {
                test: window.matchMedia,
                nope: 'http://diariofinanciero.ida.cl/templates/default/js/enquire-polyfill.js',
                both: 'http://diariofinanciero.ida.cl/html/js/enquire.js',
                complete : function(){
                    //Setup para funcionalidades diferenciadas entre dispositivos
                    methods.enquireSetup();
                }
            },
            {
                test: $('[data-func="zenMode"]'),
                yep: 'http://diariofinanciero.ida.cl/templates/default/js/fullScreen-pollyfill.js'
            }         
                    
        ]);
    };

    window.SiteHandler.prototype = window.SiteHandler.methods;
    
    //Cuando el documento está listo
    $(document).ready(function(){
        window.app = new window.SiteHandler();
    });
    
}(this, jQuery));
