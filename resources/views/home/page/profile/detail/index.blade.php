@extends('home.layouts.main')

@section('content')

{{-- @include('home.components.banner')
@include('home.page.pricing.components.priceList') --}}
<section class="pt-16 pb-4">
    <h1 class="mb-4 text-primary font-semibold text-2xl dark:text-slate-400">Detail Profil</h1>

    <div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="md:col-span-2 bg-gray-50 border-t-4 border-t-primary rounded-lg p-6 shadow-md">
        <figure class="md:flex items-center md:space-x-4 mb-8">
            <div class="mb-4 md:mb-0 mx-auto md:mx-0 w-20 h-20 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                <img src="/blank-profile.png" alt="user-profile">
            </div>
                <div class="text-center md:text-start">
                    <h2 class="text-2xl text-primary font-semibold mb-0 md:mb-1">User123</h2>
                    <p>Belum Berlangganan</p>
                </div>
        </figure>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="md:col-span-2 space-y-4">
                <div>
                    <label>Email</label>
                    <p class="font-medium">user123@gmail.com</p>
                </div>
                <div>
                    <label>Alamat</label>
                    <p class="font-medium text-gray-400">Belum Terisi</p>
                </div>
            </div>
            <div class="space-y-4 mb-8">
                <div>
                    <label>Nomor Telpon</label>
                    <p class="font-medium text-gray-400">Belum Terisi</p>
                </div>
                <div>
                    <label>Tanggal Lahir</label>
                    <p class="font-medium text-gray-400">Belum Terisi</p>
                </div>
            </div>
            <a href="/profile/edit" class="w-full bg-primary text-center text-gray-50 py-2 rounded-md mb-2 hover:bg-primary2 transition duration-200">Edit Profil</a>
        </div>
    </div>
    <div class="bg-gray-50 border-t-4 border-t-primary rounded-lg p-6 shadow-md">
        <h1 class="text-primary text-2xl font-semibold mb-4">Notofikasi</h1>
        <div class="bg-primary rounded-md p-4 text-white text-sm font-light">
            <p>Selamat datang di Epaper Radar bogor. Silakan Lengkapi Profilmu</p>
        </div>
    </div>
    </div>
    </div>
    
</div>
</section>

@endsection
