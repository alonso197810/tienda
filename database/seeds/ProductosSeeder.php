<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categoria = Categoria::where(['nombre'=>'Sala'])->first();
      $categoria->productos()->create(['nombre'=>'Mueble', 'precio'=>5300,'imagen'=>'a.jpg']);
      $categoria->productos()->create(['nombre'=>'Sillón reclinables', 'precio'=>800,'imagen'=>'b.jpg']);
      $categoria->productos()->create(['nombre'=>'Juego de comedor', 'precio'=>550,'imagen'=>'h.jpg']);
      $categoria->productos()->create(['nombre'=>'Sillón con accesorios', 'precio'=>2300,'imagen'=>'d.jpg']);

      $categoria = Categoria::where(['nombre'=>'Baños'])->first();
      $categoria->productos()->create(['nombre'=>'Mueble tocador', 'precio'=>470,'imagen'=>'m.jpg']);
      $categoria->productos()->create(['nombre'=>'Repisa', 'precio'=>320,'imagen'=>'k.jpg']);
      $categoria->productos()->create(['nombre'=>'Juego de lavadero', 'precio'=>450,'imagen'=>'o.jpg']);
      $categoria->productos()->create(['nombre'=>'Lavadero de mármol', 'precio'=>1050,'imagen'=>'n.jpg']);

      $categoria = Categoria::where(['nombre'=>'Dormitorio'])->first();
      $categoria->productos()->create(['nombre'=>'Juego de escritorio', 'precio'=>750,'imagen'=>'t.jpg']);
      $categoria->productos()->create(['nombre'=>'Cama tarima', 'precio'=>1300,'imagen'=>'d.jpg']);
      $categoria->productos()->create(['nombre'=>'Combo cama infantil', 'precio'=>1500,'imagen'=>'v.jpg']);
      $categoria->productos()->create(['nombre'=>'Combo matrimonial', 'precio'=>1800,'imagen'=>'x.jpg']);

    }
}
