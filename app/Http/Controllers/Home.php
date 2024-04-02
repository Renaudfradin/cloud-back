<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello API Cloud Tutoria'
        ], 200);
    }
}
