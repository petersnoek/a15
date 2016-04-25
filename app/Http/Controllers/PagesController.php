<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Page;

class PagesController extends Controller
{
    public function detail($id)
    {
        $page = Page::findOrFail($id);
        return view('page/detail')->with('page', $page);
    }

}
