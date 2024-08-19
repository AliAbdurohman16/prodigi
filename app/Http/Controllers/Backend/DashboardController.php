<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Product\Product;
use App\Models\Portfolio\Post;
use App\Models\Partner;
use App\Models\Client;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'services' => Service::count(),
            'products' => Product::count(),
            'portfolios' => Post::count(),
            'partners' => Partner::count(),
            'clients' => Client::count(),
        ];

        return view('backend.dashboard.index', $data);
    }
}
