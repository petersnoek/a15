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
        $title = $page->title;
        $content = $page->content;


        return view('page/detail')->with(['title'=>$title, 'content' => $content]);
    }

}
