<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class controllerSuma extends Controller
{
    public function suma($num1, $num2){
        return $num1 + $num2;
    }
    public function multiplicar($num1, $num2){
        return $num1 * $num2;
    }
    
}
