<x-backend-layout title="Search Car">
    <h1 class="text-xl md:text-2xl font-semibold text-gray-500 mb-4 ms-4 lg:ms-24">Define your Search Criteria</h1>
    <section class="flex flex-col md:flex-row items-start gap-2 lg:gap-4 mx-2 lg:mx-24 pb-16">
        <section class="bg-white shadow-lg rounded-b-lg w-full md:w-1/3">
            <div class="pt-4 px-4">
                <h1 class="text-xl font-medium text-gray-500 mb-2">Found Cars: <strong>{{$cars->total()}}</strong></h1>
                <hr class="border border-gray-100">
            </div>

            <div class="py-4 px-4">
                {{-- Maker --}}
                <div class="py-2">
                    <h2 class="label">Maker</h2>
                    <x-dropdown>
                        <x-slot:label>Maker</x-slot:label>
                        <x-slot:options>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Toyota</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Nissan</a>
                        </x-slot:options>
                    </x-dropdown>
                </div>
                {{-- Model --}}
                <div class="py-2">
                    <h2 class="label">Model</h2>
                    <x-dropdown>
                        <x-slot:label>Model</x-slot:label>
                        <x-slot:options>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Camry</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Altima</a>
                        </x-slot:options>
                    </x-dropdown>
                </div>
                {{-- Car Type --}}
                <div class="py-2">
                    <h2 class="label">Car Type</h2>
                    <x-dropdown>
                        <x-slot:label>Car Type</x-slot:label>
                        <x-slot:options>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Coupe</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Crossover</a>
                        </x-slot:options>
                    </x-dropdown>
                </div>

                {{-- Year --}}
                <div class="py-2">
                    <h2 class="label">Year</h2>
                    <div class="flex flex-row gap-2">
                        <input type="number" name="yearFrom" placeholder="Year From"
                            class="w-full border border-gray-300 rounded px-4 py-2">
                        <input type="number" name="yearTo" placeholder="Year To"
                            class="w-full border border-gray-300 rounded px-4 py-2">
                    </div>
                </div>

                {{-- Price --}}
                <div class="py-2">
                    <h2 class="label">Price</h2>
                    <div class="flex flex-row gap-2">
                        <input type="number" name="priceFrom" placeholder="Price From"
                            class="w-full border border-gray-300 rounded px-4 py-2">
                        <input type="number" name="priceTo" placeholder="Price To"
                            class="w-full border border-gray-300 rounded px-4 py-2">
                    </div>
                </div>

                {{-- Mileage --}}
                <div class="py-2">
                    <h2 class="label">Mileage</h2>
                    <x-dropdown>
                        <x-slot:label>Any Mileage</x-slot:label>
                        <x-slot:options>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">10,000 or less</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">20,000 or less</a>
                        </x-slot:options>
                    </x-dropdown>
                </div>

                {{-- State --}}
                <div class="py-2">
                    <h2 class="label">State/Region</h2>
                    <x-dropdown>
                        <x-slot:label>State/Region</x-slot:label>
                        <x-slot:options>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">New York</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">California</a>
                        </x-slot:options>
                    </x-dropdown>
                </div>


                {{-- City --}}
                <div class="py-2">
                    <h2 class="label">City</h2>
                    <x-dropdown>
                        <x-slot:label>City</x-slot:label>
                        <x-slot:options>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">City 1</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">City 2</a>
                        </x-slot:options>
                    </x-dropdown>
                </div>


                {{-- Fuel Type --}}
                <div class="py-2">
                    <h2 class="label">Fuel Type</h2>
                    <x-dropdown>
                        <x-slot:label>Fuel Type</x-slot:label>
                        <x-slot:options>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Diesel</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Electric</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Gasoline</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700">Hybrid</a>
                        </x-slot:options>
                    </x-dropdown>
                </div>

                {{-- Buttons --}}
                <div class="flex justify-start gap-4 mt-4">
                    <button type="reset"
                        class="text-sm bg-gray-200 border border-gray-300 hover:bg-gray-400 rounded-sm py-2 px-6 w-full transition duration-150">Reset</button>
                    <button type="submit"
                        class="text-sm text-white bg-orange-600 hover:bg-orange-500 rounded-sm py-2 px-6 w-full transition duration-150">Submit</button>
                </div>
            </div>
        </section>

        <section class="bg-white shadow-lg rounded-b-lg w-full md:w-3/4 px-6 py-8">
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
            {{$cars->onEachSide(1)->links()}}
        </section>
    </section>
</x-backend-layout>
