<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(){
        return response()->json([
                'message' => 'Access to this item is only for authenticated user. Provide a token in your request!'
            ]);
    }
}
