<?php

namespace App\Repositories;

use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryRepository
{
    public function getAllCategories()
    {
        $categories = Category::all();
        return CategoryResource::collection($categories);
    }
}