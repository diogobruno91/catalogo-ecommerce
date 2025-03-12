<?php

namespace App\Repositories;

use App\Http\Resources\DetailResource;
use App\Models\Detail;

class DetailRepository
{
    public function findById($id)
    {
        $detail = Detail::find($id);
        return new DetailResource($detail);
    }
}