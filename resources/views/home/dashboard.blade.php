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
                    <button
                        class="text-white font-semibold bg-blue-600 hover:bg-blue-700 py-3 px-6 rounded-lg shadow-md flex items-center gap-2 transition-all">
                        View Inventory <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
                    <button
                        class="text-sm lg:text-lg border border-gray-700 text-gray-900 hover:bg-gray-100 font-semibold  py-3 px-6 rounded-md items-center transition-all">Contact
                        Us <i class="fa-solid fa-arrow-up-right-from-square"></i></button>
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
                <img src="{{ asset('assets/hero.png') }}" alt="Hero Image" class="w-full h-auto object-contain">
            </div>
        </div>
    </section>

    {{-- Explore Our Premium Brands Section --}}
    <section class="py-12 px-12 md:p-x24 md:py-6    ">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row lg:flex-row items-center justify-between">
            <h1 class="text-xl lg:text-4xl font-semibold">Explore Our Premium Brands</h1>
            <p class="flex justify-center items-center font-light gap-2">Show all Brands <span><img
                        src="{{ asset('assets/upArrow.svg') }}" alt="Arrow"></p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3 py-8">
            <div class="brand-card">
                <img class="brand-card-image" src="{{ asset('assets/car_brand/audi_logo.png') }}" alt="Audi Logo">
                <h3 class="brand-card-name">Audi</h3>
            </div>
            <div class="brand-card">
                <img class="brand-card-image" src="{{ asset('assets/car_brand/bmw_logo.png') }}" alt="BMW Logo">
                <h3 class="brand-card-name">BMW</h3>
            </div>
            <div class="brand-card">
                <img class="brand-card-image" src="{{ asset('assets/car_brand/ford_logo.png') }}" alt="Ford Logo">
                <h3 class="brand-card-name">Ford</h3>
            </div>
            <div class="brand-card">
                <img class="brand-card-image" src="{{ asset('assets/car_brand/mercedes_logo.png') }}"
                    alt="Mesercedes Benz Logo">
                <h3 class="brand-card-name">Mercedes Benz</h3>
            </div>
            <div class="brand-card">
                <img class="brand-card-image" src="{{ asset('assets/car_brand/peugeot_logo.png') }}" alt="Peugeot Logo">
                <h3 class="brand-card-name">Peugeot</h3>
            </div>
            <div class="brand-card">
                <img class="brand-card-image" src="{{ asset('assets/car_brand/volkswagen_logo.png') }}"
                    alt="Volkswagen Logo">
                <h3 class="brand-card-name">Volkswagen</h3>
            </div>
        </div>
    </section>

    {{-- Our Services Section --}}
    <section class="py-12 px-12 md:px-24">
        <h1 class="text-3xl md:text-4xl font-semibold mb-8">Our Services</h1>
        <div class="card-scrollbar scrollbar-hidden">
            <div class="service-card">
                <img class="service-card-image" src="{{ asset('assets/cars/Bmw.png') }}" alt="BMW Car">
                <p class="service-card-name">2020 BMW X3 M and X4 M</p>
                <button class="service-card-btn">View <i class="fa-solid fa-arrow-up-right-from-square ml-1"></i></button>
            </div>
            <div class="service-card">
                <img class="service-card-image" src="{{ asset('assets/cars/mercedes.png') }}" alt="Mercedes Car">
                <p class="service-card-name">Mercedes-AMG GT 63</p>
                <button class="service-card-btn">View <i class="fa-solid fa-arrow-up-right-from-square ml-1"></i></button>
            </div>
            <div class="service-card md:hidden lg:block">
                <img class="service-card-image" src="{{ asset('assets/cars/Audi.png') }}" alt="Audi Car">
                <p class="service-card-name">2020 Audi A3</p>
                <button class="service-card-btn">View <i class="fa-solid fa-arrow-up-right-from-square ml-1"></i></button>
            </div>
        </div>
    </section>

    <section class="py-12 px-12 md:px-24 bg-gray-100">
        <div class="flex flex-col lg:flex-row">
            <div class="flex justify-center items-center">
                <div class="w-full md:w-3/4 lg:w-3/4 flex items-center justify-center py-10 lg:py-20">
                    <img class="w-5/6 h-auto object-contain" src="{{ asset('assets/cars/Bmw.png') }}" alt="Image  ">
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-col justify-start py-4 lg:py-12 px-2 md:px-12 lg:px-12">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-4 text-center md:text-left">Get a Fair Price For Your <br
                            class="hidden md:block"> Car Sell To Us Today</h2>
                    <p class="text-sm md:text-base font-light mb-4 text-center md:text-left">We are commited to providing
                        our costumers with exceptional service, <br class="hidden md:block">
                        competitive pricing, and a wide range of.</p>
                </div>
                <ul class="mb-4 space-y-2">
                    <li class="text-sm font-semibold flex items-center"><i
                            class="fa-solid fa-circle-check text-gray-400 mr-2"></i>We are the Philippines largest
                        provider, with more patrols in more places</li>
                    <li class="text-sm font-semibold flex items-center"><i
                            class="fa-solid fa-circle-check text-gray-400 mr-2"></i>You get 24/7 roadside assistance</li>
                    <li class="text-sm font-semibold flex items-center"><i
                            class="fa-solid fa-circle-check text-gray-400 mr-2"></i>We fix 4 out of four cars at the
                        roadside</li>
                </ul>
                <div class="flex justify-center md:justify-start mt-4">
                    <button class="text-white bg-blue-500 rounded-lg hover:bg-blue-600 py-3 px-4 w-40">Get started <i
                            class="fa-solid fa-arrow-up-right-from-square"></i></button>
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

    {{-- Featured Cars Section --}}
    <section class="py-12 px-12 md:px-24 md:py-16">
        <div>
            <div class="max-w-7xl mx-auto flex flex-row items-center justify-between">
                <h1 class="text-xl lg:text-4xl font-semibold">Featured Listings</h1>
                <p class="flex justify-center items-center font-light gap-2">Show all Brands <span><img
                            src="{{ asset('assets/upArrow.svg') }}" alt="Arrow"></span></p>
            </div>

            <ul class="mt-4 lg:ml-4 flex justify-center md:justify-start items-center gap-4 flex-wrap">
                <li class="car-featured">In Stock</li>
                <li class="car-featured">New Cars</li>
                <li class="car-featured">Used Cars</li>
            </ul>
            <hr class="w-full mt-2 border border-gray-300 lg:ml-3">

            <section class="mt-8">
                <div class="overflow-x-auto pb-4 md:hidden">
                    <div class="flex gap-4 min-w-max">
                        <div class="featured-card relative w-72">
                            <img class="featured-card-image" src="{{ asset('assets/cars/Bmw.png') }}" alt="Cars">
                            <span class="bookmark-icon"><i class="fa-regular fa-bookmark"></i></span>
                            <div class="mx-6">
                                <div>
                                    <h3 class="font-medium text-lg">BMW</h3>
                                </div>
                                <p class="font-light text-medium">Lorem ipsum dolor si tamet consectetur adipisicing elit.
                                    aadadad
                                </p>
                                <hr class="w-full mt-2 border border-gray-200">
                            </div>

                            <div class="flex justify-between items-center gap-12 mt-2">
                                <div class="flex flex-col justify-center items-center gap-2">
                                    <img class="size-6" src="{{ asset('assets/Distance.svg') }}" alt="Distance Icon">
                                    <span>1000 km</span>
                                </div>
                                <div class="flex flex-col justify-center items-center gap-2">
                                    <img class="size-6" src="{{ asset('assets/Gas.svg') }}" alt="Gas Icon">
                                    <span>Petrol</span>
                                </div>
                                <div class="flex flex-col justify-center items-center gap-2">
                                    <img class="size-6" src="{{ asset('assets/typeOfCar.svg') }}" alt="Type of Car">
                                    <span>CVT</span>
                                </div>
                            </div>
                            <hr class="w-4/5 m-0 border border-gray-200">
                            <div class="flex justify-between items-center gap-16 mt-2 mb-8">
                                <h3 class="text-[#050B20] font-medium text-lg">$15,000</h3>
                                <div class="flex justify-center items-center gap-1">
                                    <h3 class="text-blue-600 font-medium"><a href="#">View Details</a></h3>
                                    <img class="text-blue-600" src="{{ asset('assets/blueArrow.svg') }}"
                                        alt="Arrow Icon">
                                </div>
                            </div>
                        </div>

                        <div class="featured-card relative w-72">
                            <img class="featured-card-image" src="{{ asset('assets/cars/Bmw.png') }}" alt="Cars">
                            <span class="bookmark-icon"><i class="fa-regular fa-bookmark"></i></span>
                            <div class="mx-6">
                                <div>
                                    <h3 class="font-medium text-lg">BMW</h3>
                                </div>
                                <p class="font-light text-medium">Lorem ipsum dolor si tamet consectetur adipisicing elit.
                                    aadadad
                                </p>
                                <hr class="w-full mt-2 border border-gray-200">
                            </div>

                            <div class="flex justify-between items-center gap-12 mt-2">
                                <div class="flex flex-col justify-center items-center gap-2">
                                    <img class="size-6" src="{{ asset('assets/Distance.svg') }}" alt="Distance Icon">
                                    <span>1000 km</span>
                                </div>
                                <div class="flex flex-col justify-center items-center gap-2">
                                    <img class="size-6" src="{{ asset('assets/Gas.svg') }}" alt="Gas Icon">
                                    <span>Petrol</span>
                                </div>
                                <div class="flex flex-col justify-center items-center gap-2">
                                    <img class="size-6" src="{{ asset('assets/typeOfCar.svg') }}" alt="Type of Car">
                                    <span>CVT</span>
                                </div>
                            </div>
                            <hr class="w-4/5 m-0 border border-gray-200">
                            <div class="flex justify-between items-center gap-16 mt-2 mb-8">
                                <h3 class="text-[#050B20] font-medium text-lg">$15,000</h3>
                                <div class="flex justify-center items-center gap-1">
                                    <h3 class="text-blue-600 font-medium"><a href="#">View Details</a></h3>
                                    <img class="text-blue-600" src="{{ asset('assets/blueArrow.svg') }}"
                                        alt="Arrow Icon">
                                </div>
                            </div>
                        </div>

                        <div class="featured-card relative w-72">
                            <img class="featured-card-image" src="{{ asset('assets/cars/Bmw.png') }}" alt="Cars">
                            <span class="bookmark-icon"><i class="fa-regular fa-bookmark"></i></span>
                            <div class="mx-6">
                                <div>
                                    <h3 class="font-medium text-lg">BMW</h3>
                                </div>
                                <p class="font-light text-medium">Lorem ipsum dolor si tamet consectetur adipisicing elit.
                                    aadadad
                                </p>
                                <hr class="w-full mt-2 border border-gray-200">
                            </div>

                            <div class="flex justify-between items-center gap-12 mt-2">
                                <div class="flex flex-col justify-center items-center gap-2">
                                    <img class="size-6" src="{{ asset('assets/Distance.svg') }}" alt="Distance Icon">
                                    <span>1000 km</span>
                                </div>
                                <div class="flex flex-col justify-center items-center gap-2">
                                    <img class="size-6" src="{{ asset('assets/Gas.svg') }}" alt="Gas Icon">
                                    <span>Petrol</span>
                                </div>
                                <div class="flex flex-col justify-center items-center gap-2">
                                    <img class="size-6" src="{{ asset('assets/typeOfCar.svg') }}" alt="Type of Car">
                                    <span>CVT</span>
                                </div>
                            </div>
                            <hr class="w-4/5 m-0 border border-gray-200">
                            <div class="flex justify-between items-center gap-16 mt-2 mb-8">
                                <h3 class="text-[#050B20] font-medium text-lg">$15,000</h3>
                                <div class="flex justify-center items-center gap-1">
                                    <h3 class="text-blue-600 font-medium"><a href="#">View Details</a></h3>
                                    <img class="text-blue-600" src="{{ asset('assets/blueArrow.svg') }}"
                                        alt="Arrow Icon">
                                </div>
                            </div>
                        </div>

                        <div class="featured-card relative w-72">
                            <img class="featured-card-image" src="{{ asset('assets/cars/Bmw.png') }}" alt="Cars">
                            <span class="bookmark-icon"><i class="fa-regular fa-bookmark"></i></span>
                            <div class="mx-6">
                                <h3 class="font-medium text-lg">BMW</h3>
                                <p class="font-light">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                <hr class="w-full mt-2 border border-gray-200">
                            </div>
                            <div class="flex justify-between items-center gap-12 mt-2">
                                <div class="flex flex-col justify-center items-center gap-2">
                                    <img class="size-6" src="{{ asset('assets/Distance.svg') }}" alt="Distance Icon">
                                    <span>1000 km</span>
                                </div>
                                <div class="flex flex-col justify-center items-center gap-2">
                                    <img class="size-6" src="{{ asset('assets/Gas.svg') }}" alt="Gas Icon">
                                    <span>Petrol</span>
                                </div>
                                <div class="flex flex-col justify-center items-center gap-2">
                                    <img class="size-6" src="{{ asset('assets/typeOfCar.svg') }}" alt="Type of Car">
                                    <span>CVT</span>
                                </div>
                            </div>
                            <hr class="w-4/5 m-0 border border-gray-200">
                            <div class="flex justify-between items-center gap-16 mt-2 mb-8">
                                <h3 class="text-[#050B20] font-medium text-lg">$15,000</h3>
                                <div class="flex justify-center items-center gap-1">
                                    <h3 class="text-blue-600 font-medium"><a href="#">View Details</a></h3>
                                    <img class="text-blue-600" src="{{ asset('assets/blueArrow.svg') }}"
                                        alt="Arrow Icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hidden md:grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="featured-card relative">
                        <img class="featured-card-image" src="{{ asset('assets/cars/Bmw.png') }}" alt="Cars">
                        <span class="bookmark-icon"><i class="fa-regular fa-bookmark"></i></span>
                        <div class="mx-6">
                            <div>
                                <h3 class="font-medium text-lg">BMW</h3>
                            </div>
                            <p class="font-light text-medium">Lorem ipsum dolor si tamet consectetur adipisicing elit.
                                aadadad
                            </p>
                            <hr class="w-full mt-2 border border-gray-200">
                        </div>

                        <div class="flex justify-between items-center gap-12 mt-2">
                            <div class="flex flex-col justify-center items-center gap-2">
                                <img class="size-6" src="{{ asset('assets/Distance.svg') }}" alt="Distance Icon">
                                <span>1000 km</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-2">
                                <img class="size-6" src="{{ asset('assets/Gas.svg') }}" alt="Gas Icon">
                                <span>Petrol</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-2">
                                <img class="size-6" src="{{ asset('assets/typeOfCar.svg') }}" alt="Type of Car">
                                <span>CVT</span>
                            </div>
                        </div>
                        <hr class="w-4/5 m-0 border border-gray-200">
                        <div class="flex justify-between items-center gap-16 mt-2 mb-8">
                            <h3 class="text-[#050B20] font-medium text-lg">$15,000</h3>
                            <div class="flex justify-center items-center gap-1">
                                <h3 class="text-blue-600 font-medium"><a href="#">View Details</a></h3>
                                <img class="text-blue-600" src="{{ asset('assets/blueArrow.svg') }}" alt="Arrow Icon">
                            </div>
                        </div>
                    </div>

                    <div class="featured-card relative">
                        <img class="featured-card-image" src="{{ asset('assets/cars/Bmw.png') }}" alt="Cars">
                        <span class="bookmark-icon"><i class="fa-regular fa-bookmark"></i></span>
                        <div class="mx-6">
                            <div>
                                <h3 class="font-medium text-lg">BMW</h3>
                            </div>
                            <p class="font-light text-medium">Lorem ipsum dolor si tamet consectetur adipisicing elit.
                                aadadad
                            </p>
                            <hr class="w-full mt-2 border border-gray-200">
                        </div>

                        <div class="flex justify-between items-center gap-12 mt-2">
                            <div class="flex flex-col justify-center items-center gap-2">
                                <img class="size-6" src="{{ asset('assets/Distance.svg') }}" alt="Distance Icon">
                                <span>1000 km</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-2">
                                <img class="size-6" src="{{ asset('assets/Gas.svg') }}" alt="Gas Icon">
                                <span>Petrol</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-2">
                                <img class="size-6" src="{{ asset('assets/typeOfCar.svg') }}" alt="Type of Car">
                                <span>CVT</span>
                            </div>
                        </div>
                        <hr class="w-4/5 m-0 border border-gray-200">
                        <div class="flex justify-between items-center gap-16 mt-2 mb-8">
                            <h3 class="text-[#050B20] font-medium text-lg">$15,000</h3>
                            <div class="flex justify-center items-center gap-1">
                                <h3 class="text-blue-600 font-medium"><a href="#">View Details</a></h3>
                                <img class="text-blue-600" src="{{ asset('assets/blueArrow.svg') }}" alt="Arrow Icon">
                            </div>
                        </div>
                    </div>

                    <div class="featured-card relative">
                        <img class="featured-card-image" src="{{ asset('assets/cars/Bmw.png') }}" alt="Cars">
                        <span class="bookmark-icon"><i class="fa-regular fa-bookmark"></i></span>
                        <div class="mx-6">
                            <div>
                                <h3 class="font-medium text-lg">BMW</h3>
                            </div>
                            <p class="font-light text-medium">Lorem ipsum dolor si tamet consectetur adipisicing elit.
                                aadadad
                            </p>
                            <hr class="w-full mt-2 border border-gray-200">
                        </div>

                        <div class="flex justify-between items-center gap-12 mt-2">
                            <div class="flex flex-col justify-center items-center gap-2">
                                <img class="size-6" src="{{ asset('assets/Distance.svg') }}" alt="Distance Icon">
                                <span>1000 km</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-2">
                                <img class="size-6" src="{{ asset('assets/Gas.svg') }}" alt="Gas Icon">
                                <span>Petrol</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-2">
                                <img class="size-6" src="{{ asset('assets/typeOfCar.svg') }}" alt="Type of Car">
                                <span>CVT</span>
                            </div>
                        </div>
                        <hr class="w-4/5 m-0 border border-gray-200">
                        <div class="flex justify-between items-center gap-16 mt-2 mb-8">
                            <h3 class="text-[#050B20] font-medium text-lg">$15,000</h3>
                            <div class="flex justify-center items-center gap-1">
                                <h3 class="text-blue-600 font-medium"><a href="#">View Details</a></h3>
                                <img class="text-blue-600" src="{{ asset('assets/blueArrow.svg') }}" alt="Arrow Icon">
                            </div>
                        </div>
                    </div>


                    <div class="featured-card relative">
                        <img class="featured-card-image" src="{{ asset('assets/cars/Bmw.png') }}" alt="Cars">
                        <span class="bookmark-icon"><i class="fa-regular fa-bookmark"></i></span>
                        <div class="mx-6">
                            <div>
                                <h3 class="font-medium text-lg">BMW</h3>
                            </div>
                            <p class="font-light text-medium">Lorem ipsum dolor si tamet consectetur adipisicing elit.
                                aadadad
                            </p>
                            <hr class="w-full mt-2 border border-gray-200">
                        </div>

                        <div class="flex justify-between items-center gap-12 mt-2">
                            <div class="flex flex-col justify-center items-center gap-2">
                                <img class="size-6" src="{{ asset('assets/Distance.svg') }}" alt="Distance Icon">
                                <span>1000 km</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-2">
                                <img class="size-6" src="{{ asset('assets/Gas.svg') }}" alt="Gas Icon">
                                <span>Petrol</span>
                            </div>
                            <div class="flex flex-col justify-center items-center gap-2">
                                <img class="size-6" src="{{ asset('assets/typeOfCar.svg') }}" alt="Type of Car">
                                <span>CVT</span>
                            </div>
                        </div>
                        <hr class="w-4/5 m-0 border border-gray-200">
                        <div class="flex justify-between items-center gap-16 mt-2 mb-8">
                            <h3 class="text-[#050B20] font-medium text-lg">$15,000</h3>
                            <div class="flex justify-center items-center gap-1">
                                <h3 class="text-blue-600 font-medium"><a href="#">View Details</a></h3>
                                <img class="text-blue-600" src="{{ asset('assets/blueArrow.svg') }}" alt="Arrow Icon">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="flex justify-center items-center mt-4 gap-2">
                    <button class="pagination">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <button class="pagination-focus">
                        1
                    </button>
                    <button class="pagination">
                        2
                    </button>
                    <button class="pagination">
                        3
                    </button>
                    <!-- Next Button -->
                    <button class="pagination">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </section>
        </div>
    </section>

    <section class="bg-[#050B20] mx-8 lg:mx-24 rounded-2xl drop-shadow-md">
        <div class="flex flex-col md:flex-row items-center justify-center gap-12 lg:gap-24 py-12 px-12 lg:px-24">
            <div class="flex flex-row items-center gap-8">
                <img class="size-12 lg:size-20" src="{{ asset('assets/searchIcon.svg') }}" alt="Search Icon">
                <div>
                    <h1 class="text-xl lg:text-3xl font-semibold text-white mb-2">Search over 150,000 vehicles</h1>
                    <p class="text-white text-xs font-light">Choose from thousands of trusted used cars and vans across the
                        UK,<br class="hidden md:block">
                        from our national network of vetted dealers.</p>
                </div>
            </div>
            <div class="flex flex-row items-center gap-4">
                <button class="btn-search">Search Cars <img class="mt-1" src="{{ asset('assets/arrowWhite.svg') }}"
                        alt="Arrow"></button>
                <button class="btn-search">Search Vans <img class="mt-1" src="{{ asset('assets/arrowWhite.svg') }}"
                        alt="Arrow"></button>
            </div>
        </div>

        <div class="mx-6 md:mx-32 lg:mx-48 pb-12">
            <h3 class="text-white font-meduim">Or browse by type:</h3>
            <ul class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 items-center gap-4 mt-4 flex-wrap">
                <li class="carType">Automatic Cars</li>
                <li class="carType">SUV's</li>
                <li class="carType">Electric Cars</li>
                <li class="carType">New in Stock</li>
                <li class="carType">Petrol</li>
                <li class="carType">Diesel</li>
            </ul>
        </div>
    </section>

    <section class="py-12 px-12 md:px-24">
        <h1 class="flex justify-center text-4xl font-semibold">Why Choose Us?</h1>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-12 ">
            <div>
                <img src="{{asset('assets/priceTag.svg')}}" alt="Icon">
                <h3 class="md:text-sm lg:text-lg font-semibold my-3">Special Financing Offers</h3>
                <p class="text-sm leading-6">Our stress-free finance department <br> that can
                find financial solutions to save you money.</p>
            </div>
            <div>
                <img src="{{asset('assets/diamond.svg')}}" alt="Icon">
                <h3 class="md:text-sm lg:text-lg font-semibold my-3">Trusted Car Dealership</h3>
                <p class="text-sm leading-6">Our stress-free finance department <br> that can
                    find financial solutions to save you money.</p>
            </div>
            <div>
                <img src="{{asset('assets/tag.svg')}}" alt="Icon">
                <h3 class="md:text-sm lg:text-lg font-semibold my-3">Transparent Pricing</h3>
                <p class="text-sm leading-6">Our stress-free finance department <br> that can
                    find financial solutions to save you money.</p>
            </div>
            <div>
                <img src="{{asset('assets/car.svg')}}" alt="Icon">
                <h3 class="md:text-sm lg:text-lg font-semibold my-3">Expert Car Service</h3>
                <p class="text-sm leading-6">Our stress-free finance department <br> that can
                find financial solutions to save you money.</p>
            </div>
        </div>
    </section>
@endsection
