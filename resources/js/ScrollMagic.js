export const SceneFade = selector => {
    let controller = new ScrollMagic.Controller(); //Controlador de Scroll Magic
    $(selector).each(function(){
        new ScrollMagic.Scene({ //Haciendo la escena
            triggerElement: this,
            triggerHook: 0
        }).setVelocity($(this).closest('article'),{opacity: 0}, {duration: 200})//Libreria de animación
        .addTo(controller);//Agregando la escena al controlador
    });
}