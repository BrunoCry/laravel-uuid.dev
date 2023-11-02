<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Main page
     * 
     * @return [type]
     */
    public function index()
    {
        return view('layouts.app');
    }
}
