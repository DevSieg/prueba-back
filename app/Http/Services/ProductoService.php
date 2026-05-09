<?php
namespace App\Http\Services;
use App\Models\Producto;
use Illuminate\Support\Facades\Log;

class ProductoService
{
    public function listarProductos()
    {
        $productos = Producto::where('activo', true)->get();
        return $productos;
    }

    public function crearProducto(array $data)
    {
        $producto = Producto::create($data);
        Log::info('Producto creado');
        return $producto;
    }
    public function actualizarProducto(Producto $producto,array $data)
    {
        $producto->update($data);
        Log::info('Producto actualizado');
        return $producto;
    }
    public function eliminarProducto(Producto $producto)
    {
        $producto->delete();
        Log::info('Producto creado');
        return true;
    }
}