@extends ('layout')

{{--@section ('title') Saludos a {{ $name }} @stop --}}

@section ('content')

  <!--  Carousel - consult the Twitter Bootstrap docs at 
      http://twitter.github.com/bootstrap/javascript.html#carousel -->
<div id="this-carousel-id" class="carousel slide"><!-- class of slide for animation -->
  <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" ></li>
      <li data-target="#myCarousel" data-slide-to="2" ></li>
      <li data-target="#myCarousel" data-slide-to="3" ></li>

    </ol>


  <div class="carousel-inner">
    <div class="item active"><!-- class of active since it's the first item -->
      <img src="assets/img/slide3.png"  alt="" />
      <div class="carousel-caption">
        <p>Sistemas de Ventilación, Presurizadores y mas...</p>
      </div>
    </div>
    <div class="item">
      <img src="assets/img/slide2.png"  alt="" />
      <div class="carousel-caption">
        <p>Visítenos en nuestras nuevas instalaciones</p>
      </div>
    </div>
    <div class="item">
      <img src="assets/img/slide1.png"  alt="" />
      <div class="carousel-caption">
        <p>Suscríbase a nuestros boletines y obtenga múltiples beneficios</p>
      </div>
    </div>
    <div class="item">
      <img src="assets/img/slide4.png"  alt="" />
      <div class="carousel-caption">
        <p>Ahora ya puede comprar en línea</p>
      </div>
    </div>
  </div><!-- /.carousel-inner -->
  <!--  Next and Previous controls below
        href values must reference the id for this carousel -->
    <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">
      <span class="icon-prev"></span></a>
    <a class="carousel-control right" href="#this-carousel-id" data-slide="next"><span class="icon-next"></span></a>
</div><!-- /.carousel -->

     
    <div class="col-md-12"  style="color:#0D3767;">
        <h1>Bienvenido a Grupo Siel</h1>
        <p class="text-left" style="color:#131304;">
  Grupo Siel comenzó en 1988. Además de distribuir marcas lideres en el mercado, prestamos servicios
    de asesoría, creación de proyectos y soluciones para cualquier sector, ya sea hábitat, comercial o industrial.
    No dude en contactarnos, le cotizamos cualquier presupuesto de manera inmediata y sin compromiso alguno.
            </p>
    </div>  
<div class="row">
  <div class="col-md-12 col">
    <div class="col-md-4">
          <div class="col-md-12 columna" style="background-color:#C8C8C8;">

              <h3 class="text-center">Productos</h3>
              <img class="img-responsive"  src="assets/img/columnas.png" max-width="100%" height="auto">
              <p class="text-center">

         Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                  <center> <a class="btn btn-primary btn-sm">ver más...</a></center>

              </p>
        </div>
    </div>
    <div class="col-md-4 columna">
      <div class="col-md-12 columna" style="background-color:#C8C8C8;">

              <h3 class="text-center">Servicios</h3>
              <img class="img-responsive"  src="assets/img/columnas.png" max-width="100%" height="auto">
              <p class="text-center">

         Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                  <center> <a href="servicios" class="btn btn-primary btn-sm">ver más...</a></center>

              </p>
        </div>

    </div>
    <div class="col-md-4 columna">
      <div class="col-md-12 columna" style="background-color:#C8C8C8;">

              <h3 class="text-center">Cotice en línea</h3>
              <img class="img-responsive"  src="assets/img/columnas.png" max-width="100%" height="auto">
              <p class="text-center">

         Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                  <center> <a class="btn btn-primary btn-sm">ver más...</a></center>

              </p>
        </div>

    </div>

</div>
  </div> <!--fin clase row-->

<script>
  $(document).ready(function(){
    $('.carousel').carousel({
      interval: 2000
    });
  });
</script>
@stop

