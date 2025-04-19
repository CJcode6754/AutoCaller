<x-guest-layout title="Login" PageName="Login Page">
    <form action="" method="POST">
        @csrf
        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
            <input type="email" id="email" name="email" required
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
        </div>
        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" id="password" name="password" required
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-200">
        </div>
        
        <div class="flex justify-end">
            <a class="text-orange-500 text-right" href="">Reset Password</a>
        </div>

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
    </form>

    <x-slot:footerLink>
        <div class="mt-4 text-center text-sm text-gray-600">
            Don't have an account?
            <a href="{{ route('signup') }}" class="text-orange-600 hover:underline">Sign up here</a>
        </div>
    </x-slot:footerLink>
</x-guest-layout>