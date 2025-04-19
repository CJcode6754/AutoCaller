<header class="py-4 mb-4 px-6 border-b-2 border-gray-200 shadow-sm">
    <nav class="container mx-auto relative">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-4 lg:space-x-12">
                <h2 class="text-2xl font-bold text-[#050B20]">Cars</h2>
                <ul class="hidden md:flex space-x-4 xl:space-x-8 pt-1">
                    <li><a href="{{route('dashboard')}}" class="nav-design">Home</a></li>
                    <li><a href="#" class="nav-design">Listings</a></li>
                    <li><a href="#" class="nav-design">Blog</a></li>
                    <li><a href="#" class="nav-design">About</a></li>
                    <li><a href="#" class="nav-design">Contact</a></li>
                </ul>
            </div>

            <!-- Desktop Buttons (visible on lg and above) -->
            <div class="hidden lg:flex items-center space-x-4">
                <button class="add-new-car">
                    <a href="{{route('car.create')}}"><i class="fa-solid fa-circle-plus"></i> Add New Car</a>
                </button>
                <button class="signup"><a href="{{route('signup')}}"><i class="fa-solid fa-user-plus mx-2"></i>Signup</a></button>
                <button class="login"><a href="{{route('login')}}"><i class="fa-solid fa-right-to-bracket mx-3"></i>Login</a></button>
            </div>

            <!-- Tablet Buttons (visible only on md-lg screens) -->
            <div class="hidden md:flex lg:hidden items-center space-x-4">
                <button class="icon-btn add-icon" title="Add New Car">
                    <a href="{{route('car.create')}}"><i class="fa-solid fa-circle-plus text-xl"></i></a>
                </button>
                <button class="icon-btn signup-icon" title="Signup">
                    <a href="{{route('signup')}}"><i class="fa-solid fa-user-plus text-white text-xl"></i></a>
                </button>
                <button class="icon-btn login-icon" title="Login">
                    <a href="{{route('login')}}"><i class="fa-solid fa-right-to-bracket text-orange-500 text-xl"></i></a>
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
                    <li><a href="{{route('dashboard')}}" class="block text-[#050B20] font-medium py-2"><i class="fa-solid fa-house mr-2"></i>Home</a></li>
                    <li><a href="#" class="block text-[#050B20] font-medium py-2"><i class="fa-solid fa-list mr-2"></i>Listings</a></li>
                    <li><a href="#" class="block text-[#050B20] font-medium py-2"><i class="fa-solid fa-blog mr-2"></i>Blog</a></li>
                    <li><a href="#" class="block text-[#050B20] font-medium py-2"><i class="fa-solid fa-info-circle mr-2"></i>About</a></li>
                    <li><a href="#" class="block text-[#050B20] font-medium py-2"><i class="fa-solid fa-envelope mr-2"></i>Contact</a></li>
                </ul>

                <div class="mt-8 flex flex-col space-y-3">
                    <button class="mobile-btn">
                        <a href="{{route('car.create')}}"><i class="fa-solid fa-circle-plus mr-2"></i> Add New Car</a>
                    </button>
                    <button class="mobile-btn">
                        <a href="{{route('signup')}}"><i class="fa-solid fa-user-plus mr-2"></i>Signup</a>
                    </button>
                    <button class="mobile-btn">
                        <a href="{{route('login')}}"><i class="fa-solid fa-right-to-bracket mr-2"></i>Login</a>
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>
