@extends('layouts.app')

@section('content')
<div class="single-product-area section-padding-100 clearfix">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mt-50">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
                                <li class="breadcrumb-item"><a href="{{url('/shop')}}">Tienda</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$producto->nombre}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="gallery_img" href="imagenes/{{$producto->imagen}}">
                                            <img class="d-block w-100" src="imagenes/{{$producto->imagen}}" alt="First slide">
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            <!-- Product Meta Data -->
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price">S/. {{$producto->precio}}</p>
                                <a href="product-details.html">
                                    <h6>{{$producto->nombre}}</h6>
                                </a>
                                <!-- Ratings & Review -->
                                    
                                
                                <!-- Avaiable -->
                                <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                            </div>

                            

                            <!-- Add to Cart Form -->
                            <form class="cart clearfix" method="post" action="{{ url('/comprar') }}">
                            {{ csrf_field() }}
                                <div class="cart-btn d-flex mb-50">
                                    <p>Cantidad</p>
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="cantidad" value="1">
                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                <button type="submit" name="producto_id" value="{{$producto->id}}" class="btn amado-btn">Agregar al carrito</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
