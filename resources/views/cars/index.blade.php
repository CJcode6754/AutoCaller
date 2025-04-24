<x-backend-layout title="My Cars">
    <main>
        @if ($message = Session::get('success') ?? Session::get('error'))
            <div 
                x-data="{ show: true }" 
                x-init="setTimeout(() => show = false, 5000)" 
                x-show="show"
                class="fixed top-4 right-4 z-50"
            >
                <div class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="p-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg 
                                    class="h-6 w-6 {{ Session::get('success') ? 'text-green-500' : 'text-red-500' }}" 
                                    fill="none" 
                                    viewBox="0 0 24 24" 
                                    stroke="currentColor">
                                    @if(Session::get('success'))
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    @else
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    @endif
                                </svg>
                            </div>
                            <div class="ml-3 w-0 flex-1 pt-0.5">
                                <p class="text-sm font-medium text-gray-900">
                                    {{ Session::get('success') ? 'Success' : 'Error' }}
                                </p>
                                <p class="mt-1 text-sm text-gray-500">
                                    {{ $message }}
                                </p>
                            </div>
                            <div class="ml-4 flex-shrink-0 flex">
                                <button @click="show = false" class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none">
                                    <span class="sr-only">Close</span>
                                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 8.586L4.707 3.293A1 1 0 103.293 4.707L8.586 10l-5.293 5.293a1 1 0 101.414 1.414L10 11.414l5.293 5.293a1 1 0 001.414-1.414L11.414 10l5.293-5.293a1 1 0 00-1.414-1.414L10 8.586z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <section class="bg-white shadow-lg rounded-b-lg mx-4 md:mx-16 lg:mx-60 px-4 md:px-6 py-6">
            <h1 class="text-2xl font-medium text-gray-500 mb-4">My Cars</h1>

            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Published</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($cars->isEmpty())
                        <tr>
                            <td colspan="5" class="py-4">
                                You don't have any cars yet. <a class="text-orange-400 ms-2" href="{{route('car.create')}}">Add new Car</a>
                            </td>
                        </tr>
                    @else
                        @foreach ($cars as $car)
                            <tr>
                                <td class="text-center">
                                    @if($car->primaryImage)
                                        <img class="w-25 rounded inline-block" src="{{ asset('storage/car_images/' . $car->primaryImage->image_path) }}" alt="Car Image">
                                    @else
                                        Null
                                    @endif
                                </td>                                
                                <td>{{$car->year}} - {{$car->makers->name}} - {{$car->models->name}}</td>
                                <td>{{$car->created_at->format('m-d-Y')}}</td>
                                <td>{{$car->published_at ? 'Yes' : 'No'}}</td>
                                <td>
                                    <div class="flex gap-4 justify-center">
                                        <a class="text-blue-400 ms-2 text-sm font-medium" href="{{route('car.edit', $car->id)}}"><i class="fa-solid fa-pen-nib"></i> Edit</a>

                                        {{-- <a class="text-orange-400 ms-2 text-base font-medium" href="{{route('car.edit', $carID)}}"><i class="fa-solid fa-pen-nib"></i> Images</a> --}}

                                        <a class="text-red-400 ms-2 text-sm font-medium" href="{{route('car.destroy', $car->id)}}"><i class="fa-solid fa-pen-nib"></i> Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="5">
                                {{$cars->onEachSide(1)->links()}}
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
        </section>
    </main>
</x-backend-layout>
