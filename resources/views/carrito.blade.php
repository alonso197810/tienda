@extends('layouts.app')

@section('content')
<div class="cart-table-area section-padding-100">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="cart-title mt-50">
                    <h2>Carrito de Compra</h2>
                </div>

                <div class="cart-table clearfix">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Cantidad</th>

                            </tr>
                        </thead>
                        <tbody>
                            @if ($compra)
                            @foreach($compra->detalles as $detalle)
                            <tr>
                                <td class="cart_product_img">
                                    <a href="#"><img src="imagenes/{{$detalle->producto->imagen}}" alt="Product"></a>
                                </td>
                                <td class="cart_product_desc">
                                    <h5>{{$detalle->producto->nombre}}</h5>
                                </td>
                                <td class="price">
                                    <span>{{$detalle->producto->precio}}</span>
                                </td>
                                <td class="qty">
                                    <div class="qty-btn d-flex">
                                        <div class="quantity">
                                            <input type="text" class="" id="qty" disabled="disabled" step="1" min="1" max="300" name="cantidad" value="{{$compra->cantidad}}">
                                        </div>
                                        <a href="{{url('/borrar?detalle_id=')}}{{$detalle->id}}" class="btn btn-warning"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="cart-summary">
                    <h5>Costo: </h5>
                    <ul class="summary-table">
                        <li><span>total: </span> <span> S/. {{$total}}</span></li>
                    </ul>
                    <div class="cart-btn mt-100">
                        <a href="{{url('/factura?compra_id=')}}{{$compra->id}}" class="btn amado-btn w-100">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection