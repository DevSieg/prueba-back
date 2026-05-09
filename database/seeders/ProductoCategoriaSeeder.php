<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductoCategoria;

class ProductoCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductoCategoria::create(['nombre' => 'Electrónica']);
        ProductoCategoria::create(['nombre' => 'Ropa']);
        ProductoCategoria::create(['nombre' => 'Hogar']);
        ProductoCategoria::create(['nombre' => 'Deportes']);
        ProductoCategoria::create(['nombre' => 'Libros']);
    }
}