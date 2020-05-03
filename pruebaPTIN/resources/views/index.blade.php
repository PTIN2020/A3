@include('menu')
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <section class="parallax-container overlay-1" data-parallax-img="images/avion.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
            <div class="container text-center pt-5">
                <p style="font-size:5vw;font-family:Courier;font-weight:bold"><br/>VILANOVA INTELLIGENT AIRPORT</p>
            </div>
        </div>
      </section>
      <section class="section section-lg" style="background: rgba(165,227,243,0.8);">  <!--color de fondo nuevo-->
          <div class="container text-align:center">
              <p style="font-size:30px;font-family:Courier;font-weight:bold;text-align:center;color:black;"><br/>Vols realitzar una <a href="" style="color:#014797;text-decoration:underline;">consulta</a> sobre algun vol en concret? Endavant! </p>
          </div>
          <div class="container">
            <div class="box-booking">
              <div class="trip-circle">
                  <div class="single-trip-circle">
                  <input type="radio" id="radio01" name="radio" />
                      <label for="radio01">
                      <span class="round-boarder">
                      <span class="round-boarder1"></span>
                      </span>Anada i tornada</label>
                  </div>
                  <div class="single-trip-circle">
                      <input type="radio" id="radio02" name="radio" />
                              <label for="radio02">
                                  <span class="round-boarder">
                                      <span class="round-boarder1"></span>
                                          </span>Nomes anada
                                              </label>
                  </div>
              </div>
			  {{csrf_field()}}
              <form id="formulario_vuelos" class="rd-form rd-mailform booking-form">
                  <div>
                      <p class="booking-title1">Destí</p>
                          <div class="form-wrap">
                                <input class="form-input" id="booking-destino" type="text" name="destino" data-constraints="@Required">
                                <label class="form-label" for="booking-destí"></label>
                          </div>
                  </div>
                  <div>
                      <p class="booking-title2">Anada</p>
                      <div class="form-wrap form-wrap-icon"><span class="icon mdi mdi-calendar-text"></span>
                          <input class="form-input" id="booking-date01" type="text" name="fecha_origen"  data-time-picker="date">
                      </div>
                  </div>
                  <div id="tornada">
                      <p class="booking-title3">Tornada</p>
                      <div class="form-wrap form-wrap-icon"><span class="icon mdi mdi-calendar-text"></span>
                          <input class="form-input" id="booking-date02" type="text" name="fecha_destino"  data-time-picker="date">
                      </div>
                  </div>

				  <div>
				  <button class="button button-lg button-gray-600" type="submit">Consulta</button>
				  </div>
			  </form>
			</div>
			
			<div style="overflow-x:auto; overflow-y:auto; max-height:500px;">
			  <table id="myTable" class="table table-dark table-striped table-vuelos .table-wrapper-scroll-x" style="border-radius: 7px;">
				<thead>
				</thead>
				<tbody>

				</tbody>
			  </table>
			</div>
			
			
          </div>
      </section>
      <section class="section section-lg bg-white">
          <div class="container">
            <div class="row row-50 justify-content-xl-between align-items-lg-center">	
              <div class="col-lg-7 wow fadeInLeft">
                <div class="box-image"><a href=""><img class="box-image-static" src="{{ asset('images/map.png') }}" alt="" border="5" width="400" height="357"/></a>
                </div>
              </div>
              <div class="col-lg-6 col-xl-5 wow fadeInRight">
                <h2><a href="" style="color:#014797;">Mapa de geolocalització</a></h2>
                <p align=center style="font-size:25px;">Consulta aquí quina és la teva posició al mapa de l'aeroport o altres aspectes com on es troben els diferents establiments d'alimentació, informació, serveis... </p>
              </div>
            </div>
          </div>
      </section>
      <section class="section section-lg" style="background: rgba(165,227,243,0.8);>   <!--color de fondo nuevo-->
          <div class="container">
            <div class="row row-50 justify-content-xl-between align-items-lg-center">
              <div class="col-lg-6 wow fadeInLeft">
                  <h2 align=center><a href="" style="color:#014797;">Informació de l'aeroport</a></h2>
                  <p align=center style="font-size:25px;">Aquí podràs trobar informació sobre les companyies que treballen amb l'aeroport, sobre punts d'interés de la ciutat o inclús sobre la història de l'aeroport.</p>
              </div>
              <div class="col-lg-6 col-xl-5 wow fadeInRight">
                  <div class="box-image"><a href=""><img class="box-image-static" src="{{ asset('images/info.png') }}" alt="" border="5" width="420" height="357"/></a></div>
              </div>
            </div>
          </div>
      </section>
      <section class="section section-lg bg-white text-center">
          <div class="container">
            <div class="row row-50 justify-content-xl-between align-items-lg-center">
              <div class="col-lg-6 wow fadeInLeft">
                <div class="box-image"><a href=""><img class="box-image-static" src="{{ asset('images/letter.png') }}" alt="" border="5" width="330" height="307"/></a>
                </div>
              </div>
              <div class="col-lg-6 col-xl-5 wow fadeInRight">
                <h2><a href="" style="color:#014797;">Contacta amb nosaltres!</a></h2>
                <p align=center style="font-size:25px;">No dubtis en contactar amb nosaltres en cas de tenir algun dubte, demanar un servei o fer una reclamació.</p>
              </div>
            </div>
          </div>
      </section>
	</div>
@include('footer')
<script src="js/script.js"></script>
<script>
$("#radio02").click(function(){
  $('#booking-date01').show();
  $('#booking-date02').hide(); 
  $('#tornada').hide(); 

});
$("#radio01").click(function(){
  $("#booking-date02").show();
  $('#tornada').show(); 

});
</script>

@include('sweet::alert')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
	$(document).ready(function(){

		$('#formulario_vuelos').validate({ // initialize the plugin
			/*rules: {
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
			},*/
			submitHandler: function (form) { 
				var formulario_vuelos = btoa(JSON.stringify($("#formulario_vuelos input").serializeArray()));

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $("input[name^='_token']").val()
					}
				});

				$.ajax({
					type: "POST",
					url: "consulta_vuelos", 
					data: {
						"formulario_vuelos" : formulario_vuelos
					},
					dataType: "json",
					success: function(data){
						//console.log(data);
						//data.forEach(element => console.log(element));
						$('#myTable > thead').append('<tr><td>Codi</td><td>Origen</td><td>Destí</td><td>Data</td><td>Hora</td><td>Aerolínia</td><td>Porta</td><td>Estat</td></tr>');
						for (var valor of data) {
						  console.log("Valor: " + valor["origen"]);
						  //hacer funcion para usar append
						  $('#myTable > tbody:last-child').append('<tr><td>'+valor["id"]+'</td><td>'+valor["origen"]+'</td><td>'+valor["destino"]+'</td><td>'+valor["fecha"]+'</td><td>'+valor["hora"]+'</td><td>'+valor["aerolinea"]+'</td><td>'+valor["puerta"]+'</td><td>'+valor["estado"]+'</td></tr>');
						}
						//window.location.href = '/pruebaPTIN/public/vuelos'	
						/*RESPUESTA = data["estado"];
						switch (RESPUESTA) {
							case "ok":
								window.location.href = '/pruebaPTIN/public/vuelos'								
								break;
							case "ko":
								swal({
									text: "",
									title: "No existeixen vols amb aquestes característiques",
									timer: 6000,
									type: "error",
								});
								break;
						}*/
					}
				});
			}
		});
		
	}); 
</script>