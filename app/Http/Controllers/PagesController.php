<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //新增root方法
    public function root()
    {
        return view('pages.root');
    }
}
