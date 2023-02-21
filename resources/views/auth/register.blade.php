@extends('auth.components.main')

@section('content')

<section class="h-screen bg-gray-100 flex items-center justify-center">
    <div class="w-96 bg-gray-50 border-t-4 border-t-emerald-500 rounded-lg p-6 shadow-md">
        <h1 class="mb-8 text-2xl font-semibold text-gray-700">Register Form</h1>
    <form>
        <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Your email</label>
        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
        </div>
        <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-500 dark:text-white">Your password</label>
        <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <button class="w-full bg-emerald-500 text-gray-50 py-2 rounded-lg mb-4 hover:bg-emerald-400 transition duration-200">Login</button>
        <p class="text-sm text-center">Have a member? <a href="" class="text-blue-500 hover:underline">Login here</a></p>
        
    </form>
  
    </div>
</section>

@endsection
