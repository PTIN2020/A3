	  <footer class="section footer-minimal context-dark">
	  
	  	<div id="page-content">

		<div class="col-md-12  row footer2 ">
				<div class="col-md-12 row m-auto Centrar_Footer">
					<h2 class="titulo">Descarrega la teva app</h2>
				</div>
				<div class="col-md-12 row m-auto boton">
					<p>
						<a href="#" class="btn btn-store">
							<span class="fa fa-android fa-3x pull-left"></span> 
							<span class="btn-label">Download on the</span>
							<span class="btn-caption">Google Play</span>
						</a>
					</p>
				</div>
		</div>
	</div>
	  
        <div class="container wow-outer">
          <div class="wow fadeIn">
            <div class="row row-60">
              <div class="col-12">
                <ul class="footer-minimal-nav">
                  <li><a href="#">POLÍTICAS DE PRIVACIDAD</a></li>
                  <li><a href="#">POLÍTICA DE COOKIES</a></li>
				  <li><a href="{{ URL::to('/contacte')}}">CONTACTE</a></li>
				  <li><a href="{{ URL::to('/faq')}}">FAQ</a></li>
                  <li><a href="{{ URL::to('/about')}}">SOBRE NOSALTRES</a></li>
                </ul>
              </div>
              <div class="col-12">
                <ul class="social-list">
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-youtube-play" href="#"></a></li>
                  <li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-pinterest-p" href="#"></a></li>
                </ul>
              </div>
            </div>
            <p class="rights">Design&nbsp;by&nbsp;<a href="{{ URL::to('/')}}">Vilanova Intelligent Airport</a></p>
          </div>
        </div>
      </footer>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{ asset('js/core.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>