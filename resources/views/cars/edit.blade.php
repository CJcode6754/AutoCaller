<x-backend-layout title="Edit Car Details">
    <main>
        <section>
            <section class="relative bg-white shadow-lg rounded-b-lg mx-4 md:mx-16 lg:mx-60 px-4 md:px-6 py-6">
                <h1 class="text-2xl font-medium text-gray-500 mb-4">Edit</h1>
                <form action="">
                    {{-- Dropdown Section --}}
                    <section class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8">
                        {{-- Maker --}}
                        <div>
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
                        <div>
                            <h2 class="label">Model</h2>
                            <x-dropdown>
                                <x-slot:label>Model</x-slot:label>
                                <x-slot:options>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700">Camry</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700">Altima</a>
                                </x-slot:options>
                            </x-dropdown>
                        </div>
                        {{-- Year --}}
                        <div>
                            <h2 class="label">Year</h2>
                            <x-dropdown>
                                <x-slot:label>Year</x-slot:label>
                                <x-slot:options>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700">2023</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700">2024</a>
                                </x-slot:options>
                            </x-dropdown>
                        </div>
                    </section>

                    {{-- Car Type --}}
                    <section class="mt-6">
                        <h2 class="label">Car Type</h2>
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                            <label><input type="radio" name="car_type" value="Coupe"> Coupe</label>
                            <label><input type="radio" name="car_type" value="Crossover"> Crossover</label>
                            <label><input type="radio" name="car_type" value="Hatchback"> Hatchback</label>
                            <label><input type="radio" name="car_type" value="Jeep"> Jeep</label>
                            <label><input type="radio" name="car_type" value="Minivan"> Minivan</label>
                            <label><input type="radio" name="car_type" value="Pickup Truck"> Pickup Truck</label>
                            <label><input type="radio" name="car_type" value="Sedan"> Sedan</label>
                            <label><input type="radio" name="car_type" value="Sport Car"> Sport Car</label>
                            <label><input type="radio" name="car_type" value="SUV"> SUV</label>
                        </div>
                    </section>

                    {{-- Fuel Type --}}
                    <section class="mt-6">
                        <h2 class="label">Fuel Type</h2>
                        <div class="flex flex-wrap gap-4">
                            <label><input type="radio" name="fuel_type" value="Diesel"> Diesel</label>
                            <label><input type="radio" name="fuel_type" value="Electric"> Electric</label>
                            <label><input type="radio" name="fuel_type" value="Gasoline"> Gasoline</label>
                            <label><input type="radio" name="fuel_type" value="Hybrid"> Hybrid</label>
                        </div>
                    </section>

                    {{-- State & City --}}
                    <section class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h2 class="label">State/Region</h2>
                            <x-dropdown>
                                <x-slot:label>State/Region</x-slot:label>
                                <x-slot:options>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700">California</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700">Texas</a>
                                </x-slot:options>
                            </x-dropdown>
                        </div>
                        <div>
                            <h2 class="label">City</h2>
                            <x-dropdown>
                                <x-slot:label>City</x-slot:label>
                                <x-slot:options>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700">Los Angeles</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700">Houston</a>
                                </x-slot:options>
                            </x-dropdown>
                        </div>
                    </section>

                    {{-- Address & Phone --}}
                    <section class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h2 class="label">Address</h2>
                            <input type="text" name="address" placeholder="Address"
                                class="w-full border border-gray-300 rounded px-4 py-2">
                        </div>
                        <div>
                            <h2 class="label">Phone</h2>
                            <input type="tel" name="phone" placeholder="Phone"
                                class="w-full border border-gray-300 rounded px-4 py-2">
                        </div>
                    </section>

                    {{-- Accessories --}}
                    <section class="mt-6">
                        <h2 class="label">Accessories</h2>
                        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                            <label><input type="checkbox" name="car_accesories" value="Air Conditioning"> Air Conditioning</label>
                            <label><input type="checkbox" name="car_accesories" value="Power Windows"> Power Windows</label>
                            <label><input type="checkbox" name="car_accesories" value="GPS"> GPS Navigation</label>
                            <label><input type="checkbox" name="car_accesories" value="Power Door Locks"> Power Door Locks</label>
                            <label><input type="checkbox" name="car_accesories" value="Heated Seats"> Heated Seats</label>
                            <label><input type="checkbox" name="car_accesories" value="ABS"> ABS</label>
                            <label><input type="checkbox" name="car_accesories" value="Climate Control"> Climate Control</label>
                            <label><input type="checkbox" name="car_accesories" value="Cruise Control"> Cruise Control</label>
                            <label><input type="checkbox" name="car_accesories" value="Bluetooth"> Bluetooth</label>
                            <label><input type="checkbox" name="car_accesories" value="Leather Seats"> Leather Seats</label>
                        </div>
                    </section>

                    {{-- Description --}}
                    <div class="mt-6">
                        <h2 class="label">Detailed Description</h2>
                        <textarea name="description" rows="6"
                            class="w-full border border-gray-300 rounded px-4 py-2 resize-none"></textarea>
                    </div>

                    {{-- Publish Date --}}
                    <div class="mt-6">
                        <h2 class="label">Publish Date</h2>
                        <input type="date" name="publishDate"
                            class="w-full border border-gray-300 rounded px-4 py-2 text-gray-600">
                    </div>

                    {{-- Image Upload --}}
                    <div class="mt-6">
                        <label class="label">Upload Car Image Here</label>
                        <label for="carFormImageUpload" class="block w-full cursor-pointer">
                            <div class="mt-2 flex justify-center items-center h-40 w-40 border-2 border-dashed border-gray-300 rounded-lg hover:bg-gray-50 transition duration-150">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-12 h-12 text-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div>
                        </label>
                        <input id="carFormImageUpload" type="file" name="images[]" multiple class="hidden" />
                    </div>

                    {{-- Buttons --}}
                    <div class="flex justify-end gap-4 mt-8">
                        <button type="reset"
                            class="text-sm bg-gray-200 border border-gray-300 hover:bg-gray-400 rounded-sm py-2 px-6 transition duration-150">Reset</button>
                        <button type="submit"
                            class="text-sm text-white bg-orange-600 hover:bg-orange-500 rounded-sm py-2 px-6 transition duration-150">Submit</button>
                    </div>
                </form>
            </section>
        </section>
    </main>
</x-backend-layout>
