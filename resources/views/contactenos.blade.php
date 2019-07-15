@extends('layouts.app')

@section('content')
   <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Contactenos</h2>
                            </div>
                            <form action="{{ url('/correo') }}" method="post">
                            {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" name="nombre" value="nombre" placeholder="Nombre Completo" required>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Email" value="">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="number" class="form-control" name="telefono" min="0" max="999999999" placeholder="Telefono" value="">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <textarea class="form-control w-100" name="comentario" cols="30" rows="10" placeholder="Ingrese un omentario"></textarea>
                                    </div>
                                    <button class="btn btn-success centered" value="enviar">ENVIAR</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection