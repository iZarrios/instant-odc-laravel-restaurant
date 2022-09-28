<?php

namespace App\Http\Controllers\Web;

use App\Models\Meal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index()
    {
        $meals = Meal::all();
        return view('web.menus.index', compact('meals'));
    }
}
