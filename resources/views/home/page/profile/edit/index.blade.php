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

            <img id="preview" src="#" alt="your image" class="hidden rounded-full w-20 h-20 object-contain">
            <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">
                Upload photo
            </label>
            <input type="file" id="selectImage" class="block w-full border rounded-md cursor-pointer text-xs mb-1" />
            <p class="text-xs text-gray-500 dark:text-gray-300" id="file_input_help">
                SVG, PNG, JPG (Upload foto dengan maximal size 2MB).
            </p>
        </div>
            
            {{-- <div class="preview-image w-20 h-20 bg-cover bg-center rounded-full border border-primary"></div>
            <div>
                <label 
                    for="file-input" 
                    class="block w-full h-full text-gray-500 p-4 text-sm cursor-pointer">
                    Upload poto rofil
                </label>
                <div class="preview-container">
                <span class="file-name text-sm font-medium"></span>
                <p class="close-button cursor-pointer transition-all mb-4 rounded-md px-3 py-1 border text-xs text-red-500 border-red-500 hover:bg-red-500 hover:text-white">Delete</p>
            </div>
                <input type="file" id="file-input" accept="image/*" class="hidden" />
            </div> --}}

            {{-- <div class="mb-4 flex items-center justify-center mx-auto md:mx-0 md:mb-0 w-20 h-20 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                <img src="/pejabat-ditjen.jpg" alt="user-profile" class="w-96">
            </div> --}}
            {{-- <div class="upload-container relative flex items-center justify-between w-full">
                <div class="drop-area w-full rounded-md border-2 border-dotted border-gray-200 transition-all hover:border-blue-600/30 text-center">
                    <label 
                        for="file-input" 
                        class="block w-full h-full text-gray-500 p-4 text-sm cursor-pointer">
                        Upload poto profile
                    </label>
                    <input 
                        name="file" 
                        type="file" 
                        id="file-input" 
                        accept="image/*" 
                        class="hidden" 
                    />
                    <!-- Image upload input -->
                    <div class="preview-container hidden items-center justify-center flex-col">
                        <div class="preview-image w-36 h-36 bg-cover bg-center rounded-md"></div>
                        <span class="file-name my-4 text-sm font-medium"></span>
                        <p class="close-button cursor-pointer transition-all mb-4 rounded-md px-3 py-1 border text-xs text-red-500 border-red-500 hover:bg-red-500 hover:text-white">Delete</p>
                    </div>
                </div>
            </div> --}}
                {{-- <form action="" class="text-center md:text-start">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">
                        Upload photo
                    </label>
                    <input class="block w-full mb-1 text-xs text-gray-900 border border-gray-300 rounded-md cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="small_size" type="file">
                    <p class="text-xs text-gray-500 dark:text-gray-300" id="file_input_help">
                        SVG, PNG, JPG (Upload foto dengan maximal size 2MB).
                    </p>
                </form> --}}
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

<script>
    selectImage.onchange = evt => {
        preview = document.getElementById('preview');
        preview.style.display = 'block';
        const [file] = selectImage.files
        if (file) {
            preview.src = URL.createObjectURL(file)
        }
    }
</script>

{{-- <script>
    const dropArea = document.querySelector('.drop-area');
    const fileInput = document.querySelector('#file-input');
    const previewContainer = document.querySelector('.preview-container');
    const previewImage = document.querySelector('.preview-image');
    const closeButton = document.querySelector('.close-button');
    const fileName = document.querySelector('.file-name');

    // Add event listener to the file input element to handle when a file is selected
    fileInput.addEventListener('change', () => {
        const file = fileInput.files[0]; // Get the file that was selected
        showPreview(file); // Show a preview of the file
        showFileName(file); // Show the name of the file
    });

    // Function to show a preview of the file
    function showPreview(file) {
        if (file.type.startsWith('image/')) { // Check if the file is an image
            const reader = new FileReader(); // Create a new FileReader object
            reader.readAsDataURL(file); // Read the file as a data URL
            reader.onload = () => { // When the file has been read
                previewImage.style.backgroundImage = `url(${reader.result})`; // Set the background image of the preview container to the data URL
                previewImage.classList.remove('hidden'); // Show the preview image
                dropArea.classList.remove('active'); // Remove "active" class from drop area
                previewContainer.classList.remove('hidden'); // Show the preview container
                previewContainer.classList.add('flex'); // Add "flex" class to preview container
            };
        }
    }

    // Function to show the name of the file
    function showFileName(file) {
        fileName.textContent = file.name; // Set the text content of the file name element to the name of the file
        fileName.style.display = 'block'; // Show the file name element
    }

    // Add event listener to the close button to handle when it is clicked
    closeButton.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent default behavior of button
        fileInput.value = ''; // Clear the file input value
        previewImage.style.backgroundImage = ''; // Clear the preview image
        fileName.textContent = ''; // Clear the file name
        previewImage.classList.add('hidden'); // Hide the preview image
        previewContainer.classList.add('hidden'); // Hide the preview container
        previewImage.classList.remove('flex'); // Remove "flex" class from preview image
    });
</script> --}}

@endsection
