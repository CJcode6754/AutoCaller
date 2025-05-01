<x-backend-layout title="Brands">
    <main>
        <section class="flex flex-col md:flex-row gap-8 py-12 px-12 md:px-16 md:py-6">
            <div class="bg-gray-50 shadow-lg rounded-b-lg w-full md:w-1/5 py-4 px-8">
                <form action="{{route('brands')}}" method="GET">
                    @foreach ($makers as $maker)
                        <a href="{{route('brands', ['maker'=> $maker->name])}}" class="brand-card w-50 mb-4">
                            <img class="brand-card-image" src="{{ asset('assets/car_brand/'. $maker->name .'.png') }}" alt="Audi Logo">
                            <h3 class="brand-card-name">{{$maker->name}}</h3>
                        </a>
                    @endforeach
                </form>
            </div>

            <div class="bg-gray-50 shadow-lg rounded-b-lg w-full md:w-4/5 space-y-4 py-4 px-8">
                <div class="overflow-x-auto pb-4 md:hidden">
                    <div class="flex gap-4 min-w-max">
                        @foreach ($cars as $car)
                            <x-mobile-featured-cars-card :$car/>
                        @endforeach
                    </div>
                </div>
                <div class="hidden md:grid md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($cars as $car)
                        <x-featured-cars-card :$car/>
                    @endforeach
                </div>
                {{$cars->onEachSide(1)->appends(request()->query())->links()}}
            </div>
        </section>
    </main>
</x-backend-layout>