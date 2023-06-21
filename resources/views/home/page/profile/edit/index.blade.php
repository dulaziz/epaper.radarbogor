@extends('home.layouts.main')

@section('content')

{{-- @include('home.components.banner')
@include('home.page.pricing.components.priceList') --}}
<section class="pt-16 pb-4">
    <h1 class="mb-4 text-primary font-semibold text-2xl dark:text-slate-400">Edit Profil</h1>

    <div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <div class="md:col-span-2 bg-gray-50 border-t-4 border-t-primary rounded-lg p-6 shadow-md">
        <figure class="md:flex items-center md:space-x-4 mb-8">
            <div class="mb-4 mx-auto md:mx-0 md:mb-0 w-20 h-20 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                <img src="/blank-profile.png" alt="user-profile">
            </div>
                <div>
                    <form action="" class="text-center md:text-start">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">
                            Upload photo
                        </label>
                        <input class="block w-full mb-1 text-xs text-gray-900 border border-gray-300 rounded-md cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file">
                        <p class="text-xs text-gray-500 dark:text-gray-300" id="file_input_help">
                            SVG, PNG, JPG (Upload foto dengan maximal size 2MB).
                        </p>
                    </form>
                    {{-- <h2 class="text-2xl text-primary font-semibold mb-1">User123</h2>
                    <p>Belum Berlangganan</p> --}}
                </div>
        </figure>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="md:col-span-2 space-y-4">
                <div>
                    <label class="block mb-1">Nama Lengkap</label>
                    <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md block w-full p-2" placeholder="Nama lengkap" required>
                </div>
                <div>
                    <label class="block mb-1">Alamat</label>
                    <textarea class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md block w-full p-2" placeholder="Alamat" required></textarea>
                </div>
            </div>
            <div class="space-y-4 mb-8">
                <div>
                    <label class="block mb-1">Nomor Telpon</label>
                    <input type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md block w-full p-2" placeholder="Nomor telpon" required>
                </div>
                <div>
                    <label class="block mb-1">Tanggal Lahir</label>
                    <input type="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md block w-full p-2" required>
                </div>
            </div>
            <button class="bg-primary text-gray-50 py-2 rounded-md mb-2 hover:bg-primary2 transition duration-200">Simpan</button>
            <a href="/profile/detail" class="bg-transparent border text-center border-primary text-primary py-2 rounded-md mb-2 hover:bg-primary hover:text-white transition duration-200">Batal</a>
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
