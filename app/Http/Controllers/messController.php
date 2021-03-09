<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messController extends Controller
{
    public function store(Request $request)
    {
        return request('nombre');
    }
}
