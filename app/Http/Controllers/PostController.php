<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class PostController extends Controller
{
    //
    public function home(){
        return view("home_page");
    }
}
