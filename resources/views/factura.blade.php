@extends('layouts.app')

@section('content')
   <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Checkout</h2>
                            </div>

                            <form action="{{ url('/pagar') }}" method="post">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" name="nombre" value="{{$user->name}}" placeholder="Nombre Completo" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Email" value="{{$user->email}}">
                                    </div>
                                    <div class="col-12 mb-3">
                                    <input type="text" class="form-control" name="distrito" value="" placeholder="Distrito" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control mb-3" name="direccion" placeholder="Direccion" value="">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="number" class="form-control" name="telefono" min="0" max="999999999" placeholder="Telefono" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <textarea class="form-control w-100" name="comentario" cols="30" rows="10" placeholder="Comentario"></textarea>
                                    </div>
                                    <input type="hidden" name="total" value="{{$total}}">
                                    <button class="btn amado-btn w-100">Checkout</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>Total:</span> <span>S/. {{$total}}</span></li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection