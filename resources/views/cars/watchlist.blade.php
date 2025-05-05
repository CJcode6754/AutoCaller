<x-backend-layout title="Favorite Cars">
    <section class="py-12 px-12 md:px-24 md:py-8">
        <div>
            <div class="max-w-7xl mx-auto flex flex-row items-center justify-between">
                <h1 class="text-sm lg:text-4xl font-semibold">My Favorite Cars</h1>
                <p class="flex justify-center items-center font-light gap-2">
                    @if ($cars->total() > 0)
                        <span class="font-light md:font-medium text-sm">Showing {{$cars->firstItem()}} to {{$cars->lastItem()}} of {{$cars->total()}} cars.</span>
                    @endif
                </p>
            </div>
            <hr class="w-full mt-2 border border-gray-300 lg:ml-3">

            <section class="mt-8">
                <div class="overflow-x-auto pb-4 md:hidden">
                    <div class="flex gap-4 min-w-max">
                        @foreach ($cars as $car)
                        <x-mobile-featured-cars-card :$car/>
                        @endforeach
                    </div>
                </div>

                <div class="hidden md:grid md:grid-cols-2 lg:grid-cols-4 gap-4">
                    @foreach ($cars as $car)
                        <x-featured-cars-card :$car :isfavorite="true"/>
                    @endforeach
                </div>
                {{$cars->onEachSide(1)->links()}}
            </section>
        </div>
    </section>
</x-backend-layout>