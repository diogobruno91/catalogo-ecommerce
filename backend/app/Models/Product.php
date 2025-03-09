<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Definindo a tabela (opcional, Laravel usa o plural automaticamente)
    protected $table = 'products';

    // Definindo os campos que podem ser preenchidos via mass assignment
    protected $fillable = [
        'name', 
        'description', 
        'price', 
        'category_id', 
        'image_url',
    ];

    // Relacionamento de muitos para um (um produto pertence a uma categoria)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}