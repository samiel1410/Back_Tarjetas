<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prueba;
use Illuminate\Support\Facades\Validator;

class PruebaController extends Controller
{
    //
    public function index(Request $request , Prueba $prueba)
    {
        $prueba =  $prueba->get();
        return response()->json($prueba);
    }
}
