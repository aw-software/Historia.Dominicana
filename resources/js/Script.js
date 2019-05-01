/*
 Project: HistoriaDominicana
 File: Script
 Created by Hamil on May 5, 2018 - 10:13:27 AM.
 */

 import React from 'react';
 import ReactDOM from 'react-dom';
import Article from './components/Article'

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

    ReactDOM.render(Article, document.getElementById('letras'));
});
