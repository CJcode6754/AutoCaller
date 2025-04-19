<x-backend-layout title="My Cars">
    <main>
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
                                <td class="text-center"><img class="w-25 rounded inline-block" src="{{$car->primaryImage->image_path}}" alt="Car Image"></td>
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
