<x-guest-layout title="Login" PageName="Login Page">
    <form action="{{route('login')}}" method="POST">
        @csrf
        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
            <input type="text" id="email" name="email"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200 @error('email') ring-red-400 @enderror" value="{{old('email')}}">
            @error('email')
                <span class="text-xs text-red-400">{{$message}}</span>
            @enderror
        </div>
        <!-- Password -->
        <div class="mb-4 relative">
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" id="password" name="password"
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200 @error('password') ring-red-400 @enderror">
            <span id="togglePassword" class="absolute" style="right: 10px; top: 32px; cursor: pointer;">
                <i class="fas fa-eye" id="toggleIcon"></i>
            </span>
            @error('password')
                <span class="text-xs text-red-400">{{$message}}</span>
            @enderror
        </div>

        <div class="flex justify-between">
            <div>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember Me</label>
            </div>
            <div class="">
                <a class="text-orange-500 text-right" href="">Reset Password</a>
            </div>
        </div>
        @error('error')
            <span class="text-xs text-red-400">{{$message}}</span>
        @enderror
        <!-- Submit Button -->
        <button type="submit"
                class="w-full bg-orange-500 text-white font-semibold py-2 px-4 mt-3 rounded-md hover:bg-orange-600 transition duration-150">
            Login
        </button>

        <div class="flex items-center my-6">
            <hr class="flex-grow border-gray-300">
            <p class="text-sm text-center text-gray-500 mx-4 whitespace-nowrap">Social Signup</p>
            <hr class="flex-grow border-gray-300">
        </div>

        <div class="flex justify-center gap-4 mb-4">
            <x-google/>
            <x-facebook/>
        </div>
    </form>

    <x-slot:footerLink>
        <div class="mt-4 text-center text-sm text-gray-600">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-orange-600 hover:underline">Sign up here</a>
        </div>
    </x-slot:footerLink>


    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');

            // Toggle the type attribute
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the eye / eye slash icon
            toggleIcon.classList.toggle('fa-eye');
            toggleIcon.classList.toggle('fa-eye-slash');
        });
    </script>
</x-guest-layout>