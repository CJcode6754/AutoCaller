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
        <nav class="container mx-auto relative">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4 lg:space-x-12">
                    <h2 class="text-2xl font-bold text-[#050B20]">Cars</h2>
                    <ul class="hidden md:flex space-x-4 xl:space-x-8 pt-1">
                        <li><a href="#" class="nav-design">Home</a></li>
                        <li><a href="#" class="nav-design">Listings</a></li>
                        <li><a href="#" class="nav-design">Blog</a></li>
                        <li><a href="#" class="nav-design">About</a></li>
                        <li><a href="#" class="nav-design">Contact</a></li>
                    </ul>
                </div>

                <!-- Desktop Buttons (visible on lg and above) -->
                <div class="hidden lg:flex items-center space-x-4">
                    <button class="add-new-car">
                        <i class="fa-solid fa-circle-plus"></i> Add New Car
                    </button>
                    <button class="signup"><i class="fa-solid fa-user-plus mx-2"></i>Signup</button>
                    <button class="login"><i class="fa-solid fa-right-to-bracket mx-3"></i>Login</button>
                </div>

                <!-- Tablet Buttons (visible only on md-lg screens) -->
                <div class="hidden md:flex lg:hidden items-center space-x-4">
                    <button class="icon-btn add-icon" title="Add New Car">
                        <i class="fa-solid fa-circle-plus text-xl"></i>
                    </button>
                    <button class="icon-btn signup-icon" title="Signup">
                        <i class="fa-solid fa-user-plus text-white text-xl"></i>
                    </button>
                    <button class="icon-btn login-icon" title="Login">
                        <i class="fa-solid fa-right-to-bracket text-orange-500 text-xl"></i>
                    </button>
                </div>
        
                <!-- Mobile Hamburger Button (Hidden on Tablets & Larger) -->
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-gray-600 hover:text-blue-600" aria-label="Toggle menu">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
    
            <!-- Mobile Menu (Visible Only on Mobile when toggled) -->
            <div class="hidden md:hidden" id="mobile-menu">
                <div class="fixed inset-0 bg-white z-50 flex flex-col pt-16 px-6">
                    <button id="close-menu" class="absolute mt-5 top-3 right-6 text-gray-600 hover:text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    
                    <ul class="flex flex-col space-y-4 mt-4">
                        <li><a href="#" class="block text-[#050B20] font-medium py-2"><i class="fa-solid fa-house mr-2"></i>Home</a></li>
                        <li><a href="#" class="block text-[#050B20] font-medium py-2"><i class="fa-solid fa-list mr-2"></i>Listings</a></li>
                        <li><a href="#" class="block text-[#050B20] font-medium py-2"><i class="fa-solid fa-blog mr-2"></i>Blog</a></li>
                        <li><a href="#" class="block text-[#050B20] font-medium py-2"><i class="fa-solid fa-info-circle mr-2"></i>About</a></li>
                        <li><a href="#" class="block text-[#050B20] font-medium py-2"><i class="fa-solid fa-envelope mr-2"></i>Contact</a></li>
                    </ul>
    
                    <div class="mt-8 flex flex-col space-y-3">
                        <button class="mobile-btn">
                            <i class="fa-solid fa-circle-plus mr-2"></i> Add New Car
                        </button>
                        <button class="mobile-btn">
                            <i class="fa-solid fa-user-plus mr-2"></i>Signup
                        </button>
                        <button class="mobile-btn">
                            <i class="fa-solid fa-right-to-bracket mr-2"></i>Login
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <Footer>Footer</Footer>
</body>
</html>