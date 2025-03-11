<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = ['color', 'size', 'description'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
