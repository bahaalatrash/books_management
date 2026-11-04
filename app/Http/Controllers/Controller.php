<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

abstract class Controller
{
    public function succes(string $message = "successed", array|Collection $data = [])
    {
        return response()->json(
            [
                "message" => $message,
                "data" => $data
            ]
        );
    }
}
