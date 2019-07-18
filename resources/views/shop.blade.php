@extends('layouts.app')

@section('content')
        <div class="shop_sidebar_area">

            <!-- ##### Single Widget ##### -->
            <div class="widget catagory mb-50">
                <!-- Widget Title -->
                <h6 class="widget-title mb-30">Categorias</h6>

                <!--  Catagories  -->
                <div class="catagories-menu">
                    <ul>
                        @foreach($categorias as $categoria)
                        <li class="active"><a href="{{ url('/shop?categoria_id=') }}{{$categoria->id}}">{{$categoria->nombre}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>


        </div>

        <div class="amado_product_area section-padding-100">
            <div class="container-fluid">


                <div class="row">
                @foreach($productos as $producto)
                <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                        <div class="single-product-wrapper">
                            <!-- Product Image -->
                            <div class="product-img" style="width:340px; height:300px">
                                <!-- Hover Thumb -->
                                <img  src="imagenes/{{$producto->imagen}}" alt="">
                            </div>

                            <!-- Product Description -->
                            <div class="product-description d-flex align-items-center justify-content-between">
                                <!-- Product Meta Data -->
                                <div class="product-meta-data">
                                    <div class="line"></div>
                                    <p class="product-price">S/. {{$producto->precio}}</p>
                                    <a href="{{url('/producto?id=')}}{{$producto->id}}">
                                        <h6>{{$producto->nombre}}</h6>
                                    </a>
                                </div>
                                <!-- Ratings & Cart -->
                                <div class="ratings-cart text-right">
                                    <div class="ratings">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    

                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- Pagination -->
                        
                    </div>
                </div>
            </div>
        </div>
@endsection