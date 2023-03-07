@extends('home.layouts.blank')

@section('content')

<section class="h-screen bg-gray-100 flex items-center justify-center">
    <div class="w-96 bg-gray-50 border-t-4 border-t-emerald-500 rounded-lg p-6 shadow-md">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-2xl font-semibold text-gray-700">Login Form</h1>
            <a href="/" class="flex items-center text-xl"><ion-icon name="arrow-undo-outline"></ion-icon></a>
        </div>
    <form>
        <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Email</label>
        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="name@example.com" required>
        </div>
        <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Password</label>
        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
        </div>
        <button class="w-full bg-emerald-500 text-gray-50 py-2 rounded-lg mb-4 hover:bg-emerald-400 transition duration-200">Login</button>
        <p class="text-sm text-center">Not a member? <a href="/register" class="text-blue-500 hover:underline">Register here</a></p>
        
    </form>
  
    </div>
</section>

@endsection
