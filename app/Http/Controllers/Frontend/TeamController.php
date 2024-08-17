<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $data['teams'] = Team::orderBy('sort', 'asc')->paginate(12);

        return view('frontend.team.index', $data);
    }
}
