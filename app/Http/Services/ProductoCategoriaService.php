<?php
namespace App\Http\Services;

use App\Models\ProductoCategoria;
use Illuminate\Support\Facades\Log;
class ProductoCategoriaService
{
    public function listarCategorias()
    {
        $categorias = ProductoCategoria::all();
        return $categorias;
    }

    public function crearCategoria(array $data)
    {
        $categoria = ProductoCategoria::create($data);
        Log::info('Categoria creado');
        return $categoria;
    }
    public function actualizarCategoria(ProductoCategoria $categoria,array $data)
    {
        $categoria->update($data);
        Log::info('Categoria actualizada');
        return $categoria;
    }
    public function eliminarCategoria(ProductoCategoria $categoria)
    {
        $categoria->delete();
        Log::info('Categoria eliminada');
        return true;
    }
}