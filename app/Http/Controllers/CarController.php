<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = User::find(id: 1)
            ->cars()
            ->with(['primaryImage', 'models', 'makers'])
            ->orderBy("created_at","desc")
            ->paginate(15);
        return view("cars.index", compact("cars"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("cars.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view("cars.show", compact("car"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view("cars.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }

    public function search()
    {
        $query = Car::where('published_at', '<', now())
            ->with(['primaryImage', 'city', 'makers', 'models', 'fuelType', 'carType'])
            ->orderBy('published_at','desc');

        // $query->join('cities', 'cities.id',  '=', 'cars.city_id')
        //     ->where('cities.region_id', 1);
        $cars = $query->paginate(12);
        return view("cars.search", ['cars' => $cars]);
    }

    public function watchlist()
    {
        $cars = User::find(5)
            ->favoriteCars()
            ->with(['primaryImage', 'city', 'models', 'makers', 'carType', 'fuelType'])
            ->paginate(12);
        return view('cars.watchlist', compact('cars'));
    }
}
