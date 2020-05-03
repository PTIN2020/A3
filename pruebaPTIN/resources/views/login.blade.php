@include('menu')
<!--<body class="login">-->
	<div class="container-login clearfix" style="background-image: url('{{ asset('images/background-login2.jpg')}}'); background-repeat: no-repeat; background-size:100% 100%;">
		<div class="login-wrap">
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Iniciar Sessió</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrar-se</label>
				<div class="login-form">
					{{csrf_field()}}
					<form id="formulari_login">
						<div class="sign-in-htm" id="login">
							<div class="group">
								<label for="user" class="label">Direcció electrònica</label>
								<input id="user" type="text" name="correu" class="input">
							</div>
							<div class="group">
								<label for="pass" class="label">Contrasenya</label>
								<input id="pass" type="password" name="contrasenya" class="input" data-type="password">
							</div>
							<div class="group">
								<input id="check" type="checkbox" class="check" checked>
								<label for="check"><span class="icon"></span> Recorda'm </label>
							</div>
							<div class="group">
								<input type="submit" class="button" value="Accedeix">
							</div>
							<div class="hr"></div>
							<div class="foot-lnk">
								<a href="#forgot">He oblidat la contrasenya?</a>
							</div>
						</div>
					</form>
					{{csrf_field()}}
					<form id="formulario">
						<!--@csrf-->
						<div class="sign-up-htm" id="register">
							<div class="group">
								<label for="user" class="label">Nom </label>
								<input id="user" name="nombre" type="text" class="input">
							</div>
							<div class="group">
								<label for="user" class="label">Cognoms</label>
								<input id="user" type="text" name="apellidos" class="input">
							</div>
							<div class="group">
								<label for="user" class="label">NIF</label>
								<input id="user" type="text" name="id_user" class="input">
							</div>
							
							<div class="group">
							  <label for="user" class="label">GÈNERE</label>
							  <label for="home"  style="padding:10px; color:#FFFFFF"><input type="radio" class="input" value="home" name="genere" checked>Home</label>
							  <label for="dona" style="padding:10px; color:#FFFFFF"><input type="radio" class="input" value="dona" name="genere">Dona</label>
							  <label for="altre" style="padding:10px; color:#FFFFFF"><input type="radio" class="input" value="altre" name="genere">Altre</label>
							</div>
					
							<div class="group">
								<label for="user" class="label">Telèfon</label>
								<input id="user" type="text" name="telefono" class="input">
							</div>
							<div class="group">
								<label for="pass" class="label">Direcció electrònica</label>
								<input id="username" type="text" name="username" class="input">
							</div>
							<div class="group">
								<label for="password" class="label">Contrasenya</label>
								<input id="password" type="password" name="password" class="input" data-type="password">
							</div>
							<div class="group">
								<label for="pass2" class="label">Repetir contrasenya</label>
								<input id="pass2" type="password" name="confirm_password" class="input confirm_password" data-type="password">
							</div>
							<div class="group">
								<input type="submit" class="button" value="Dóna'm d'alta">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
		$("#tab-2").click(function(){
		  $('#register').show();
		  $('#login').hide();
		  
		});

		$("#tab-1").click(function(){
		  $("#register").hide();
		  $("#login").show();
		});
		
	</script>
@include('footer')
@include('sweet::alert')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
$(document).ready(function(){
	$.validator.addMethod('strongPassword', function (value, element) {
        return this.optional(element) || value.length >= 8 && /\d/.test(value) && /[a-z]/i.test(value);
    }, 'La contrasenya ha de tenir al menys 8 caràcters i al menys 1 lletra i 1 número');
	$.validator.addMethod('nif', function(value,element){
    return this.optional(element) || /[0-9]{8}[a-z]$/i.test(value);
	});
    $('#formulario').validate({ // initialize the plugin
        rules: {
            username: {
                required: true,
                email: true
            },
			
			id_user: {
                required: true,
				nif: true
            },
			
			password: {
                required: true,
				strongPassword: true
            },
			
			confirm_password: {
				required: true,
				strongPassword: true,
				equalTo: "#password"
			}
        },
        messages: {
            username: {
                required: "L'email és un camp obligatori",
                email: "L'email indicat no és correcte"
            },
			
			id_user: {
                required: "El NIF és un camp obligatori",
                nif: "El DNI està format per 8 números i una lletra"
            },
			
			password: {
                required: "La password és un camp obligatori",
            },
			confirm_password: {
                required: "Les contrasenyes no coincidexien."
            },
        },
        submitHandler: function (form) { 
            var formulario = btoa(JSON.stringify($("#formulario input").serializeArray()));

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $("input[name^='_token']").val()
                }
            });

            $.ajax({
                type: "POST",
                url: "addPasajero", 
                data: {
                    "formulario" : formulario
                },
                dataType: "json",   
                success: function(data){
                    RESPUESTA = data["estado"];
                    switch (RESPUESTA) {
                        case "ok":
							$(function() {
								swal({
									title: "Benvingut!",
									text: "",
									type: "success",
									timer: 4000
								}, function() {
									window.location.href = '/pruebaPTIN/public/'								
								});
							});
                            break;
                        case "ko":
                            swal({
								text: "",
								title: "El passatger indicat ja existeix",
								timer: 6000,
								type: "error",
							});
                            break;
                    }
                }
            });
        }
    });
	
	$('#formulari_login').validate({ // initialize the plugin
        rules: {
            correu: {
                required: true,
                email: true
            },
            contrasenya: {
                required: true,
                strongPassword: true
            }
        },
        messages: {
            correu: {
                required: "L'email és un camp obligatori",
                email: "L'email indicat no és correcte"
            },
            contrasenya: {
                required: "La password és un camp obligatori",
            },
        },
        submitHandler: function (form) { 
            var formulari_login = btoa(JSON.stringify($("#formulari_login input").serializeArray()));

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $("input[name^='_token']").val()
                }
            });

            $.ajax({
                type: "POST",
                url: "loginPasajero", 
                data: {
                    "formulari_login" : formulari_login
                },
                dataType: "json",
                success: function(data){
                    RESPUESTA = data["estado"];
                    switch (RESPUESTA) {
                        case "ok":
							$(function() {
								swal({
									title: "Benvingut!",
									text: "",
									type: "success",
									timer: 4000
								}, function() {
									window.location.href = '/pruebaPTIN/public/'								
								});
							});

                            break;
						case "casi":
							$(function() {
								swal({
									text: "",
									title: "Contrasenya incorrecte",
									timer: 6000,
									type: "error",
								});
							});
							break;
                        case "ko":
                            swal({
								text: "",
								title: "El passatger indicat no existeix",
								timer: 6000,
								type: "error",
							});
							break;
                    }
                }
            });
        }
    });
	
	

});   
</script>
<style>
    label.error {
        color: white !important;
        font-size: 1.5rem !important;
    }
</style>