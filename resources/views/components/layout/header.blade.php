<header class="py-4 mb-4 px-6 border-b-2 border-gray-200 shadow-sm">
    <nav class="container mx-auto relative">
        <div class="flex justify-between items-center">
            <!-- Logo and Nav Links -->
            <div class="flex items-center space-x-4 lg:space-x-12">
                <h2 class="text-2xl font-bold text-[#050B20]">Cars</h2>
                <!-- Desktop Navigation -->
                <x-nav-link href="{{route('dashboard')}}" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="{{route('listings')}}" :active="request()->is('listings')">Listings</x-nav-link>
                <x-nav-link href="{{route('brands')}}" :active="request()->is('brands')">Brands</x-nav-link>
                <x-nav-link href="{{route('blog')}}" :active="request()->is('blog')">Blog</x-nav-link>
            </div>

            <!-- Desktop Buttons -->
            <div class="hidden lg:flex items-center space-x-4">
                <button class="add-new-car">
                    <a href="{{route('car.create')}}"><i class="fa-solid fa-circle-plus"></i> Add New Car</a>
                </button>

                @auth
                <!-- Profile dropdown for desktop -->
                <div class="relative ml-3">
                    <button type="button" class="relative flex rounded-full bg-gray-400 text-sm focus:outline-none focus:ring-1 focus:ring-white focus:ring-offset-1 focus:ring-offset-gray-600 cursor-pointer" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="sr-only">Open user menu</span>
                        <span class="flex items-center justify-center h-8 w-8"><i class="fa-solid fa-user"></i></span>
                    </button>

                    <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 hidden" id="desktop-profile-menu" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <span class="block font-bold px-4 py-2 text-base border-b-2 border-b-gray-600 text-gray-700 hover:bg-gray-100">{{auth()->user()->name}}</span>
                        <a href="{{route('profile')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">My Profile</a>
                        <a href="{{route('car.index')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">My Cars</a>
                        <a href="{{route('car.watchlist')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">My Wishlist</a>
                        <a href="{{route('blogs.index')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">My Blog</a>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                        <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</button>
                        </form>
                    </div>
                </div>
                @endauth

                @guest
                <button class="signup"><a href="{{route('register')}}"><i class="fa-solid fa-user-plus mx-2"></i>Signup</a></button>
                <button class="login"><a href="{{route('login')}}"><i class="fa-solid fa-right-to-bracket mx-3"></i>Login</a></button>
                @endguest
            </div>

            <!-- Tablet Buttons -->
            <div class="hidden md:flex lg:hidden items-center space-x-4 relative">
                <button class="icon-btn add-icon" title="Add New Car">
                    <a href="{{route('car.create')}}"><i class="fa-solid fa-circle-plus text-xl"></i></a>
                </button>

                @guest
                <button class="icon-btn signup-icon" title="Signup">
                    <a href="{{route('register')}}"><i class="fa-solid fa-user-plus text-white text-xl"></i></a>
                </button>
                <button class="icon-btn login-icon" title="Login">
                    <a href="{{route('login')}}"><i class="fa-solid fa-right-to-bracket text-orange-500 text-xl"></i></a>
                </button>
                @endguest

                @auth
                <!-- Tablet Profile Dropdown -->
                <div class="relative">
                    <button id="tablet-profile-toggle" class="icon-btn profile-icon" aria-expanded="false" aria-haspopup="true">
                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="User Profile" />
                    </button>
                    <div id="tablet-profile-menu" class="hidden absolute right-0 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 z-50" role="menu" aria-orientation="vertical" aria-labelledby="tablet-profile-toggle" tabindex="-1">
                        <span class="block font-semibold px-4 py-2 text-sm border-b-2 border-b-gray-600 text-gray-700 hover:bg-gray-100">{{auth()->user()->name}}</span>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">My Profile</a>
                        <a href="{{route('car.index')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">My Cars</a>
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                        <button class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</button>
                        </form>
                    </div>
                </div>
                @endauth
            </div>

            <!-- Mobile Hamburger -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-600 hover:text-blue-600 focus:outline-none" aria-label="Toggle menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="hidden md:hidden fixed inset-0 bg-white z-50" id="mobile-menu">
            <div class="flex flex-col pt-16 px-6 h-full overflow-y-auto">
                <button id="close-menu" class="absolute top-3 right-6 text-gray-600 hover:text-blue-600 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <ul class="flex flex-col space-y-4 mt-4">
                    <li><a href="{{route('dashboard')}}" class="block text-[#050B20] font-medium py-2"><i class="fa-solid fa-house mr-2"></i>Home</a></li>
                    <li><a href="{{route('listings')}}" class="block text-[#050B20] font-medium py-2"><i class="fa-solid fa-list mr-2"></i>Listings</a></li>
                    <li><a href="{{route('brands')}}" class="block text-[#050B20] font-medium py-2"><i class="fa-solid fa-blog mr-2"></i>Blog</a></li>
                    <li><a href="{{route('blog')}}" class="block text-[#050B20] font-medium py-2"><i class="fa-solid fa-info-circle mr-2"></i>About</a></li>
                </ul>

                <div class="mt-8 flex flex-col space-y-3">
                    <button class="mobile-btn"><a href="{{route('car.create')}}"><i class="fa-solid fa-circle-plus mr-2"></i> Add New Car</a></button>

                    @auth
                    <button class="mobile-btn"><a href="#"><i class="fa-solid fa-user mr-2"></i>My Profile</a></button>
                    <button class="mobile-btn"><a href="{{route('car.index')}}"><i class="fa-solid fa-gear mr-2"></i>My Cars</a></button>
                    <button class="mobile-btn"><a href="#"><i class="fa-solid fa-sign-out-alt mr-2"></i>Sign out</a></button>
                    @endauth

                    @guest
                    <button class="mobile-btn"><a href="{{route('register')}}"><i class="fa-solid fa-user-plus mr-2"></i>Signup</a></button>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                    <button class="mobile-btn" role="menuitem">Sign out</button>
                    </form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
</header>