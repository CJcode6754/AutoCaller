@props(['PageName' => '', 'title' => ''])
<x-base-layout :$title :$PageName>
    <main>
        <div class="bg-gray-100 h-dvh flex items-center">
            <div class="max-w-7xl mx-auto px-4 md-px-8 flex flex-col lg:flex-row items-center gap-10">
                <!-- Left: Form -->
                <div class="w-full md:w-3/4 lg:w-2/5 bg-white px-8 py-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">{{$PageName}}</h2>

                    {{ $slot }}

                    <!-- Signup Link -->
                    {{ $footerLink ?? '' }}
                </div>
                <div class="w-full md:w-3/5 lg:flex hidden justify-end items-center">
                    <img src="{{ asset('assets/hero.png') }}" alt="Hero Image" class="w-full h-auto object-contain">
                </div>
            </div>
        </div>
    </main>
</x-base-layout>