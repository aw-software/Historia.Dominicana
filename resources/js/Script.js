/*
 Project: HistoriaDominicana
 File: Script
 Created by Hamil on May 5, 2018 - 10:13:27 AM.
 */

 import React from 'react';
 import ReactDOM from 'react-dom';
import '../css/Style.css';

$(document).ready(function(){
    console.log("El documento 'Script' de Historia Dominicana está listo.");

    CKEDITOR.replace('cuerpoArticulo');
    $('[data-toggle="tooltip"]').tooltip();

    var controller = new ScrollMagic.Controller(); //Controlador de Scroll Magic

    $('div.magic').each(function(){
        var scene = new ScrollMagic.Scene({ //Haciendo la escena
            triggerElement: this,
            triggerHook: 0
        }).setVelocity($(this).closest('article'),{opacity: 0}, {duration: 400})//Libreria de animación
        .addTo(controller);//Agregando la escena al controlador
    });
    
    $(document).on('click','ul li a', function(){
        $('ul.menu li').removeClass("active");
        $(this).parent().addClass("active");
    });

    $(document).on('click','div#mostrarNav',function(){
        $('nav#menu').toggleClass('mostrar');
        $(this).toggleClass('cerrar');
    });

    $(document).on('click','button#iniciarSesion',function(){
        $.get('login', ((data)=>{
            $('div#modalLog').html(data);
            setTimeout(()=>{
                $('li a#iniciarSesion').click();
            }, 1000);
        }));
    });

    $(document).on('click','input[formulario="cd-signup"]',function(){
        var datos = $('#signup').serialize();
        datos += "&metodo=crearUsuario";
        if(validarEmail($('form#signup input[type="email"]').val())){
            $.ajax({
                type: "POST",
                url: "controladores/mainController.php",
                data: datos,
                dataType: "json"
            }).done(function(data){
                (data.option == 'error')?alertify.error(data.message):alertify.success(data.message);
            });
        }
    });
    
    $(document).on('click','input[formulario="cd-login"]',function(){
        var datos = $('form#login').serialize();
        datos += "&metodo=iniciarSesion";
        $.ajax({
            type: "POST",
            url: "controladores/mainController.php",
            data: datos,
            dataType: "json"
        }).done(function(data){
            (data.option == 'error')?alertify.error(data.message):alertify.success(data.message);
            $('div#botonesLogin').html(data.boton);
        });
    });

    $(document).on('click','a#cerrarSesion',function(){
        $.ajax({
            type: "POST",
            url: "controladores/mainController.php",
            data: "metodo=cerrarSesion",
            dataType: "json"
        }).done(function(data){
            $('div#botonesLogin').html(data.boton);
        });
    });

    const Article = (
        <div>
            <h2 className="center bold ">Historia de la República Dominicana</h2>
                        <div className="magic"></div>
                    <div className="desarrolloArticulo " style="overflow: hidden !important">
                        <p className="center letras">La República Dominicana se fundó en el año 1844 después de muchos años de opresión bajo los Haitianos.
                        Durante los 22 años que precedieron a la independencia, toda la isla de La Española estuvo bajo el dominio de Haití.
                        Después de los esfuerzos hechos por patriotas dominicanos para independizar el país del dominio haitiano, varias acciones
                        militares ocurridas entre 1844 y 1856 terminaron por consolidar a la república como un nuevo estado. Los haitianos intentaron
                        varias veces volver a dominar la recién creada república con resultados fallidos hasta que en 1867 Haití reconoció la
                        independencia dominicana.</p>
                        <div>
                            <img src="/imagenes/padresDeLaPatria.jpeg" alt="Padres de la patria" className="padresdelapatria"/>
                        </div>
                        <p>
                            La palabra Dominicana proviene del latín Dominicus, que significa Domingo. Sin embargo, la isla tiene este nombre por
                            Santo Domingo de Guzmán, fundador de la Orden de los Dominicos.
                        </p>
                        <p>
                            Esta es una introducción a todo lo que usted será capaz de ver en esta página web, para seguir viendo más puede darle
                            al menú de la parte superior izquierda y elegir un evento que usted desee (estos eventos están ordenados de forma cronologica).
                        </p>
                    </div>
        </div>
    );

    let helloWorld  = (
        <Article className="marginCenter maxWidth letras first" />
    );

    ReactDOM.render(helloWorld, document.getElementById('letras'));
});
