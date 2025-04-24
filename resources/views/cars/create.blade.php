<x-backend-layout title="Add New Car">
    <main>
        <section class="relative bg-white shadow-lg rounded-b-lg mx-4 md:mx-16 lg:mx-60 px-4 md:px-6 py-6">
            <h1 class="text-2xl font-medium text-gray-500 mb-4">Add new Car</h1>
            <form action="{{route('car.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- Dropdown Section --}}
                <section class="mb-6 grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-8">
                    {{-- Maker --}}
                    <div class="w-full max-w-sm">
                        <label for="makerDropdown" class="dropdown-label">Maker</label>
                        <select id="makerDropdown" name="maker_id"
                            class="dropdown-select">
                            <option value="">Select Maker</option>
                            @foreach ($makers as $maker)
                                <option value="{{ $maker->id }}">{{ $maker->name }}</option>
                            @endforeach
                        </select>
                    </div>                   

                    {{-- Model --}}
                    <div class="w-full max-w-sm">
                        <label for="modelDropdown" class="dropdown-label">Model</label>
                        <select id="modelDropdown" name="model_id" class="dropdown-select">
                            <option value="">Select Model</option>
                        </select>
                    </div>

                    @php
                        $current_year = now()->year;
                        $past_year = $current_year - 20;
                    @endphp
                    {{-- Year --}}
                    <div class="w-full max-w-sm">
                        <label for="yearDropdown" class="dropdown-label">Year</label>
                        <select id="yearDropdown" name="year" class="dropdown-select">
                              @for ($year = $current_year; $year >= $past_year; $year--)
                                <option class="max-h-10" value="{{$year}}">{{$year}}</option>
                              @endfor  
                        </select>
                    </div>
                </section>


                <section class="mb-6 grid grid-cols-1 md:grid-cols-4 gap-6">
                    <div class="w-full max-w-sm">
                        <label for="car_type" class="dropdown-label">Car Type</label>
                        <select name="car_type" id="car_type" class="dropdown-select">
                            <option value="">Select Car Type</option>
                            @foreach ($car_types as $car_type)
                                <option value="{{$car_type->id}}">{{$car_type->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full max-w-sm">
                        <label for="fuel_type" class="dropdown-label">Fuel Type</label>
                        <select name="fuel_type" id="fuel_type" class="dropdown-select">
                            <option value="">Select Fuel Type</option>
                            @foreach ($fuel_types as $fuel_type)
                                <option value="{{$fuel_type->id}}">{{$fuel_type->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-full max-w-sm">
                        <label for="regionDropdown" class="dropdown-label">State/Region</label>
                        <select name="region_id" id="regionDropdown" class="dropdown-select">
                            <option value="">Select Region</option>
                            @foreach ($regions as $region)
                                <option value="{{$region->id}}">{{$region->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-full max-w-sm">
                        <label for="cityDropdown" class="dropdown-label">Cities</label>
                        <select name="city_id" id="cityDropdown" class="dropdown-select">
                            <option value="">Select City</option>
                        </select>
                    </div>
                </section>

                <section class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <h2 class="label">Car Price</h2>
                        <input type="text" name="price" placeholder="Price"
                            class="w-full border border-gray-300 rounded px-4 py-2">
                    </div>
                    <div>
                        <h2 class="label">Vin</h2>
                        <input type="text" name="vin" placeholder="Vin Number"
                            class="w-full border border-gray-300 rounded px-4 py-2">
                    </div>
                    <div>
                        <h2 class="label">Mileage</h2>
                        <input type="text" name="mileage" placeholder="Mileage"
                            class="w-full border border-gray-300 rounded px-4 py-2">
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
                        <label><input type="checkbox" name="car_accesories[]" value="Air Conditioning"> Air
                            Conditioning</label>
                        <label><input type="checkbox" name="car_accesories[]" value="Power Windows"> Power Windows</label>
                        <label><input type="checkbox" name="car_accesories[]" value="GPS"> GPS Navigation</label>
                        <label><input type="checkbox" name="car_accesories[]" value="Power Door Locks"> Power Door
                            Locks</label>
                        <label><input type="checkbox" name="car_accesories[]" value="Heated Seats"> Heated
                            Seats</label>
                        <label><input type="checkbox" name="car_accesories[]" value="ABS"> ABS</label>
                        <label><input type="checkbox" name="car_accesories[]" value="Climate Control"> Climate
                            Control</label>
                        <label><input type="checkbox" name="car_accesories[]" value="Cruise Control"> Cruise
                            Control</label>
                        <label><input type="checkbox" name="car_accesories[]" value="Bluetooth"> Bluetooth</label>
                        <label><input type="checkbox" name="car_accesories[]" value="Leather Seats"> Leather
                            Seats</label>
                    </div>
                </section>

                {{-- Description --}}
                <div class="mt-6">
                    <h2 class="label">Detailed Description</h2>
                    <textarea name="description" rows="6" class="w-full border border-gray-300 rounded px-4 py-2 resize-none"></textarea>
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
                        <div
                            class="mt-2 flex justify-center items-center h-40 w-40 border-2 border-dashed border-gray-300 rounded-lg hover:bg-gray-50 transition duration-150">
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
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const makerDropdown = document.getElementById('makerDropdown');
            const modelDropdown = document.getElementById('modelDropdown');

            makerDropdown.addEventListener('change', function () {
                const makerId = this.value;
                modelDropdown.innerHTML = '<option value="">Loading...</option>';

                fetch(`/get-models/${makerId}`)
                    .then(res => res.json())
                    .then(models => {
                        modelDropdown.innerHTML = '<option value="">Select Model</option>';
                        models.forEach(model => {
                            modelDropdown.innerHTML += `<option value="${model.id}">${model.name}</option>`;
                        });
                    });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const regionDropdown = document.getElementById('regionDropdown');
            const cityDropdown = document.getElementById('cityDropdown');

            regionDropdown.addEventListener('change', function(){
                const regionID = this.value;            
                cityDropdown.innerHTML = '<option value="">Loading...</option>';

                fetch(`/get-cities/${regionID}`)
                    .then(res => res.json())
                    .then(cities => {
                        cityDropdown.innerHTML = '<option value="">Select Model</option>';
                        cities.forEach(city => {
                            cityDropdown.innerHTML += `<option value="${city.id}">${city.name}</option>`;
                        })
                    })
            })
        })
    </script>
</x-backend-layout>
