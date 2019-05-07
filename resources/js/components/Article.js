import React from 'react';

const article = () => {
    return (
        <article className="marginCenter maxWidth letras">
            <h2 className="center bold">Historia de la República Dominicana</h2>
            <div className="magic"></div>
            <div className="desarrolloArticulo">
                <p className="center letras">La República Dominicana se fundó en el año 1844 después de muchos años de opresión bajo los Haitianos.
                        Durante los 22 años que precedieron a la independencia, toda la isla de La Española estuvo bajo el dominio de Haití.
                Después de los esfuerzos hechos por patriotas dominicanos para independizar el país del dominio haitiano, varias acciones
                militares ocurridas entre 1844 y 1856 terminaron por consolidar a la república como un nuevo estado. Los haitianos intentaron
                varias veces volver a dominar la recién creada república con resultados fallidos hasta que en 1867 Haití reconoció la
                independencia dominicana.</p>
                <div>
                    <img src="/imagenes/padresDeLaPatria.jpeg" alt="Padres de la patria" className="padresdelapatria" />
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
        </article> 
    );
};

export default article;