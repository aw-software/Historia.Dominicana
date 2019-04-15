<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
    <ul class="cd-switcher">
        <li><a href="#0" id="iniciarSesion" class="selected">Iniciar sesión</a></li>
        <li><a href="#0">Crear cuenta</a></li>
    </ul>
    
    <div id="cd-login"> <!-- log in form -->
        <form id="login" class="cd-form">
            <p class="fieldset">
                <label class="image-replace cd-email" for="signin-email">Correo electrónico</label>
                <input name="correo" class="full-width has-padding has-border validation" id="signin-email" type="email" placeholder="Correo electrónico">
                <span class="cd-error-message">Campo vacío</span>
            </p>

            <p class="fieldset">
                <label class="image-replace cd-password" for="signin-password">Contraseña</label>
                <input name="contrasena" class="full-width has-padding has-border validation" id="signin-password" type="password"  placeholder="Contraseña">
                <span class="cd-error-message">Campo vacío</span>
                <a href="#0" class="hide-password">Mostrar</a>
            </p>

            <p class="fieldset">
                <input name="recordar" type="checkbox" id="remember-me" checked>
                <label for="remember-me">Recordar</label>
            </p>

            <p class="fieldset">
                <input class="full-width" type="submit" value="Iniciar sesión" formulario="cd-login">
            </p>
        </form>
        
        <p class="cd-form-bottom-message"><a href="#0">¿Olvidaste tu contraseña?</a></p>
        <!-- <a href="#0" class="cd-close-form">Close</a> -->
    </div> <!-- cd-login -->

    <div id="cd-signup"> <!-- sign up form -->
        <form id="signup" class="cd-form">
            <p class="fieldset">
                <label class="image-replace cd-username" for="signup-username">Nombre de usuario</label>
                <input class="full-width has-padding has-border validation" id="signup-username" name="nombre" type="text" placeholder="Nombre">
                <span class="cd-error-message">Campo vacío</span>
            </p>

            <p class="fieldset">
                <label class="image-replace cd-email" for="signup-email">Correo electrónico</label>
                <input class="full-width has-padding has-border validation correo" id="signup-email" correoRegistro="correoRegistro" name="correo" type="email" placeholder="Correo electrónico">
                <span class="cd-error-message">Campo vacío</span>
                <span class="cd-error-message correo">El correo está incorrecto</span>
            </p>

            <p class="fieldset">
                <label class="image-replace cd-password" for="signup-password">Contraseña</label>
                <input class="full-width has-padding has-border validation" id="signup-password" name="contrasena" type="password"  placeholder="Contraseña">
                <span class="cd-error-message">Campo vacío</span>
                <a href="#0" class="hide-password">Mostrar</a>
            </p>

            <p class="fieldset">
                <input type="checkbox" id="accept-terms">
                <label for="accept-terms">Acepto los <a href="#0">términos</a></label>
            </p>

            <p class="fieldset">
                <input class="full-width has-padding" type="submit" value="Crear Cuenta" formulario="cd-signup">
            </p>
        </form>

        <!-- <a href="#0" class="cd-close-form">Close</a> -->
    </div> <!-- cd-signup -->

    <div id="cd-reset-password"> <!-- reset password form -->
        <p class="cd-form-message">¿Perdiste tú contraseña? Introduce tú correo electrónico. Recibiras un correo para crear una contraseña nueva.</p>

        <form class="cd-form">
            <p class="fieldset">
                <label class="image-replace cd-email" for="reset-email">Correo</label>
                <input class="full-width has-padding has-border validation" id="reset-email" type="email" placeholder="Correo">
                <span class="cd-error-message">Campo vacío</span>
            </p>

            <p class="fieldset">
                <input class="full-width has-padding" type="submit" value="Restablecer contraseña" formulario="cd-reset-password" message="Contraseña restablecida">
            </p>
        </form>

        <p class="cd-form-bottom-message"><a href="#0">Volver a iniciar sesión</a></p>
    </div> <!-- cd-reset-password -->
    <a href="#0" class="cd-close-form">Cerrar</a>
</div>