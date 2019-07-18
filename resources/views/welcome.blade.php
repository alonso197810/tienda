@extends('layouts.app')

@section('content')
        <div class="products-catagories-area clearfix">
        <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Encuentra lo mejor,<br>
                Siempre de Calidad</h4>
              <p>Venta y fabricación, de proyectos de muebles y accesorios.</p>
               </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://www.domesticoshop.com/media/customoptions/options/1445/7407/350x/FRIZ-HANSEN-SERIE-7-WOOD-FRESNO.jpg" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4> <br>
              Ideas y soluciones para esos espacios que desea optimizar</h4>
              <p>Fabricaciones a la medida, color y diseño que usted necesita.<br></p>
              <a href="#">COMPRAR AHORA</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://www.mobydecmuebles.com/wp-content/uploads/2018/10/a013m26_principal_i9A-1024x1024.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>¿Necesitas conservar el orden? <br></h4>
              <p> Acceder a nuestros artículos de manera inmediata. <br></p>
              <a href="#">COMPRAR AHORA</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://pngimage.net/wp-content/uploads/2018/06/lamparas-de-piso-png-2.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
            <div class="amado-pro-catagory clearfix">
                
                <!-- Single Catagory -->
                @foreach($productos as $producto)
                <div class="single-products-catagory clearfix">
                <a href="{{url('/producto?id=')}}{{$producto->id}}">
                        <img src="imagenes/{{$producto->imagen}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>S/. {{$producto->precio}}</p>
                            <h4>{{$producto->nombre}}</h4>
                        </div>
                    </a>
                </div>
                @endforeach


            </div>
        </div>
@endsection