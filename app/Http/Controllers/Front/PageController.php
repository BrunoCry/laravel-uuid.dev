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
    public function list()
    {
        return view('layouts.app');
    }
}
