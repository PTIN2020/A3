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
      <section class="section section-lg" style="background-color:#cde7fd;">
          <div class="container text-align:center">
              <p style="font-size:38px;font-family:Courier;font-weight:bold;text-align:center;color:black;"><br/>Vols realitzar una <a href="" style="color:#014797;text-decoration:underline;">consulta</a> sobre algun vol en concret? Endavant! </p>
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
              <form class="rd-form rd-mailform booking-form">
                  <div>
                      <p class="booking-title1">Destí</p>
                          <div class="form-wrap">
                                <input class="form-input" id="booking-destino" type="text" name="name" data-constraints="@Required">
                                <label class="form-label" for="booking-destí"></label>
                          </div>
                  </div>
                  <div>
                      <p class="booking-title2">Anada</p>
                      <div class="form-wrap form-wrap-icon"><span class="icon mdi mdi-calendar-text"></span>
                          <input class="form-input" id="booking-date01" type="text" name="date" data-constraints="@Numeric" data-time-picker="date">
                      </div>
                  </div>
                  <div id="tornada">
                      <p class="booking-title3">Tornada</p>
                      <div class="form-wrap form-wrap-icon"><span class="icon mdi mdi-calendar-text"></span>
                          <input class="form-input" id="booking-date02" type="text" name="date" data-constraints="@Numeric" data-time-picker="date">
                      </div>
                  </div>
                  <div>
                      <p class="booking-title">Classe</p>
                      <div class="form-wrap">
                          <select data-placeholder="1">
                              <option label="---"></option>
                              <option>Turista</option>
                              <option>Bussines</option>
                              <option>Primera</option>
                          </select>
                      </div>
                  </div>
                  <div>
                      <p class="booking-title">Num.Adults</p>
                      <div class="form-wrap">
                            <select data-placeholder="1">
                              <option label="---"></option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                              <option>7</option>
                              <option>8</option>
                              <option>9</option>
                              <option>10</option>
                            </select>
                      </div>
                  </div>
                  <div>
                      <p class="booking-title">Num.Menors</p>
                      <div class="form-wrap">
                          <select data-placeholder="2">
                              <option label="---"></option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                              <option>7</option>
                              <option>8</option>
                              <option>9</option>
                              <option>10</option>
                          </select>
                      </div>
                  </div>
              <div>
              <button class="button button-lg button-gray-600" type="submit">Consulta</button>
          </div>
          </form>
          </div>
          </div>
      </section>
      <section class="section section-lg bg-white">
          <div class="container">
            <div class="row row-50 justify-content-xl-between align-items-lg-center">
              <div class="col-lg-6 wow fadeInLeft">
                <div class="box-image"><a href=""><img class="box-image-static" src="images/map.png" alt="" border="5" width="500" height="427"/></a>
                </div>
              </div>
              <div class="col-lg-6 col-xl-5 wow fadeInRight">
                <h2><a href="" style="color:#014797;">Mapa de geolocalització</a></h2>
                <p align=center style="font-size:25px;">Consulta aquí quina és la teva posició al mapa de l'aeroport o altres aspectes com on es troben els diferents establiments d'alimentació, informació, serveis... </p>
              </div>
            </div>
          </div>
      </section>
      <section class="section section-lg" style="background-color:#cde7fd;">
          <div class="container">
            <div class="row row-50 justify-content-xl-between align-items-lg-center">
              <div class="col-lg-6 wow fadeInLeft">
                  <h2 align=center><a href="" style="color:#014797;">Informació de l'aeroport</a></h2>
                  <p align=center style="font-size:25px;">Aquí podràs trobar informació sobre les companyies que treballen amb l'aeroport, sobre punts d'interés de la ciutat o inclús sobre la història de l'aeroport.</p>
              </div>
              <div class="col-lg-6 col-xl-5 wow fadeInRight">
                  <div class="box-image"><a href=""><img class="box-image-static" src="images/info.png" alt="" border="5" width="500" height="427"/></a></div>
              </div>
            </div>
          </div>
      </section>
      <section class="section section-lg bg-white text-center">
          <div class="container">
            <div class="row row-50 justify-content-xl-between align-items-lg-center">
              <div class="col-lg-6 wow fadeInLeft">
                <div class="box-image"><a href=""><img class="box-image-static" src="images/letter.png" alt="" border="5" width="500" height="427"/></a>
                </div>
              </div>
              <div class="col-lg-6 col-xl-5 wow fadeInRight">
                <h2><a href="" style="color:#014797;">Contacta amb nosaltres!</a></h2>
                <p align=center style="font-size:25px;">No dubtis en contactar amb nosaltres en cas de tenir algun dubte, demanar un servei o fer una reclamació</p>
              </div>
            </div>
          </div>
      </section>
	</div>
@include('footer')