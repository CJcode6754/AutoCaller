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
        $cars = Car::where('published_at', '<', now())
            ->with(['primaryImage', 'city', 'makers', 'models', 'fuelType', 'carType'])
            ->orderBy('published_at', 'desc')
            ->paginate(8);
        return view('home.index', compact('cars'));
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
