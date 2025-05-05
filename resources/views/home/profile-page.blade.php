<x-backend-layout title="Profile">
    <section class="py-12 px-6 md:px-24">
        <div class="max-w-5xl mx-auto">
            <!-- Header -->
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Your Profile</h1>
                    <p class="text-sm text-gray-500 mt-1">Manage and view your account details</p>
                </div>
                <button class="mt-4 md:mt-0 inline-flex items-center gap-2 bg-orange-500 text-white px-5 py-2.5 rounded-xl hover:bg-orange-600 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Edit Profile
                </button>
            </div>

            <!-- Profile Card -->
            <div class="bg-white shadow-lg rounded-2xl p-8 border-t-4 border-orange-500">
                <div class="flex flex-col md:flex-row gap-6 items-center md:items-start">
                    <!-- Avatar -->
                    <div class="shrink-0">
                        <img src="" alt="User Avatar" class="w-32 h-32 rounded-full border-4 border-orange-400 shadow-md object-cover">
                    </div>

                    <!-- Details -->
                    <div class="flex-1 w-full">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <p class="text-sm text-gray-500">Full Name</p>
                                <h2 class="text-lg font-semibold text-gray-800">{{$userInfo->name}}</h2>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Email</p>
                                <h2 class="text-lg font-semibold text-gray-800">{{$userInfo->email}}</h2>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Phone</p>
                                <h2 class="text-lg font-semibold text-gray-800">{{$userInfo->phone}}</h2>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Number of Cars</p>
                                <h2 class="text-lg font-semibold text-gray-800">{{$userInfo->cars->count()}}</h2>
                            </div>
                            <div class="md:col-span-2">
                                <p class="text-sm text-gray-500">Bio</p>
                                <p class="text-gray-700 mt-1 leading-relaxed">
                                    Passionate full-stack developer with experience in Laravel, Tailwind, and React. Enjoys creating intuitive user experiences and sipping coffee while debugging.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-backend-layout>
