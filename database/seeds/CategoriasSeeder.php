<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Categoria::create(['nombre'=>'Sala']);
		Categoria::create(['nombre'=>'Baños']);
		Categoria::create(['nombre'=>'Dormitorio']);
    }
}
