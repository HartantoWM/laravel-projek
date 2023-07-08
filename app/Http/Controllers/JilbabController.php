<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JilbabController extends Controller
{
    public function index()
    {
        return view("hijab/index");
    }
}
