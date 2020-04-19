@include('menu')

	  <style>
	  body{
		
		background: rgba(179,220,237,1);
		background: -moz-radial-gradient(center, ellipse cover, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(0,69,154,1) 100%);
		background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(179,220,237,1)), color-stop(50%, rgba(41,184,229,1)), color-stop(100%, rgba(0,69,154,1)));
		background: -webkit-radial-gradient(center, ellipse cover, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(0,69,154,1) 100%);
		background: -o-radial-gradient(center, ellipse cover, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(0,69,154,1) 100%);
		background: -ms-radial-gradient(center, ellipse cover, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(0,69,154,1) 100%);
		background: radial-gradient(ellipse at center, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(0,69,154,1) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3dced', endColorstr='#00459a', GradientType=1 );
  
	  }
	  </style>
	  <section class="section section-lg">
      <div class="container text-center pt-5">
		<h1 class="box-default-title">Com podem ajudar-te?</h1>
      </div>
	  </section>
      <div class="container py-4">
      <div class="row">
          <div class="col-11 mx-auto">
              <div class="accordion" id="faqExample">
                  <div class="card">
                      <div class="card-header" role="tab" id="headingOne">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionOne" href="#collapseOne"
                          aria-expanded="false" aria-controls="collapseOne">
                          <h5 class="mb-0">
                            Disposeu d’un <b>app</b> de l’aeroport? <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b>Sí, tenim la APP OFICIAL VIA. Descarrega-la des de Google Play Store, o en la part superior de la web, on trobaràs una icona que diu “Descarrega la teva app”.
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" role="tab" id="headingTwo">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwo" href="#collapseTwo"
                          aria-expanded="false" aria-controls="collapseTwo">
                          <h5 class="mb-0">
                            Vull donar-me d’alta en <b>VIA CLUB CLIENT</b>, quins son els requisits? <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b> Per realitzar un registre en el nostre sistema i ser membre del VIA Club Client, et recomanem seguir els següents passos:
                              Accedeix a l’apartat de registre d’usuaris mitjançant la pàgina principal de la web, o bé a través del menú, a l’apartat passatgers (Menú → Passatgers → Login i sign up).
                              Un cop aquí, trobaràs un petit formulari de registre. Has d’introduir el teu nom i cognoms, el correu electrònic i escollir una contrasenya que vulguis utilitzar pel teu
                              compte al club. Així de senzill és formar part de VIA Club Client
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" role="tab" id="headingThree">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionThree" href="#collapseThree"
                          aria-expanded="false" aria-controls="collapseThree">
                          <h5 class="mb-0">
                            Ser membre de <b>VIA CLUB Client</b> té algun cost associat? <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b>Registrar-se i ser soci del Club és totalment gratuït.
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" role="tab" id="headingFour">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionFour" href="#collapseFour"
                          aria-expanded="false" aria-controls="collapseFour">
                          <h5 class="mb-0">
                            Sóc una persona amb <b>mobilitat reduïda</b>, disposeu de servei per atendre’m?  <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b>Sí, disposem de servei PMR a totes les zones de l’aeroport. Pots sol·licitar aquest servei mitjançant la nostra pàgina web, és molt senzill. A més, et
                              garantim que el nostre personal encarregat del servei PMR anirà a recollir-te allà on siguis dins l’aeroport, no has de preocupar-te per res.
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" role="tab" id="headingFive">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionFive" href="#collapseFive"
                          aria-expanded="false" aria-controls="collapseFive">
                          <h5 class="mb-0">
                            El <b>servei PMR</b> és gratuït o té algun cost associat? <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b>El servei PMR és totalment gratuït. Els menors d’edat han d’anar acompanyats. L’únic que et demanarem a l’hora de sol·licitar el servei son algues dades, tals
                              com la data i l’hora de sortida del teu vol, el punt de trobada, etc.
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" role="tab" id="headingSix">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionSix" href="#collapseSix"
                          aria-expanded="false" aria-controls="collapseSix">
                          <h5 class="mb-0">
                            Amb quant temps d’anticipació recomaneu <b>arribar a l’aeroport</b>?  <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b>Recomanem arribar a l’aeroport amb un mínim d’anticipació de 2 hores, per tal de facturar equipatge en cas necessari, passar els diversos controls de seguretat,
                              ubicar la porta d’embarcament, etc. I sobretot, per gestionar imprevistos.
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" role="tab" id="headingSeven">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionSeven" href="#collapseSeven"
                          aria-expanded="false" aria-controls="collapseSeven">
                          <h5 class="mb-0">
                            Disposeu de <b>serveis VIP</b>? <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b>Sí, disposem de diverses Sales VIP repartides a l’aeroport, on podràs gaudir el teu temps d’esperar abans d’agafar l’avió. Dins d’aquestes sales trobaràs un càtering de menjar,
                              sofàs per seure còmodament, revistes, libres i altres tipus de comoditats.
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" role="tab" id="headingEight">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEight" href="#collapseEight"
                          aria-expanded="false" aria-controls="collapseEight">
                          <h5 class="mb-0">
                            Com puc accedir a aquestes <b>Sales VIP de VIA</b>?  <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b>Pots informar-te de la ubicació d’aquestes sales VIP a la nostra pàgina web, a l’apartat de Serveis. Allà apareixen les diverses sales, les seves característiques, els requisits
                              per accedir-hi i els preus. El pagament es realitza in situ.
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" role="tab" id="headingNine">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionNine" href="#collapseNine"
                          aria-expanded="false" aria-controls="collapseNine">
                          <h5 class="mb-0">
                            Existeix la possibilitat de <b>llogar un vehicle</b> per moure’m dins l’aeroport?  <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b>És clar. Disposem d’un servei per passatgers de Lloguer de cotxes, el qual pots consultar a la nostra web. Hauràs d’emplenar un breu qüestionari, no trigaràs més d’un minut.
                              Hi ha diversos punts de vehicles a l’aeroport. Quan emplenis el formulari, el vehicle sol·licitat anirà a recollir-te allà on siguis, in situ.
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" role="tab" id="headingTen">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionTen" href="#collapseTen"
                          aria-expanded="false" aria-controls="collapseTen">
                          <h5 class="mb-0">
                            Puc <b>llogar</b> un d’aquests <b>cotxes</b> si tinc una família gran? I si només sóc un passatger?  <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseTen" class="collapse" aria-labelledby="headingTen" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b>Sí, donat que disposem de vehicles de 2 places, 4, 6, i fins a 8 places.
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" role="tab" id="headingEleven">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionEleven" href="#collapseEleven"
                          aria-expanded="false" aria-controls="collapseEleven">
                          <h5 class="mb-0">
                            És aconsellable contractar una <b>assegurança de vol</b>?  <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b>Sí. Sempre recomanem contractar l’assegurança de vol ja que és important tenir cobertura per tota mena d’imprevistos que es poden ocasionar.
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" role="tab" id="headingTwelve">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwelve" href="#collapseTwelve"
                          aria-expanded="false" aria-controls="collapseTwelve">
                          <h5 class="mb-0">
                            He tingut un problema, i vull posar una <b>reclamació</b>. Com puc fer-ho?  <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwelve" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b>Lamentem aquesta situació. Pots reali8tzar reclamacions a la nostra pàgina web, a l’apartat de contacte. També pots fer reclamació de forma
                              presencial a l’aeroport; el nostre personal t’ajudarà.
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" role="tab" id="headingThirteen">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionThirteen" href="#collapseThirteen"
                          aria-expanded="false" aria-controls="collapseThirteen">
                          <h5 class="mb-0">
                            És el primer cop que vinc a Vilanova i la Geltrú. Podríeu ajudar-me a identificar els <b>punts d’interès</b> de la ciutat? <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b>És clar. A la nostra pàgina web trobaràs un apartat informatiu que es diu “Punts d’interès de la ciutat” on trobaràs tot el que necessites saber
                              sobre la ciutat de Vilanova i la Geltrú. Per exemple, museus, llocs d’interès, bons restaurants i bars, etc.
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" role="tab" id="headingFourteen">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionFourteen" href="#collapseFourteen"
                          aria-expanded="false" aria-controls="collapseFourteen">
                          <h5 class="mb-0">
                            Si faig <b>compres a les botigues</b> de l’aeroport, puc retornar-les en cas de no resultar satisfet?   <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b>Sí, sempre i quan ensenyi el tiquet de compra i es compleixin les condicions relaxades als dors del tiquet, en política de devolucions.
                              S’ha de tenir en compte que cada botiga de l’aeroport té les seves condicions de canvis i devolucions.
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" role="tab" id="headingFifteen">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionFifteen" href="#collapseFifteen"
                          aria-expanded="false" aria-controls="collapseFifteen">
                          <h5 class="mb-0">
                            Si vull comprar un perfum un cop <b>passats els controls de seguretat</b>, puc escollir qualsevol mida?  <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseFifteen" class="collapse" aria-labelledby="headingFifteen" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b>Sí. Les mides en quant a líquids estan restringides només abans de passar els controls de seguretat; per tant, la compra d’aquests productes
                              un cop dins la zona d’embarcament no té restriccions en quant a mides.
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" role="tab" id="headingSixteen">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionSixteen" href="#collapseSixteen"
                          aria-expanded="false" aria-controls="collapseSixteen">
                          <h5 class="mb-0">
                            Es pot comprar aigua, vi i licors un cop <b>passats els controls de seguretat</b>? <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseSixteen" class="collapse" aria-labelledby="headingSixteen" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b>Sí. La normativa en quant a la compra i consum de líquids a l’aeroport VIA no impedeix que es comprin o es consumeixin un cop passats els
                              controls de seguretat. Aconsellem preguntar al personal de les nostres botigues.
                          </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header" role="tab" id="headingSeventeen">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordionSeventeen" href="#collapseSeventeen"
                          aria-expanded="false" aria-controls="collapseSeventeen">
                          <h5 class="mb-0">
                            Si compro perfums o cremes un cop <b>passats els controls de seguretat</b>, puc utilitzar-los abans d’arribar al meu destí? <i class="fas fa-angle-down rotate-icon"></i>
                          </h5>
                        </a>
                      </div>
                      <div id="collapseSeventeen" class="collapse" aria-labelledby="headingSeventeen" data-parent="#faqExample">
                          <div class="card-body text-justify">
                              <b>Resposta: </b>Si compro perfums o cremes un cop passats els controls de seguretat, puc utilitzar-los abans d’arribar al meu destí?
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
      <div class="container py-4">
          <p class="lead text-justify py-4">Encara no has resolt el teu dubte? <a href="#" style="color:#014797;text-decoration:underline;">Contacta amb nosaltres!</a></p>
      </div>
  </div>

@include('footer')
