@include('menu')

	  <section class="section section-lg section-main-bunner section-main-bunner-filter text-center">
        <div class="main-bunner-img" style="background-image: url(&quot;{{ asset('images/portada_geo.jpg') }}&quot;); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="box-default">
              <br><h1 class="box-default-title"><p style="color:white;">GEOLOCALITZACIÓ</h1>
              <br><div class="box-default-decor"></div>
              <p class="big box-default-text">En aquest apartat trobaràs el mapa de l'Aeroport, en el qual podràs localitzar totes les botigues i establiments que hi ha a l'aeroport, així com zones de serveis i punts d'informació. Trobaràs també les característiques de les ubicacions. A més, disposes de l'opció de llogar un vehicle. </p>
			  <div class="box-default-decor"></div>
			</div>
          </div>
        </div>
      </section>

  <style>
	body{

		background: rgba(165,227,243,0.6); <!--color de fondo nuevo-->
	}

  </style>
  <div class="container text-center pt-5">
      <h1 style="font-size:6vw;font-type:verdana;"><br>MAPA DE L'AEROPORT</h1>
      <div class="">
          <p class="lead" style="text-align:center;color:black;padding-left:0px;padding-bottom:30px;padding-top:120px;font-family:verdana;">Necessites un vehicle per moure't per l'aeroport? Consulta tota la informació <a href="" style="color:#014797;text-decoration:underline;">aquí</a></p>
      </div>
  </div>
  <div class="image"align=center >
    <img src = "{{ asset('images/mapaAeroportPalma.jpg') }}" alt = "Picture of the airport map" width="800" height="550"/>
  </div>
  </section>
      <div class="row pb-5" style="margin-left:10px;margin-right:10px;">
          <div class="col">
              <h3 align=center><b> SERVEIS COMERCIALS </b></h3>
              <div class="accordion pt-3" id="faqExample">
					<div class="card">
						<div class="card-header" role="tab" id="headingOne">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionOne" href="#collapseOne"
							aria-expanded="false" aria-controls="collapseOne">
							<h5 class="mb-0">
								Òptica universitària <i class="fas fa-angle-down rotate-icon"></i>
							</h5>
							</a>
						</div>
						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
							<div class="card-body text-justify">
                                <h6><b>Tipus</b> -> {{$tipo[0]}} <br>
                                <b>Local</b> -> {{$local[0]}} <br>
                                <b>Descripció</b> -> {{$descripción[0]}} <br>
                                <b>Estado</b> -> {{$estado[0]}}</h6>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingTwo">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionTwo" href="#collapseTwo"
							aria-expanded="false" aria-controls="collapseTwo">
							<h5 class="mb-0">
								Vilanova Souvenirs <i class="fas fa-angle-down rotate-icon"></i>
							</h5>
							</a>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
							<div class="card-body text-justify">
								####
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingThree">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionThree" href="#collapseThree"
							aria-expanded="false" aria-controls="collapseThree">
							<h5 class="mb-0">
								Adidas <i class="fas fa-angle-down rotate-icon"></i>
							</h5>
							</a>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
							<div class="card-body text-justify">
                                ####
							</div>
						</div>
					</div>
                </div>
            </div>
            <div class="col">
              	<h3 align=center><b> HOSTELERIA </b></h3>
              	<div class="accordion pt-3" id="faqExample">
					<div class="card">
						<div class="card-header" role="tab" id="headingFour">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionFour" href="#collapseFour"
							aria-expanded="false" aria-controls="collapseFour">
							<h5 class="mb-0">
								Restaurante Pepín <i class="fas fa-angle-down rotate-icon"></i>
							</h5>
							</a>
						</div>
						<div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#faqExample">
							<div class="card-body text-justify">
                                <h6><b>Tipus</b> -> {{$tipo[1]}} <br>
                                <b>Local</b> -> {{$local[1]}} <br>
                                <b>Descripció</b> -> {{$descripción[1]}} <br>
                                <b>Estado</b> -> {{$estado[1]}}</h6>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingFive">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionFive" href="#collapseFive"
							aria-expanded="false" aria-controls="collapseFive">
							<h5 class="mb-0">
								Tagliatella <i class="fas fa-angle-down rotate-icon"></i>
							</h5>
							</a>
						</div>
						<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqExample">
							<div class="card-body text-justify">
                                ####
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingSix">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionSix" href="#collapseSix"
							aria-expanded="false" aria-controls="collapseSix">
							<h5 class="mb-0">
								Burger King <i class="fas fa-angle-down rotate-icon"></i>
							</h5>
							</a>
						</div>
						<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqExample">
							<div class="card-body text-justify">
                                ####
							</div>
						</div>
					</div>
                </div>
            </div>
            <div class="col">
				<h3 align=center><b> INFORMACIÓ </b></h3>
				<div class="accordion pt-3" id="faqExample">
					<div class="card">
						<div class="card-header" role="tab" id="headingSeven">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionSeven" href="#collapseSeven"
							aria-expanded="false" aria-controls="collapseSeven">
							<h5 class="mb-0">
								Punt d'informació nord <i class="fas fa-angle-down rotate-icon"></i>
							</h5>
							</a>
						</div>
						<div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#faqExample">
							<div class="card-body text-justify">
                                <h6><b>Tipus</b> -> {{$tipo[2]}} <br>
                                <b>Local</b> -> {{$local[2]}} <br>
                                <b>Descripció</b> -> {{$descripción[2]}} <br>
                                <b>Estado</b> -> {{$estado[2]}}</h6>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingEight">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionEight" href="#collapseEight"
							aria-expanded="false" aria-controls="collapseEight">
							<h5 class="mb-0">
								Punt d'informació est <i class="fas fa-angle-down rotate-icon"></i>
							</h5>
							</a>
						</div>
						<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#faqExample">
							<div class="card-body text-justify">
								####
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingNine">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionNine" href="#collapseNine"
							aria-expanded="false" aria-controls="collapseNine">
							<h5 class="mb-0">
								Punt d'informació sud <i class="fas fa-angle-down rotate-icon"></i>
							</h5>
							</a>
						</div>
						<div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#faqExample">
							<div class="card-body text-justify">
								####
							</div>
						</div>
					</div>
                </div>
            </div>
            <div class="col">
				<h3 align=center><b> ALTRES </b></h3>
				<div class="accordion pt-3" id="faqExample">
					<div class="card">
						<div class="card-header" role="tab" id="headingTen">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionTen" href="#collapseTen"
							aria-expanded="false" aria-controls="collapseTen">
							<h5 class="mb-0">
								Sala VIP Tropical <i class="fas fa-angle-down rotate-icon"></i>
							</h5>
							</a>
						</div>
						<div id="collapseTen" class="collapse show" aria-labelledby="headingTen" data-parent="#faqExample">
							<div class="card-body text-justify">
                                <h6><b>Tipus</b> -> {{$tipo[3]}} <br>
                                <b>Local</b> -> {{$local[3]}} <br>
                                <b>Descripció</b> -> {{$descripción[3]}} <br>
                                <b>Estado</b> -> {{$estado[3]}}</h6>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingEleven">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionEleven" href="#collapseEleven"
							aria-expanded="false" aria-controls="collapseEleven">
							<h5 class="mb-0">
								Piscina interior <i class="fas fa-angle-down rotate-icon"></i>
							</h5>
							</a>
						</div>
						<div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#faqExample">
							<div class="card-body text-justify">
								####
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" role="tab" id="headingTwelve">
							<a class="collapsed" data-toggle="collapse" data-parent="#accordionTwelve" href="#collapseTwelve"
							aria-expanded="false" aria-controls="collapseTwelve">
							<h5 class="mb-0">
								Zona de descans <i class="fas fa-angle-down rotate-icon"></i>
							</h5>
							</a>
						</div>
						<div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#faqExample">
							<div class="card-body text-justify">
								####
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
@include('footer')
