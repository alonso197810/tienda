@extends('layouts.app')

@section('content')
<div class="cart-table-area section-padding-200">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="cart-title mt-50">
                    <h2>Pagos</h2>
                </div>

                <div class="cart-table clearfix">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Correo</th>
                                <th>Distrito</th>
                                <th>Dirección</th>
                                <th>Teléfono</th>
                                <th>Comentarios</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pagos as $pago)
                            <tr>
                                <td class="cart_product_desc">
                                    <h5>{{$pago->nombre}}</h5>
                                </td>
                                <td class="cart_product_desc">
                                    <span>{{$pago->email}}</span>
                                </td>
                                <td class="cart_product_desc">
                                    <span>{{$pago->distrito}}</span>
                                </td>
                                <td class="cart_product_desc">
                                    <span>{{$pago->direccion}}</span>
                                </td>
                                <td class="cart_product_desc">
                                    <span>{{$pago->telefono}}</span>
                                </td>
                                <td class="cart_product_desc">
                                    <span>{{$pago->comentario}}</span>
                                </td>
                                <td class="cart_product_desc">
                                    <span>S/. {{$pago->total}}</span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection