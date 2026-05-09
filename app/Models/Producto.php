<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Producto",
 *     type="object",
 *     title="Producto",
 *     description="Producto",
 *     @OA\Property(property="id", type="integer", description="ID del producto"),
 *     @OA\Property(property="nombre", type="string", description="Nombre del producto"),
 *     @OA\Property(property="descripcion", type="string", description="Descripción del producto"),
 *     @OA\Property(property="precio", type="number", format="float", description="Precio del producto"),
 *     @OA\Property(property="categoria_id", type="integer", description="ID de la categoría"),
 *     @OA\Property(property="stock", type="integer", description="Stock disponible"),
 *     @OA\Property(property="created_at", type="string", format="date-time", description="Fecha de creación"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", description="Fecha de actualización"),
 *     @OA\Property(
 *         property="categoria",
 *         ref="#/components/schemas/ProductoCategoria",
 *         description="Categoría del producto"
 *     )
 * )
 */
class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = ['nombre', 'descripcion', 'precio', 'categoria_id','stock'];

    protected $casts = [
        'precio' => 'decimal:2',
        'stock' => 'integer',
    ];

    public function categoria()
    {
        return $this->belongsTo(ProductoCategoria::class, 'categoria_id');
    }
}
