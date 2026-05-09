<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="ProductoCategoria",
 *     type="object",
 *     title="ProductoCategoria",
 *     description="Categoría de producto",
 *     @OA\Property(property="id", type="integer", description="ID de la categoría"),
 *     @OA\Property(property="nombre", type="string", description="Nombre de la categoría"),
 *     @OA\Property(property="created_at", type="string", format="date-time", description="Fecha de creación"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", description="Fecha de actualización")
 * )
 */
class ProductoCategoria extends Model
{
    protected $table = 'categorias_productos';
    protected $fillable = ['nombre'];
}
