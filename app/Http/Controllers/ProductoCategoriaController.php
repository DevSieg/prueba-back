<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductoCategoriaRequest;
use App\Models\ProductoCategoria;
use Illuminate\Http\Request;   
use App\Traits\ApiResponse;
use App\Http\Services\ProductoCategoriaService;

class ProductoCategoriaController extends Controller
{
    use ApiResponse;
    public function __construct(private ProductoCategoriaService $productoCategoriaService) {}
    public function index()
    {
        $productos = $this->productoCategoriaService->listarCategorias();
        return $this->successResponse($productos);
    }
    public function store(ProductoCategoriaRequest $request)
    {
        $categoria =  $this->productoCategoriaService->crearCategoria($request->validated());
        return $this->successResponse($categoria, 'Categoría creada exitosamente.');
    }
    public function update(ProductoCategoriaRequest $request, ProductoCategoria $categoria){
        $categoria = $this->productoCategoriaService->actualizarCategoria($categoria, $request->validated());
        return $this->successResponse($categoria, 'Categoría actualizada exitosamente.');
    }

    public function destroy(ProductoCategoria $categoria){
        $this->productoCategoriaService->eliminarCategoria($categoria);
        return $this->successResponse(null, 'Categoría eliminada exitosamente.');
    }
}
