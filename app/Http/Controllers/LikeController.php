<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LikeController extends Controller
{
    Public function index() {
        return view('page.like');
    }
}
