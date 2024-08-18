<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index($slug)
    {
        $data['page'] = Page::where('slug', $slug)->first();

        return view('frontend.page.index', $data);
    }
}
