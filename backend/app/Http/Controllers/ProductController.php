<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index(Request $request)
    {
        return response()->json($this->productService->listAll());
    }

    public function show($id)
    {
        $product = $this->productService->findById($id);
        if (!$product) {
            return response()->json(['message' => 'Produto não encontrado'], 404);
        }
        return response()->json($product);
    }

    public function filterByCategory($categoryId)
    {
        return response()->json($this->productService->findByCategory($categoryId));
    }

    public function filterByDetail($detailID)
    {
        return response()->json($this->productService->findByDetail($detailID));
    }

    public function search(Request $request)
    {
        $query = $request->query('query');
        return response()->json($this->productService->searchProducts($query));
    }
}
