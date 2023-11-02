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
        return view('pages.index');
    }

    /**
     * Generation page
     * 
     * @return [type]
     */
    public function generate()
    {
        return view('pages.generate');
    }

    /**
     * Retrieve page
     * 
     * @return [type]
     */
    public function retrieve()
    {
        return view('pages.retrieve');
    }
}
