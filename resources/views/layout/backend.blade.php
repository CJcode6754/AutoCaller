<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>{{config('app.name', default: 'Laravel')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <header class="py-8 px-6">
        <nav class="container mx-auto">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4 lg:space-x-12">
                    <h2 class="text-2xl font-bold text-[#050B20]">Cars</h2>
                    <ul class="hidden lg:flex space-x-4 xl:space-x-8 pt-1">
                        <li><a href="#" class="nav-design">Home</a></li>
                        <li><a href="#" class="nav-design">Listings</a></li>
                        <li><a href="#" class="nav-design">Blog</a></li>
                        <li><a href="#" class="nav-design">About</a></li>
                        <li><a href="#" class="nav-design">Contact</a></li>
                    </ul>
                </div>
    
                <!-- Desktop Buttons (large screens only) -->
                <div class="hidden lg:flex items-center space-x-4">
                    <button class="add-new-car">
                        <i class="fa-solid fa-circle-plus group-hover:text-white"></i> Add New Car
                    </button>
                    <button class="signup"><i class="fa-solid fa-user-plus mx-2"></i>Signup</button>
                    <button class="login"><i class="fa-solid fa-right-to-bracket mx-3"></i>Login</button>
                </div>
        
                <!-- Mobile/Tablet Hamburger Button -->
                <div class="lg:hidden">
                    <button id="menu-toggle" class="text-gray-600 hover:text-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    </button>
                </div>
            </div>
    
            <!-- Mobile/Tablet Menu -->
            <div class="hidden mt-4 pb-4 lg:hidden" id="mobile-menu">
                <ul class="flex flex-col space-y-2">
                    <li><a href="#" class="block text-[#050B20] font-medium">Home</a></li>
                    <li><a href="#" class="block text-[#050B20] font-medium">Listings</a></li>
                    <li><a href="#" class="block text-[#050B20] font-medium">Blog</a></li>
                    <li><a href="#" class="block text-[#050B20] font-medium">About</a></li>
                    <li><a href="#" class="block text-[#050B20] font-medium">Contact</a></li>
                </ul>
    
                <div class="mt-4 flex flex-col space-y-2">
                    <button class="add-new-car">
                        <i class="fa-solid fa-circle-plus group-hover:text-white"></i> Add New Car
                    </button>
                    <button class="signup"><i class="fa-solid fa-user-plus mx-2"></i>Signup</button>
                    <button class="login"><i class="fa-solid fa-right-to-bracket mx-3"></i>Login</button>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <Footer>Footer</Footer>
</body>
</html>