<?php

namespace App\Http\Controllers;

class Home extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello Tutorama API'
        ], 200);
    }
}
