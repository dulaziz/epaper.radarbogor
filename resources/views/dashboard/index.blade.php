@extends('dashboard.layouts.main')

@section('content')

{{-- <div class="border-b border-gray-800 mb-6 pb-2">
    <h1 class="text-xl">Dashboard</h1>
</div> --}}

<div class="py-4">
    
    <img src="/device.png" class="md:max-w-md mx-auto mb-3" alt="">
    
    <h1 class="text-center mb-6">Welcome back: <span class="font-semibold">John Doe</span></h1>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-3">
        <a href="" class="relative overflow-hidden p-4 flex items-center bg-white border border-gray-200 rounded-lg duration-100 hover:shadow-md">   
            <div class="z-10">
                <h1>Active</h1>
                <h2 class="text-5xl font-extrabold text-emerald-500 justify-self-end">1240</h2>
            </div>
            <svg class="z-0 absolute translate-x-16" width="200px" height="200px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="24" height="24" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM15.7071 9.29289C16.0976 9.68342 16.0976 10.3166 15.7071 10.7071L12.0243 14.3899C11.4586 14.9556 10.5414 14.9556 9.97568 14.3899L8.29289 12.7071C7.90237 12.3166 7.90237 11.6834 8.29289 11.2929C8.68342 10.9024 9.31658 10.9024 9.70711 11.2929L11 12.5858L14.2929 9.29289C14.6834 8.90237 15.3166 8.90237 15.7071 9.29289Z" fill="#e5e7eb"/>
            </svg>
        </a>
        <a href="" class="relative overflow-hidden p-4 flex items-center bg-white border border-gray-200 rounded-lg duration-100 hover:shadow-md">   
            <div class="z-10">
                <h1>Expired</h1>
                <h2 class="text-5xl font-extrabold text-red-500 justify-self-end">40</h2>
            </div>

            <svg class="z-0 absolute translate-x-16" width="200px" height="200px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12ZM10.0586 6.05547C10.0268 5.48227 10.483 5 11.0571 5H12.9429C13.517 5 13.9732 5.48227 13.9414 6.05547L13.5525 13.0555C13.523 13.5854 13.0847 14 12.554 14H11.446C10.9153 14 10.477 13.5854 10.4475 13.0555L10.0586 6.05547ZM14 17C14 18.1046 13.1046 19 12 19C10.8954 19 10 18.1046 10 17C10 15.8954 10.8954 15 12 15C13.1046 15 14 15.8954 14 17Z" fill="#e5e7eb"/>
            </svg>
        </a>
        <a href="" class="relative overflow-hidden p-4 flex items-center bg-white border border-gray-200 rounded-lg duration-100 hover:shadow-md">
            <div class="z-10">
                <h1>Waiting</h1>
                <h2 class="text-5xl font-extrabold text-yellow-400 justify-self-end">15</h2>
            </div>

            <svg class="z-0 absolute translate-x-14" width="230px" height="230px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21ZM13 6.5C13 5.94772 12.5523 5.5 12 5.5C11.4477 5.5 11 5.94772 11 6.5V11.75C11 12.4404 11.5596 13 12.25 13H15.5C16.0523 13 16.5 12.5523 16.5 12C16.5 11.4477 16.0523 11 15.5 11H13V6.5Z" fill="#e5e7eb"/>
            </svg>
        </a>
        <a href="" class="relative overflow-hidden p-4 flex items-center bg-white border border-gray-200 rounded-lg duration-100 hover:shadow-md">
            <div class="z-10">
                <h1>Cenceled</h1>
                <h2 class="text-5xl font-extrabold text-gray-500 justify-self-end">20</h2>
            </div>

            <svg fill="#e5e7eb" class="z-0 absolute translate-x-16" width="200px" height="200px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm3.707,12.293a1,1,0,1,1-1.414,1.414L12,13.414,9.707,15.707a1,1,0,0,1-1.414-1.414L10.586,12,8.293,9.707A1,1,0,0,1,9.707,8.293L12,10.586l2.293-2.293a1,1,0,0,1,1.414,1.414L13.414,12Z"/></svg>
        </a>
    </div>
</div>


@endsection
