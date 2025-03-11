<?php

namespace App\Http\Controllers;

use App\Services\DetailService;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    protected $detailService;

    public function __construct(DetailService $detailService)
    {
        $this->detailService = $detailService;
    }

    public function show($id)
    {
        $detail = $this->detailService->getDetailById($id);

        if (!$detail) {
            return response()->json(['message' => 'Detail não encontrado'], 404);
        }

        return response()->json($detail);
    }
}
