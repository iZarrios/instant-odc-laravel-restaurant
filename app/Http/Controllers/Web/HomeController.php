<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Meal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $meals = Meal::all();
        return view('web.home.index', compact('meals'));
    }
}
