<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateSheetController extends Controller
{
    public function index()
    {
        $array = range(1, 99);
        shuffle($array);
        $array = array_slice($array, 0, 1);

        return $array;
    }
}
