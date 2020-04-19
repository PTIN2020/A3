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
  <div class="container text-center pt-5">
      <div class="container text-center">
		  <br><br><br><h1>MAPA DE L'AEROPORT</h1>
	 </div>
      <div class="">
          <p class="lead" style="text-align:center;color:black;padding-left:0px;padding-bottom:30px;padding-top:120px;font-family:verdana;">Necessites un vehicle per moure't per l'aeroport? Consulta tota la informació <a href="" style="color:#014797;text-decoration:underline;">aquí</a></p>
      </div>
  </div>
  <div align=center>
    <img src = "images/mapaAeroport.jpg" alt = "Picture of the airport map" width="800" height="550"/>
  </div>
  <div class="row row-25" style="padding-top:40px;padding-bottom:150px;">
      <div class="col-lg-3 mx-auto" style="text-align:center;padding-top:30px;">
          <h5 class="pb-5"style="font-family:Verdana;font-size:25px;color:#ff0000;">Serveis comercials</h5>
          <div class="panel-group px-5">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title" style="font-family:Verdana;color:#ff0000">
                          <a data-toggle="collapse" href="#collapse1">Perfumeria Vilanova</a>
                      </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse">
                      <ul class="list-group">
                          <li class="list-group-item">Característica 1</li>
                          <li class="list-group-item">Característica 2</li>
                          <li class="list-group-item">Característica 3</li>
                      </ul>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title" style="font-family:Verdana;color:#ff0000">
                          <a data-toggle="collapse" href="#collapse2">Barcelona Souvenirs</a>
                      </h4>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse">
                      <ul class="list-group">
                          <li class="list-group-item">Característica 1</li>
                          <li class="list-group-item">Característica 2</li>
                          <li class="list-group-item">Característica 3</li>
                      </ul>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title" style="font-family:Verdana;color:#ff0000">
                          <a data-toggle="collapse" href="#collapse3">H & M</a>
                      </h4>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                      <ul class="list-group">
                          <li class="list-group-item">Característica 1</li>
                          <li class="list-group-item">Característica 2</li>
                          <li class="list-group-item">Característica 3</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-lg-3" style="text-align:center;padding-top:30px;">
          <h5 class="pb-5"style="font-family:Verdana;font-size:25px;color:#0000ff">Hosteleria</h5>
          <div class="panel-group px-5">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title" style="font-family:Verdana;color:#0000ff;box-shadow:none!important;">
                          <a data-toggle="collapse" href="#collapse4">Mc Donald's</a>
                      </h4>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse">
                      <ul class="list-group">
                          <li class="list-group-item">Característica 1</li>
                          <li class="list-group-item">Característica 2</li>
                          <li class="list-group-item">Característica 3</li>
                      </ul>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title" style="font-family:Verdana;color:#0000ff">
                          <a data-toggle="collapse" href="#collapse5">Tagliatella</a>
                      </h4>
                  </div>
                  <div id="collapse5" class="panel-collapse collapse">
                      <ul class="list-group">
                          <li class="list-group-item">Característica 1</li>
                          <li class="list-group-item">Característica 2</li>
                          <li class="list-group-item">Característica 3</li>
                      </ul>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title" style="font-family:Verdana;color:#0000ff">
                          <a data-toggle="collapse" href="#collapse6">Burger King</a>
                      </h4>
                  </div>
                  <div id="collapse6" class="panel-collapse collapse">
                      <ul class="list-group">
                          <li class="list-group-item">Característica 1</li>
                          <li class="list-group-item">Característica 2</li>
                          <li class="list-group-item">Característica 3</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-lg-3" style="text-align:center;padding-top:30px;">
          <h5 class="pb-5"style="font-family:Verdana;font-size:25px;color:#008f39;">Informació</h5>
          <div class="panel-group px-5">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title" style="font-family:Verdana;color:#008f39;box-shadow:none!important;">
                          <a data-toggle="collapse" href="#collapse7">Punt d'informació nord</a>
                      </h4>
                  </div>
                  <div id="collapse7" class="panel-collapse collapse">
                      <ul class="list-group">
                          <li class="list-group-item">Característica 1</li>
                          <li class="list-group-item">Característica 2</li>
                          <li class="list-group-item">Característica 3</li>
                      </ul>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title" style="font-family:Verdana;color:#008f39">
                          <a data-toggle="collapse" href="#collapse8">Punt d'informació est</a>
                      </h4>
                  </div>
                  <div id="collapse8" class="panel-collapse collapse">
                      <ul class="list-group">
                          <li class="list-group-item">Característica 1</li>
                          <li class="list-group-item">Característica 2</li>
                          <li class="list-group-item">Característica 3</li>
                      </ul>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title" style="font-family:Verdana;color:#008f39">
                          <a data-toggle="collapse" href="#collapse9">Punt d'informació sud</a>
                      </h4>
                  </div>
                  <div id="collapse9" class="panel-collapse collapse">
                      <ul class="list-group">
                          <li class="list-group-item">Característica 1</li>
                          <li class="list-group-item">Característica 2</li>
                          <li class="list-group-item">Característica 3</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-lg-3" style="text-align:center;padding-top:30px;">
          <h5 class="pb-5"style="font-family:Verdana;font-size:25px;color:#ff8000">Altres</h5>
          <div class="panel-group px-5">
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title" style="font-family:Verdana;color:#ff8000">
                          <a data-toggle="collapse" href="#collapse10">Sala VIP Tropical</a>
                      </h4>
                  </div>
                  <div id="collapse10" class="panel-collapse collapse">
                      <ul class="list-group">
                          <li class="list-group-item">Característica 1</li>
                          <li class="list-group-item">Característica 2</li>
                          <li class="list-group-item">Característica 3</li>
                      </ul>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title" style="font-family:Verdana;color:#ff8000">
                          <a data-toggle="collapse" href="#collapse11">Piscina interior</a>
                      </h4>
                  </div>
                  <div id="collapse11" class="panel-collapse collapse">
                      <ul class="list-group">
                          <li class="list-group-item">Característica 1</li>
                          <li class="list-group-item">Característica 2</li>
                          <li class="list-group-item">Característica 3</li>
                      </ul>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">
                      <h4 class="panel-title" style="font-family:Verdana;color:#ff8000">
                          <a data-toggle="collapse" href="#collapse12">Zona de descans</a>
                      </h4>
                  </div>
                  <div id="collapse12" class="panel-collapse collapse">
                      <ul class="list-group">
                          <li class="list-group-item">Característica 1</li>
                          <li class="list-group-item">Característica 2</li>
                          <li class="list-group-item">Característica 3</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
@include('footer')
