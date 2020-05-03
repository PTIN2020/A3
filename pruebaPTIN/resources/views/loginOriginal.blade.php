@include('menu')
<!--<body class="login">-->
	<div class="container-login clearfix" style="background-image: url('{{ asset('images/background-login2.jpg')}}'); background-repeat: no-repeat; background-size:100% 100%;">
		<div class="login-wrap">
			<div class="login-html">
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Iniciar Sessió</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrar-se</label>
				<div class="login-form">
					<div class="sign-in-htm" id="login">
						<div class="group">
							<label for="user" class="label">Direcció electrònica</label>
							<input id="user" type="text" class="input">
						</div>
						<div class="group">
							<label for="pass" class="label">Contrasenya</label>
							<input id="pass" type="password" class="input" data-type="password">
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
					<form method="POST" action="{!! route('register') !!}" enctype="multipart/form-data">
						@csrf
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
							 <div class="dropdown">
							  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
								Genere
							  </button>
							  <div class="dropdown-menu">
								<a class="dropdown-item" href="#">Home</a>
								<a class="dropdown-item" href="#">Dona</a>
								<a class="dropdown-item" href="#">Altre</a>
							  </div>
							 </div> 
							</div>
							
							<!--<div class="group">	
								<div class="form-group">
									<label for="inputGenere">Genere: </label>
									<select class="form-control" id="generos" name = "genero">
										<option value="Home">Home</option>
										<option value="Dona">Dona</option>
										<option value="Altre">Altre</option>
									</select>
								</div>
							</div>-->
							
							<div class="group">
								<label for="user" class="label">Telèfon</label>
								<input id="user" type="text" name="telefono" class="input">
							</div>
							<div class="group">
								<label for="pass" class="label">Direcció electrònica</label>
								<input id="pass" type="text" name="username" class="input">
							</div>
							<div class="group">
								<label for="pass" class="label">Contrasenya</label>
								<input id="pass" type="password" name="password" class="input" data-type="password">
							</div>
							<div class="group">
								<label for="pass" class="label">Repetir contrasenya</label>
								<input id="pass" type="password" class="input" data-type="password">
							</div>
							<div class="group">
								<input type="submit" class="button" value="Dóna'm d'alta">
							</div>
							<!--<div class="hr"></div>
							<div class="foot-lnk">
								<label for="tab-1">Already Member?</a>
							</div>-->
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
<!--</body>-->
@include('footer')