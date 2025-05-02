<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeature;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\FuelType;
use App\Models\Maker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $carTypes = CarType::all();
        $makers = Maker::all();

        $cars = Car::where('published_at', '<', now())
            ->with(['primaryImage', 'region', 'city', 'makers', 'models', 'fuelType', 'carType'])
            ->orderBy('published_at', 'desc')
            ->paginate(8);

        return view('home.index', compact('cars', 'carTypes', 'makers'));
    }

    public function brands(Request $request){
        $makers = Maker::all();

        $query = Car::where('published_at', '<', now())
            ->with('primaryImage', 'region', 'city', 'fuelType', 'CarType', 'makers', 'models');

        if($request->has('maker')){
            $maker = Maker::where('name', $request->maker)->first();

            if($maker){
                $query->where('maker_id', $maker->id);
            }
        }

        $cars = $query->orderBy('published_at', 'desc')
            ->paginate(21)
            ->appends($request->query());

        return view('home.brands', compact('makers', 'cars'));
    }

    public function listings(){
        return view('home.listings');
    }

    public function blog(){
        return view('home.blog');
    }

    public function logout(Request $request)
    {
        //logout user
        Auth::logout();

        //Invalidate session
        $request->session()->invalidate();

        //generate new Tokens
        $request->session()->regenerateToken();

        //redirect to home page
        return redirect('/');
    }
}
