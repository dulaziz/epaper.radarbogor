@extends('home.layouts.blank')

@section('content')

<section class="h-screen bg-gray-100 flex items-center justify-center">
    <div class="w-96 bg-gray-50 border-t-4 border-t-primary rounded-lg p-6 shadow-md">
        <div class="flex justify-end">
            <a href="/" class="flex items-center text-xl hover:text-primary"><ion-icon name="arrow-undo-outline"></ion-icon></a>
        </div>
        <div class="mb-8 text-center">
            <h1 class="text-2xl font-semibold text-primary mb-1">Selamat Datang</h1>
            <p class="text-sm">Silahkan isi form berikut</p>
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
        <button class="w-full bg-primary text-gray-50 font-medium py-2 rounded-lg mb-2 hover:bg-primary2 transition duration-200">Masuk</button>
        <p class="text-xs mb-2 text-center text-gray-500">Atau</p>
        <button class="w-full flex items-center justify-center space-x-2 bg-transparent border border-primary text-primary font-medium py-2 rounded-lg mb-4 hover:bg-primary hover:text-white transition duration-200"><img class="w-4" src="/_Google.svg" alt="Google Icon"><span>Masuk Dengan Google</span></button>
        <p class="text-sm text-center">Belum memiliki akun? <a href="/register" class="text-primary hover:underline">Mendaftar here</a></p>
    </form>
  
    </div>
</section>

@endsection
