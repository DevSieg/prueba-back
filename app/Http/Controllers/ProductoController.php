<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoRequest;
use App\Http\Services\ProductoService;
use App\Models\Producto;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    use ApiResponse;
    public function __construct(private ProductoService $productoService) {}

    public function index()
    {
        $productos = $this->productoService->listarProductos();
        return $this->successResponse($productos);
    
    }

    public function store(ProductoRequest $request)
    {
        $data = $request->validated();
        $producto = $this->productoService->crearProducto($data);
        return $this->successResponse($producto, 'Producto creado exitosamente.');
    }
    public function update(ProductoRequest $request, Producto $producto)
    {
        $data = $request->validated();
        $producto = $this->productoService->actualizarProducto($producto, $data);
        return $this->successResponse($producto, 'Producto actualizado exitosamente.');
    }
    public function destroy(Producto $producto)
    {
        $this->productoService->eliminarProducto($producto);
        return $this->successResponse(null, 'Producto eliminado exitosamente.');
    }
}
