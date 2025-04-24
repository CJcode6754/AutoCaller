<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarType;
use App\Models\City;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\Models;
use App\Models\Region;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userId = auth()->id();

        $cars = Car::where('user_id', $userId)
        ->with(['primaryImage', 'makers', 'models'])
        ->orderBy("created_at","desc")
        ->paginate(15);
    
        return view("cars.index", compact("cars"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $makers = Maker::all();
        $regions = Region::all();
        $car_types = CarType::all();
        $fuel_types = FuelType::all();
        return view("cars.create", compact("makers","regions", 'car_types', 'fuel_types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'maker_id' => ['required','exists:makers,id'],
            'model_id' => ['required','exists:models,id'],
            'year' => ['required','integer'],
            'car_type' => ['required','exists:car_types,id'],
            'fuel_type_id' => ['required','exists:fuel_types,id'],
            'region_id' => ['required','exists:regions,id'],
            'city_id' => ['required','exists:cities,id'],
            'price' => ['required','integer'],
            'vin' => ['required','integer'],
            'mileage' => ['required','integer'],
            'address' => ['required','string', 'max:255'],
            'phone' => ['required', 'regex:/^09\d{9}$/'],
            'description' => ['nullable', 'string'],
            'publishDate' => ['required', 'date'],
            'images.*' => ['nullable', 'image', 'mimes:jpeg,png,jpg,PNG', 'max:2048'],
        ]);

        
        $car = Car::create([
            'maker_id' => $request->input('maker_id'),
            'model_id' => $request->input('model_id'),
            'year' => $request->input('year'),
            'price' => $request->input('price'),
            'vin' => $request->input('vin'),
            'mileage' => $request->input('mileage'),
            'car_type_id' => $request->input('car_type'),
            'fuel_type_id' => $request->input('fuel_type_id'),
            'user_id' => auth()->id(),
            'city_id' => $request->input('city_id'),
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'description' => $request->input('description') ?? null,
            'published_at' => $request->input('publishDate'),
        ]);

        $car->features()->create([
            'air_conditioning' => $request->has('air_conditioning'),
            'power_windows' => $request->has('power_windows'),
            'gps' => $request->has('gps'),
            'power_door_locks' => $request->has('power_door_locks'),
            'heated_seats' => $request->has('heated_seats'),
            'abs' => $request->has('abs'),
            'climate_control' => $request->has('climate_control'),
            'cruise_control' => $request->has('cruise_control'),
            'bluetooth' => $request->has('bluetooth'),
            'leather_seats' => $request->has('leather_seats'),
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $index => $image) {
                $path = $image->store('car_images', 'public'); // Still stores in car_images/
                $filename = basename($path); // This gives just the filename part
        
                $car->images()->create([
                    'image_path' => $filename, // Now stores only the filename
                    'position' => $index + 1,
                ]);
            }
        }
        

        return redirect()->route('car.index')->with('success', 'Car added successfully!');
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

    public function getModels($makerId)
    {
        $models = Models::where('maker_id', $makerId)->get();
        return response()->json($models);
    }

    public function getCities($regionId)
    {
        $cities = City::where('region_id', $regionId)->get();
        return response()->json($cities);
    }
}
