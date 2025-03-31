@extends('layout.backend')


@section('content')
    {{-- Hero Section --}}
    <section class="relative bg-white text-gray-900 py-20 px-12 md:px-24 lg:py-20 overflow-hidden">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center">
            <div class="lg:1/2 text-center lg:text-left">
                <h3 class="text-lg font-light">Find cars for sale and rent near you</h3>
                <h1 class="text-7xl mt-5">5000+ Vehicles <br>
                    Available</h1>
                <div class="mt-6 flex justify-center lg:justify-start gap-2">
                    <button class="text-white font-semibold bg-blue-600 hover:bg-blue-700 py-3 px-6 rounded-lg shadow-md flex items-center gap-2 transition-all">
                        View Inventory <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
                    <button class="text-sm lg:text-lg border border-gray-700 text-gray-900 hover:bg-gray-100 font-semibold  py-3 px-6 rounded-md items-center transition-all">Contact Us <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
                </div>

                <h3 class="text-medium font-semibold mt-8">or Browse Featured Model</h3>
                <ul class="flex justify-center lg:justify-start gap-3 mt-3 flex-wrap">
                    <li class="car-type"><i class="fa-solid fa-car-side"></i><a href="#">SUV</a></li>
                     <li class="car-type"><i class="fa-solid fa-car-side"></i><a href="#">Sedan</a></li>
                    <li class="car-type"><i class="fa-solid fa-car-side"></i><a href="#">Hatchback</a></li>
                    <li class="car-type"><i class="fa-solid fa-car-side"></i><a href="#">Coupe</a></li>
                    <li class="car-type"><i class="fa-solid fa-car-side"></i><a href="#">Electric</a></li>
                </ul>
            </div>
            <div class="lg:w-1/2 lg:flex hidden justify-end items-center">
                <img src="{{asset('assets/hero.png')}}" alt="Hero Image" class="w-full h-auto object-contain">
            </div>
        </div>
    </section>

    {{-- Explore Our Premium Brands Section --}}
    <section class="py-12 px-12 md:px-24 md:py-6    ">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row lg:flex-row items-center justify-between">
            <h1 class="text-xl lg:text-4xl font-semibold">Explore Our Premium Brands</h1>
            <p class="font-light">Show all Brands <i class="fa-solid fa-arrow-up-right-from-square text-gray-500"></i></p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3 py-8">
            <div class="brand-card">
                <img class="brand-card-image" src="{{asset('assets/car_brand/audi_logo.png')}}" alt="Audi Logo">
                <h3 class="brand-card-name">Audi</h3>
            </div>
            <div class="brand-card">
                <img class="brand-card-image" src="{{asset('assets/car_brand/bmw_logo.png')}}" alt="BMW Logo">
                <h3 class="brand-card-name">BMW</h3>
            </div>
            <div class="brand-card">
                <img class="brand-card-image" src="{{asset('assets/car_brand/ford_logo.png')}}" alt="Ford Logo">
                <h3 class="brand-card-name">Ford</h3>
            </div>
            <div class="brand-card">
                <img class="brand-card-image" src="{{asset('assets/car_brand/mercedes_logo.png')}}" alt="Mesercedes Benz Logo">
                <h3 class="brand-card-name">Mercedes Benz</h3>
            </div>
            <div class="brand-card">
                <img class="brand-card-image" src="{{asset('assets/car_brand/peugeot_logo.png')}}" alt="Peugeot Logo">
                <h3 class="brand-card-name">Peugeot</h3>
            </div>
            <div class="brand-card">
                <img class="brand-card-image" src="{{asset('assets/car_brand/volkswagen_logo.png')}}" alt="Volkswagen Logo">
                <h3 class="brand-card-name">Volkswagen</h3>
            </div>
        </div>
    </section>

    {{-- Our Services Section --}}
    <section class="py-12 px-12 md:px-24">
        <h1 class="text-3xl md:text-4xl font-semibold mb-8">Our Services</h1>
        <div class="card-scrollbar scrollbar-hidden">
            <div class="service-card">
                <img class="service-card-image" src="{{asset('assets/cars/Bmw.png')}}" alt="BMW Car">
                <p class="service-card-name">2020 BMW X3 M and X4 M</p>
                <button class="service-card-btn">View <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
            </div>
            <div class="service-card">
                <img class="service-card-image" src="{{asset('assets/cars/mercedes.png')}}" alt="Mercedes Car">
                <p class="service-card-name">Mercedes-AMG GT 63</p>
                <button class="service-card-btn">View <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
            </div>
            <div class="service-card md:hidden lg:block">
                <img class="service-card-image" src="{{asset('assets/cars/Audi.png')}}" alt="Audi Car">
                <p class="service-card-name">2020 Audi A3</p>
                <button class="service-card-btn">View <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
            </div>
        </div>
    </section>

    <section class="py-12 px-12 md:px-24 bg-gray-100">
        <div class="flex flex-col lg:flex-row">
            <div class="flex justify-center items-center">
                <div class="w-full md:w-3/4 lg:w-3/4 flex items-center justify-center py-10 lg:py-20">
                    <img class="w-5/6 h-auto object-contain" src="{{asset('assets/cars/Bmw.png')}}" alt="Image  ">
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-col justify-start py-4 lg:py-12 px-2 md:px-12 lg:px-12">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-4 text-center md:text-left">Get a Fair Price For Your <br class="hidden md:block"> Car Sell To Us Today</h2>
                    <p class="text-sm md:text-base font-light mb-4 text-center md:text-left">We are commited to providing our costumers with exceptional service, <br class="hidden md:block">
                    competitive pricing, and a wide range of.</p>
                </div>
                <ul class="mb-4 space-y-2">
                    <li class="text-sm font-semibold flex items-center"><i class="fa-solid fa-circle-check text-gray-400 mr-2"></i>We are the Philippines largest provider, with more patrols in more places</li>
                    <li class="text-sm font-semibold flex items-center"><i class="fa-solid fa-circle-check text-gray-400 mr-2"></i>You get 24/7 roadside assistance</li>
                    <li class="text-sm font-semibold flex items-center"><i class="fa-solid fa-circle-check text-gray-400 mr-2"></i>We fix 4 out of four cars at the roadside</li>
                </ul>
                <div class="flex justify-center md:justify-start mt-4">
                    <button class="text-white bg-blue-500 rounded-lg hover:bg-blue-600 py-3 px-4 w-40">Get started <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
                </div>
            </div>
        </div>
        <div class="w-full grid grid-cols-2 md:grid-cols-4 mt-8 text-center">
            <h3><span class="text-[30px] md:text-[45px] text-center font-semibold">836M</span><br>CARS FOR SALE</h3>
            <h3><span class="text-[30px] md:text-[45px] font-semibold">500M</span><br>DEALER REVIEWS</h3>
            <h3><span class="text-[30px] md:text-[45px] font-semibold">50K</span><br>VISITORS PER WEEK</h3>
            <h3><span class="text-[30px] md:text-[45px] font-semibold">20K</span><br>VERIFIED DEALERS</h3>
        </div>
    </section>
@endsection