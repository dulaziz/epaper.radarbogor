@extends('dashboard.layouts.main')

@section('content')

{{-- <div class="border-b border-gray-800 mb-6 pb-2">
    <h1 class="text-xl">Dashboard</h1>
</div> --}}

<div class="py-4">
    
    <img src="/device.png" class="md:max-w-md mx-auto mb-3" alt="">
    
    <h1 class="text-center mb-6">Welcome back: <span class="font-semibold">John Doe</span></h1>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-3">
        <a href="" class="p-4 flex justify-between bg-white border border-gray-200 rounded-lg hover:shadow-md">
            <i data-feather="check-circle" class="size-48 f-gray-400"></i>
            <div class="mt-4">
                <h1>Active</h1>
                <h2 class="text-5xl font-extrabold text-emerald-500 justify-self-end">1240</h2>
            </div>
        </a>
        <a href="" class="p-4 flex justify-between bg-white border border-gray-200 rounded-lg hover:shadow-md">
            <i data-feather="alert-circle" class="size-48 f-gray-400"></i>
            <div class="mt-4">
                <h1>Expired</h1>
                <h2 class="text-5xl font-extrabold text-red-500 justify-self-end">40</h2>
            </div>
        </a>
        <a href="" class="p-4 flex justify-between bg-white border border-gray-200 rounded-lg hover:shadow-md">
            <i data-feather="clock" class="size-48 f-gray-400"></i>
            <div class="mt-4">
                <h1>Expired</h1>
                <h2 class="text-5xl font-extrabold text-yellow-400 justify-self-end">15</h2>
            </div>
        </a>
        <a href="" class="p-4 flex justify-between bg-white border border-gray-200 rounded-lg hover:shadow-md">
            <i data-feather="x-circle" class="size-48 f-gray-400"></i>
            <div class="mt-4">
                <h1>Expired</h1>
                <h2 class="text-5xl font-extrabold text-gray-500 justify-self-end">20</h2>
            </div>
        </a>
    </div>
</div>


@endsection
