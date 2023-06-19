@extends('home.layouts.blank')

@section('content')

<section class="h-screen bg-gray-100 flex items-center justify-center">
    <div class="w-96 bg-gray-50 border-t-4 border-t-primary rounded-lg p-6 shadow-md">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-2xl font-semibold text-gray-700">Register Form</h1>
            <a href="/login" class="flex items-center text-xl hover:text-primary"><ion-icon name="arrow-undo-outline"></ion-icon></a>
        </div>
    <form>
        <div class="mb-6">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Name</label>
        <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Your Name" required>
        </div>
        <div class="mb-6">
        <label for="username" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">User Name</label>
        <input type="text" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="User Name" required>
        </div>
        <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Email</label>
        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="name@example.com" required>
        </div>
        <div class="mb-6">
        <label for="phone" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Phone</label>
        <input type="text" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="+62000000000" required>
        </div>
        <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Password</label>
        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
        </div>
        <button class="w-full bg-primary text-gray-50 py-2 rounded-lg mb-4 hover:bg-emerald-400 transition duration-200">Register</button>
        <p class="text-sm text-center">Have a member? <a href="/login" class="text-primary hover:underline">Login here</a></p>
        
    </form>
  
    </div>
</section>

@endsection
