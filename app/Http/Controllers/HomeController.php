<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria; 
use App\Producto;
use App\Compra;
use App\Pago;
use Auth; 

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('welcome',compact('productos'));
    }

    public function shop(Request $request)
    {   
        $categorias = Categoria::all();
        if ($request->has('categoria_id')) {
            $productos = Categoria::find($request->categoria_id)->productos;
        }else{
            $productos = Producto::all();
        }
        
        return view('shop',compact('categorias','productos'));
    }
    public function producto(Request $request)
    {
        if ($request->has('id')) {
            $producto = Producto::find($request->id);
        }else{
            return redirect('/');
        }
        return view('producto',compact('producto','categorias'));
    }
    public function carrito()
    {
        $user = Auth::user();
        if (!$user){
            return redirect('/');
        }
        $compra = $user->compras()->first(); 
        $total = 0;
        if ($compra){
            foreach($compra->detalles as $detalle){
                $total+=$detalle->producto->precio*$detalle->cantidad;
            }
        }
        return view('carrito',compact('compra','total'));
    }
    public function factura(Request $request)
    {
        $user = Auth::user();
        $compra = Compra::find($request->compra_id);
        $total = 0;
        if ($compra){
            foreach($compra->detalles as $detalle){
                $total+=$detalle->producto->precio*$detalle->cantidad;
            }
        }
        return view('factura',compact('total','user'));
    }
    public function comprar(Request $request)
    {   
        $user = Auth::user();
        if (!$user){
            return redirect('/');
        }
        $compra = $user->compras()->first();
        if (!$compra){
            $compra = $user->compras()->create([]);
        }
        $compra->detalles()->create(['cantidad'=>$request->cantidad,'producto_id'=>$request->producto_id]);
        return redirect('/carrito');
    }

    public function borrar(Request $request)
    {
        $user = Auth::user();
        $compra = $user->compras()->first();
        $compra->detalles()->where('id',$request->detalle_id)->delete();
        return redirect('/carrito');
    }
    public function pagar(Request $request)
    {
        Pago::create($request->all());
        return redirect('/');
    }
    public function pagos(Request $request)
    {
        $pagos = Pago::all();
        return view('pagos',compact('pagos'));
    }
    public function nosotros()
    {
        return view('/nosotros');
    }
    public function contactenos()
    {
        $user = Auth::user();
        return view('contactenos',compact('user'));
    }
}
