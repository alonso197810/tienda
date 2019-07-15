@extends('layouts.app')

@section('content')
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">

                <!-- Single Catagory -->
                @foreach($productos as $producto)
                <div class="single-products-catagory clearfix" style="width:340px; height:300px">
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