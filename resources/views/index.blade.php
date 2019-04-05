<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor......
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>Historia Dominicana</title>
        <!--Css-->
        <link rel="stylesheet" type="text/css" href="css/Style.css">
        <link rel="stylesheet" type="text/css" href="css/modalLogin.css">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/reset.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel="stylesheet" href="css/modalLogin/modalLogin.css">
        <link rel="stylesheet" href="css/alertify/alertify.css">
        <link rel="stylesheet" href="css/alertify/themes/default.css">
        <link rel="stylesheet" href="terceros/MDB_Free/css/mdb.min.css">
    </head>
    <body>
            <div>
                <div id="contenedorAcceder" class="contenedorAcceder">
                    <div id="botonesLogin" class="botonesLogin">
                        
                        <?php 
                            if(isset($_SESSION['login'])){ //Aqui no se usa session_start() porque ya está activado en php.ini?>
                                <span data-toggle="tooltip" class="agregarArticulo"><button id="agregarArticulo" data-target="#fullHeightModalBottom" data-toggle="modal" class="btn acceder cd-signin waves-effect waves-light" title="Agregar Articulo" data-placement="left"> <i class="fa fa-plus"></i></button></span><a id="cerrarSesion" class="cerrarSesion">Cerrar sesión</a>
                                <?php
                            }else{ ?>
                                <span data-toggle="modal"><button id="iniciarSesion" data-toggle="modal" class="accederLogin cd-signin" data-toggle="tooltip" title="Iniciar sesión" data-placement="left">Iniciar sesión</button></span>
                           <?php }
                        ?>
                    </div>
                    <!-- <span data-toggle="modal"><button id="agregarArticulo" data-toggle="modal" class="btn acceder cd-signin" data-toggle="tooltip" title="Agregar Articulo" data-placement="left"> <i class="fa fa-plus"></i></button></span> -->
                </div>
            </div>
            <header>
                <div id="mostrarNav"></div>
                <nav id="menu">
                    <ul class="menu">
                        <li class="active"><a href="#">Inicio</a></li>
                        <li><a href="#">Independencia Efímera</a></li>
                        <li><a href="#">Invasión y ocupación haitiana</a></li>
                        <li><a href="#">Independencia Dominicana</a></li>
                        <li><a href="#">Haití intenta dominar R. Dominicana</a></li>
                    </ul>
                </nav>
            </header>
<!-- Full Height Modal Right -->
<div class="modal fade bottom" id="fullHeightModalBottom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-full-height modal-bottom" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header magenta">
            <h4 class="modal-title w-100" id="myModalLabel">Agregar Articulo</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" style="color:white">×</span>
            </button>
          </div>
          <!--Body-->
          <div class="modal-body">
            <textarea name="cuerpoArticulo" id="cuerpoArticulo" cols="30" rows="10"></textarea>
          </div>
          <!--Footer-->
          <div class="modal-footer">
            <button type="button" class="btn botonRojo waves-effect waves-light" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn botonMagenta waves-effect waves-light">Guardar cambios</button>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
  <!-- Full Height Modal Right -->

<div class="cd-user-modal" id="modalLog"> <!-- this is the entire modal form, including the background -->

</div> <!-- cd-user-modal -->
        
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Iniciar sesión</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="/examples/actions/confirmation.php" method="post">
					<div class="form-group">
						<i class="fa fa-user"></i>
						<input type="text" class="form-control" placeholder="Nombre de usuario" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" class="form-control" placeholder="Contraseña" required="required">					
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" value="Acceder">
					</div>
				</form>				
				
			</div>
			<div class="modal-footer">
				<a href="#">¿Olvidaste tu contraseña?</a>
			</div>
		</div>
	</div>
</div>


        <div class="letras">
            <article class="marginCenter maxWidth letras first">
                <h2 class="center bold ">Historia de la República Dominicana</h2>
                        <div class="magic"></div>
                    <div class="desarrolloArticulo " style="overflow: hidden !important">
                        <p class="center letras">La República Dominicana se fundó en el año 1844 después de muchos años de opresión bajo los Haitianos.
                        Durante los 22 años que precedieron a la independencia, toda la isla de La Española estuvo bajo el dominio de Haití.
                        Después de los esfuerzos hechos por patriotas dominicanos para independizar el país del dominio haitiano, varias acciones
                        militares ocurridas entre 1844 y 1856 terminaron por consolidar a la república como un nuevo estado. Los haitianos intentaron
                        varias veces volver a dominar la recién creada república con resultados fallidos hasta que en 1867 Haití reconoció la
                        independencia dominicana.</p>
                        <div>
                            <img src="./imagenes/padresDeLaPatria.jpeg" alt="Padres de la patria" class="padresdelapatria">
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
        </div>
        <div class="letras">
            <article class="marginCenter maxWidth letras">
                    <h2 class="center bold">Historia de la República Dominicana</h2>
                        <div class="magic"></div>
                    <div class="desarrolloArticulo" style="overflow: hidden !important">
                        <p class="center letras">La República Dominicana se fundó en el año 1844 después de muchos años de opresión bajo los Haitianos.
                                Durante los 22 años que precedieron a la independencia, toda la isla de La Española estuvo bajo el dominio de Haití.
                        Después de los esfuerzos hechos por patriotas dominicanos para independizar el país del dominio haitiano, varias acciones
                        militares ocurridas entre 1844 y 1856 terminaron por consolidar a la república como un nuevo estado. Los haitianos intentaron
                        varias veces volver a dominar la recién creada república con resultados fallidos hasta que en 1867 Haití reconoció la
                        independencia dominicana.</p>
                        <div>
                            <img src="./imagenes/padresDeLaPatria.jpeg" alt="Padres de la patria" class="padresdelapatria">
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
        </div>
        <div class="letras">
            <article class="marginCenter maxWidth letras">
                    <h2 class="center bold">Historia de la República Dominicana</h2>
                        <div class="magic"></div>
                    <div class="desarrolloArticulo" style="overflow: hidden !important">
                        <p class="center letras">La República Dominicana se fundó en el año 1844 después de muchos años de opresión bajo los Haitianos.
                                Durante los 22 años que precedieron a la independencia, toda la isla de La Española estuvo bajo el dominio de Haití.
                        Después de los esfuerzos hechos por patriotas dominicanos para independizar el país del dominio haitiano, varias acciones
                        militares ocurridas entre 1844 y 1856 terminaron por consolidar a la república como un nuevo estado. Los haitianos intentaron
                        varias veces volver a dominar la recién creada república con resultados fallidos hasta que en 1867 Haití reconoció la
                        independencia dominicana.</p>
                        <div>
                            <img src="imagenes/padresDeLaPatria.jpeg" alt="Padres de la patria" class="padresdelapatria">
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
        </div>
        <br>

        <?php
        // put your code here
        ?>
        <!--Todos los documentos JavaScript-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.0/TweenMax.min.js"></script>
        <script src="./js/Scrollmagic/ScrollMagic.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/jquery.ScrollMagic.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
        <script src="js/velocity.min.js" type="text/javascript"></script>
        <script src="js/Scrollmagic/plugins/animation.velocity.js" type="text/javascript"></script>
        <script src="js/alertify/alertify.js"></script>
        <script  src="js/modalLogin/modalLogin.js"></script>
        <script src="terceros/ckeditor/ckeditor.js"></script>
        <script src="terceros/MDB_Free/js/mdb.min.js"></script>
        <script src="js/Script.js" type="text/javascript"></script>
    </body>
</html>
