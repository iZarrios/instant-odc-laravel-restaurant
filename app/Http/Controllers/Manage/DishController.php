<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Meal;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::all();
        return view('manage.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $meals = Meal::all();
        return view('manage.dishes.create', compact('meals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|min:3|string',
            'description'   => 'required|min:3|string',
            'price'         => 'required|numeric',
            'meal_id'       => 'numeric|exists:meals,id',
        ]);

        Dish::create($request->all());

        return redirect()->route('manage.dishes.index')->with('success', 'Dish Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        $meals = Meal::all();
        return view('manage.dishes.edit', compact('dish', 'meals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dish $dish)
    {
        $request->validate([
            'name'          => 'required|min:3|string',
            'description'   => 'required|min:3|string',
            'price'         => 'required|numeric',
            'meal_id'       => 'numeric|exists:meals,id',
        ]);

        $dish->update($request->all());

        return redirect()->route('manage.dishes.index')->with('success', 'dish Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        $dish->delete();

        return redirect()->route('manage.dishes.index')->with('success', 'Dish Deleted Successfully');
    }
}
