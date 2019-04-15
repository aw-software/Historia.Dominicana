function validarEmail(valor) {
	if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)){
	 $('form#signup span.cd-error-message.correo').removeClass('is-visible');
	 return true;
	} else {
		$('form#signup span.cd-error-message.correo').addClass('is-visible');
		return false;
	}
  }

jQuery(document).ready(function($){
	var $form_modal = $('.cd-user-modal'),
		$form_login = $('.cd-user-modal').find('#cd-login'),
		$form_signup = $('.cd-user-modal').find('#cd-signup'),
		$form_forgot_password = $('.cd-user-modal').find('#cd-reset-password'),
		$form_modal_tab = $('.cd-switcher'),
		$tab_login = $('.cd-switcher').children('li').eq(0).children('a'),
		$tab_signup = $('.cd-switcher').children('li').eq(1).children('a'),
		$forgot_password_link = $('.cd-user-modal').find('#cd-login').find('.cd-form-bottom-message a'),
		$back_to_login_link = $('.cd-user-modal').find('#cd-reset-password').find('.cd-form-bottom-message a'),
		$main_nav = $('button#iniciarSesion');

	//open modal
	$(document).on('click','button#iniciarSesion',function(event){
		setTimeout(function(){
			$('.cd-user-modal').addClass('is-visible');
			setTimeout(function(){
				login_selected();
			},10);
		}, 1000);
	});

	//close modal
	$(document).on('click','.cd-user-modal',function(event){
		if( $(event.target).is($('.cd-user-modal')) || $(event.target).is('.cd-close-form') ) {
			$('.cd-user-modal').removeClass('is-visible');
		}	
	});
	//close modal when clicking the esc keyboard button
	$(document).keyup(function(event){
    	if(event.which=='27'){
    		$('.cd-user-modal').removeClass('is-visible');
	    }
    });

	//switch from a tab to another
	$(document).on('click','.cd-switcher', function(event) {
		event.preventDefault();
		($(event.target).is($('.cd-switcher').children('li').eq(0).children('a'))) ? login_selected() : signup_selected();
	});

	//hide or show password
	$(document).on('click','.hide-password',function(){
		var $this= $(this),
			$password_field = $this.siblings('input');
		
		( 'password' == $password_field.attr('type') ) ? $password_field.attr('type', 'text') : $password_field.attr('type', 'password');
		( 'Mostrar' == $this.text() ) ? $this.text('Ocultar') : $this.text('Mostrar');
		//focus and move cursor to the end of input field
		$password_field.putCursorAtEnd();
	});

	//show forgot-password form 
	$(document).on('click','.cd-user-modal div#cd-login .cd-form-bottom-message a',function(event){
		event.preventDefault();
		forgot_password_selected();
	});

	//back to login from the forgot-password form
	$(document).on('click','.cd-user-modal div#cd-reset-password .cd-form-bottom-message a',function(event){
		event.preventDefault();
		login_selected();
	});

	function login_selected(){
		$('.cd-user-modal').find('#cd-login').addClass('is-selected');
		$('.cd-user-modal').find('#cd-signup').removeClass('is-selected');
		$('.cd-user-modal').find('#cd-reset-password').removeClass('is-selected');
		$('.cd-switcher').children('li').eq(0).children('a').addClass('selected');
		$('.cd-switcher').children('li').eq(1).children('a').removeClass('selected');
	}

	function signup_selected(){
		$('.cd-user-modal').find('#cd-login').removeClass('is-selected');
		$('.cd-user-modal').find('#cd-signup').addClass('is-selected');
		$('.cd-user-modal').find('#cd-reset-password').removeClass('is-selected');
		$('.cd-switcher').children('li').eq(0).children('a').removeClass('selected');
		$('.cd-switcher').children('li').eq(1).children('a').addClass('selected');
	}

	function forgot_password_selected(){
		$('.cd-user-modal').find('#cd-login').removeClass('is-selected');
		$('.cd-user-modal').find('#cd-signup').removeClass('is-selected');
		$('.cd-user-modal').find('#cd-reset-password').addClass('is-selected');
	}

	//REMOVE THIS - it's just to show error messages (Hecho por Victor Diaz)
	$(document).on('click','div.cd-user-modal input[type="submit"]',function(event){
		event.preventDefault();
		var formulario = $(this).attr('formulario'),
		form = $('.cd-user-modal').find('#' + formulario),
		input = form.find('input.validation'),
		boolean = true;
		
		$(input).each(function(){
			if($(this).val().length == 0){
				$(this).toggleClass('has-error').next('span').toggleClass('is-visible');
				$('span.cd-error-message').filter('.correo').removeClass('is-visible');
				boolean = false;
			}else if($(this).hasClass('correo')){
				if(!validarEmail($(this).val())){
					$(this).toggleClass('has-error').next('span').toggleClass('is-visible');
					boolean = false;
				}
			}
		});
		if(boolean){
			$('.cd-user-modal').removeClass('is-visible'); //Esto es lo que determina si se cierra el modal
			if($(this).attr("message")){
				alertify.success($(this).attr('message'));
			}
		}
	});

	//IE9 placeholder fallback
	//credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html
	if(!Modernizr.input.placeholder){
		$('[placeholder]').focus(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
				input.val('');
		  	}
		}).blur(function() {
		 	var input = $(this);
		  	if (input.val() == '' || input.val() == input.attr('placeholder')) {
				input.val(input.attr('placeholder'));
		  	}
		}).blur();
		$('[placeholder]').parents('form').submit(function() {
		  	$(this).find('[placeholder]').each(function() {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
			 		input.val('');
				}
		  	})
		});
	}
	console.log("El documento modalLogin.js está cargado");
});


//credits https://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
jQuery.fn.putCursorAtEnd = function() {
	return this.each(function() {
    	// If this function exists...
    	if (this.setSelectionRange) {
      		// ... then use it (Doesn't work in IE)
      		// Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
      		var len = $(this).val().length * 2;
      		this.setSelectionRange(len, len);
    	} else {
    		// ... otherwise replace the contents with itself
    		// (Doesn't work in Google Chrome)
      		$(this).val($(this).val());
    	}
	});
};