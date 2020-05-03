@include('menu')
      
	   <section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
        <div class="main-bunner-img" style="background-image: url(&quot;images/portada_contacto.jpg&quot;); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="box-default">
              <br><h1 class="box-default-title"><p style="color:white;">CONTACTE </h1>
              <br><div class="box-default-decor"></div>
              <p class="big box-default-text">Vols contactar amb l'Aeroport? En aquesta pàgina trobràs la informació de contacte de V.I.A: telèfon, email, adreça, mapa de localització de tot l'Aeroport, i un formulari per enviar-nos consultes, dubtes i altres comentaris. </p>
			  <div class="box-default-decor"></div>
			</div>
          </div>
        </div>
      </section>
	  
	  
      <section class="section section-lg text-center bg-default">
        <div class="container">
          <div class="row row-50">
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-classic">
                <div class="box-icon-inner decorate-triangle"><span class="icon-xl linearicons-phone-incoming"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="tel:#">1-800-123-1234</a></h4>
                  <p>Truca en qualsevol moment i seràs atès. </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-classic">
                <div class="box-icon-inner decorate-circle"><span class="icon-xl linearicons-map2"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="#">Zona VIA, Vilanova i la Geltrú, 08800, Barcelona.</a></h4>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-classic">
                <div class="box-icon-inner decorate-rectangle"><span class="icon-xl linearicons-paper-plane"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="mailto:#">info@viairport.com</a></h4>
                  <p>Deixa els teus dubtes i/o comentaris. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Google Map-->
      <section class="section">
        <!--Please, add the data attribute data-key="YOUR_API_KEY" in order to insert your own API key for the Google map.-->
        <!--Please note that YOUR_API_KEY should replaced with your key.-->
        <!--Example: <div class="google-map-container" data-key="YOUR_API_KEY">-->
        <div class="google-map-container" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-zoom="5" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png" data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:43},{&quot;lightness&quot;:-11},{&quot;hue&quot;:&quot;#0088ff&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;hue&quot;:&quot;#ff0000&quot;},{&quot;saturation&quot;:-100},{&quot;lightness&quot;:99}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#808080&quot;},{&quot;lightness&quot;:54}]},{&quot;featureType&quot;:&quot;landscape.man_made&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ece2d9&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ccdca1&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#767676&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;landscape.natural&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#b8cb93&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.sports_complex&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.medical&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]}]">
          <div class="google-map"></div>
          <ul class="google-map-markers">
            <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
          </ul>
        </div>
      </section>
      <!-- Contact us-->
      <section class="section section-lg bg-gray-1 text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7">
              <h3>Escriu el teu dubte o comentari aquí:</h3>
              <!-- RD Mailform-->
			  {{csrf_field()}}
              <form id="formulario" class="rd-form rd-mailform">
                <div class="form-wrap">
                  <input class="form-input" id="contact-name" type="text" name="NOMBRE" data-constraints="@Required">
                  <label class="form-label" for="contact-name">Nom</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="contact-email" type="email" name="EMAIL" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email">E-mail</label>
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-message"> Missatge</label>
                  <textarea class="form-input" id="contact-message" name="MENSAJE" data-constraints="@Required"></textarea>
                </div>
                <div class="row justify-content-center">
                  <div class="col-12 col-sm-7 col-lg-5">
                    <button class="button button-block button-lg button-primary" type="submit">Enviar</button> <br><br><br><br>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>									
		<div align="center"><a href=""><img src="{{ asset('images/foto_contacto.jpg') }}" alt="" width="620" height="557"/></a>
		</div>
		
      </section>
	  <!-- Page Footer-->
@include('footer')
@include('sweet::alert')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.min.js"></script>

<script>
    $(document).ready(function(){
        $('#formulario').validate({ // initialize the plugin
            rules: {
                NOMBRE: {
                    required: true,
                    minlength: 1
                },
                EMAIL: {
                    required: true,
                    minlength: 1,
                    email: true
                },
                MENSAJE: {
                    required: true,
                    minlength: 1,
                }
            },
            messages: {
                NOMBRE: {
                    required: "Tienes que ingresar el nombre",
                    minlength: "Como mínimo tiene que haber dos letras"
                },
                EMAIL: {
                    required: "Tienes que ingresar el email",
                    minlength: "Como mínimo tiene que haber una letra",
                    email: "El Email indicado no es válido"
                },
                MENSAJE: {
                    required: "Tienes que ingresar la consulta",
                    minlength: "Como mínimo tiene que haber 1 letras"
                }
            },
            submitHandler: function (form) {
                if(!$("#formulario").hasClass("bloqueado")){
                    $("#formulario").addClass("bloqueado");
                    var formulario = btoa(JSON.stringify($("#formulario").serializeArray()));

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $("input[name^='_token']").val()
                        }
                    });

                    $.ajax({
                        type: "POST",
                        url: "formulario", 
                        data: {
                            "formulario" : formulario
                        },
                        dataType: "json",   
                        success: function(data){
                            RESPUESTA = data["estado"];
                            switch (RESPUESTA) {
                                case "ok":
                                    swal({
                                        text: "",
                                        title: "MENSAJE ENVIADO",
                                        timer: 6000,
                                        icon: "success",
                                        buttons: "CERRAR",
                                    });
                                    break;
                            }
                            $("#formulario").removeClass("bloqueado");
                        }
                    });
                }
            }
        });
    });   
</script>
