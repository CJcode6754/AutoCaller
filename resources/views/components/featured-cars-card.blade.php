@props(['car', 'isfavorite' => false])
<div class="featured-card relative">
    <a href="{{route('car.show', $car->id)}}"><img class="featured-card-image" src="{{ asset('storage/car_images/' . $car->primaryImage->image_path) }}" alt="Cars"></a>
    <div @class(['hidden' => $isfavorite])>
        <span class="bookmark-icon"><i class="fa-solid fa-heart"></i></span>
    </div>
    <div  @class(['hidden' => !$isfavorite])>
        <span class="bookmark-icon-red"><i class="fa-solid fa-heart"></i></span>
    </div>
    <div class="mx-6 flex flex-col justify-start items-center">
        <div>
            <h3 class="font-medium text-lg">{{$car->year}} - {{$car->makers->name}} - {{$car->models->name}}</h3>
        </div>
        <div class="flex justify-center items-center gap-4 pt-2">
            <p class="font-medium text-sm">{{$car->region->name}}</p>
            <p class="font-medium text-sm">{{Str::of($car->city->name)->limit(20)}}</p>
        </div>
        <hr class="w-full mt-2 border border-gray-200">
    </div>

    <div class="flex justify-between items-center gap-8 mt-2">
        <div class="flex flex-col justify-center items-center gap-2">
            <img class="size-6" src="{{ asset(path: 'assets/icons/Distance.svg') }}" alt="Distance Icon">
            <span>{{$car->mileage}}</span>
        </div>
        <div class="flex flex-col justify-center items-center gap-2">
            <img class="size-6" src="{{ asset('assets/icons/Gas.svg') }}" alt="Gas Icon">
            <span>{{$car->FuelType->name}}</span>
        </div>
        <div class="flex flex-col justify-center items-center gap-2">
            <img class="size-6" src="{{ asset('assets/icons/typeOfCar.svg') }}" alt="Type of Car">
            <span>{{$car->carType->name}}</span>
        </div>
    </div>
    <hr class="w-4/5 m-0 border border-gray-200">
    <div class="flex justify-between items-center gap-16 mt-2 mb-8">
        <h3 class="text-[#050B20] font-medium text-lg">{{$car->price}}</h3>
        <div class="flex justify-center items-center gap-1">
            <h3 class="text-blue-600 font-medium"><a href="{{route('car.show', $car->id)}}">View Details</a></h3>
            <img class="text-blue-600" src="{{ asset('assets/icons/blueArrow.svg') }}" alt="Arrow Icon">
        </div>
    </div>
</div>