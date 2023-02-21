<nav class="absolute top-0 left-0 w-full bg-slate-100 dark:bg-slate-900 transition-shadow duration-300" id="navbar">
    <div class="max-w-screen-lg mx-auto flex flex-wrap items-center justify-between px-4 py-2">
      <a href="/" class="flex items-center">
          <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-9" alt="Flowbite Logo" />
          <span class="self-center text-xl font-bold uppercase whitespace-nowrap text-slate-800 dark:text-gray-400">Radar Bogor</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <span data-feather="menu"></span>
      </button>
      <div class="hidden w-full md:flex md:items-center md:w-auto" id="navbar-default">
        <ul class="flex flex-col p-4 mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
          <li>
            <a href="/" class="block py-2 pl-3 pr-4 md:p-0 text-center text-slate-900 dark:text-slate-400 md:hover:text-emerald-500 hover:bg-gray-100 md:hover:bg-transparent rounded" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 md:p-0 text-center text-slate-900 dark:text-slate-400 md:hover:text-emerald-500 hover:bg-gray-100 md:hover:bg-transparent rounded">About</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 md:p-0 text-center text-slate-900 dark:text-slate-400 md:hover:text-emerald-500 hover:bg-gray-100 md:hover:bg-transparent rounded">Services</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 md:p-0 text-center text-slate-900 dark:text-slate-400 md:hover:text-emerald-500 hover:bg-gray-100 md:hover:bg-transparent rounded">Pricing</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 md:p-0 text-center text-slate-900 dark:text-slate-400 md:hover:text-emerald-500 hover:bg-gray-100 md:hover:bg-transparent rounded">Contact</a>
          </li>
        </ul>
        
          <div class="flex justify-center">
            {{-- <span class="text-sm text-slate-500 mr-2">Light</span> --}}
            <input type="checkbox" id="toggle" class="hidden"/>
            <label for="toggle">
              <div class="w-9 h-5 bg-slate-500 rounded-full flex items-center p-1 cursor-pointer">
                <div class="w-4 h-4 bg-white rounded-full toggle-circle transition duration-300 ease-in-out"></div>
              </div>
            </label>
            {{-- <span class="text-sm text-slate-500 ml-2">Dark</span> --}}
          </div>
        </div>

    </div>
  </nav>
  