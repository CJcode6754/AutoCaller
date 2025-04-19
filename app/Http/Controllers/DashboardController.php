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

class DashboardController extends Controller
{
    public function index(){
        $cars = Car::where('published_at', '<', now())
            ->with(['primaryImage', 'city', 'makers', 'models', 'fuelType', 'carType'])
            ->orderBy('published_at', 'desc')
            ->paginate(8);
        return view('home.index', compact('cars'));
    }
}
