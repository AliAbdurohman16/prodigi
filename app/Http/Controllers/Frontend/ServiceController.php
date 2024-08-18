<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index($slug)
    {
        $data['service'] = Service::where('slug', $slug)->first();

        return view('frontend.service.index', $data);
    }
}
