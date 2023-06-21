<nav class="absolute top-0 left-0 w-full bg-slate-100 dark:bg-slate-900 transition-shadow duration-300 z-20" id="navbar">
  <div class="flex justify-between items-center max-w-screen-lg mx-auto px-4 py-2">
    <div>
      <a href="/">
        <h1 class="uppercase font-semibold text-xl text-slate-900 dark:text-slate-100 md:hover:text-primary">Radar Bogor</h1>
      </a>
    </div>

    <div class="nav-links duration-300 md:static absolute bg-slate-100 dark:bg-slate-900 md:min-h-fit left-0 top-[-400px] md:w-auto w-full flex items-center px-4 py-8 md:py-0">
        <ul class="flex flex-col md:flex-row md:items-center gap-4">
            <li>
              <a href="/" class="{{ Request::is('/') ? 'text-primary font-semibold' : 'text-slate-900 dark:text-slate-400' }} md:hover:text-primary">Beranda</a>
            </li>
            <li>
              <a href="/pricing" class="{{ Request::is('pricing') ? 'text-primary font-semibold' : 'text-slate-900 dark:text-slate-400' }} md:hover:text-primary">Berlangganan</a>
            </li>
            <li>
              <a href="#" class="text-slate-900 dark:text-slate-400 md:hover:text-primary">Contact</a>
            </li>
          </ul>
    </div>

    <div class="flex items-center gap-1 md:gap-3">
        <a href="/login" class="flex items-center"><ion-icon name="log-in-outline" class="text-2xl cursor-pointer text-slate-900 dark:text-slate-400 md:hover:text-primary"></ion-icon></a>
        <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown1" class="flex items-center cursor-pointer text-2xl text-slate-900 dark:text-slate-400 md:hover:text-primary"><ion-icon name="person-circle-outline"></ion-icon>
        </a>

        {{-- Dark Toggle --}}
      {{-- <input type="checkbox" id="toggle" class="hidden"/>
      <label for="toggle">
        <div class="w-10 h-5 bg-slate-900 dark:bg-slate-400 rounded-full flex gap-2 items-center p-1 cursor-pointer relative">
          <ion-icon name="moon-outline" class="text-white text-xl"></ion-icon>
          <ion-icon name="sunny-outline" class="text-yellow-400 text-2xl"></ion-icon>
          <div class="w-4 h-4 bg-white rounded-full toggle-circle transition duration-300 ease-in-out absolute"></div>
        </div>
      </label> --}}
      
      <ion-icon name="menu-outline" onclick="onToggleMenu(this)" class="cursor-pointer md:hidden text-3xl text-slate-900 dark:text-slate-400 md:hover:text-primary"></ion-icon>
    </div>
  </div>
  <div id="dropdown1" class="z-10 w-64 hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
    <div class="p-3 text-center text-sm">
      
      <div class="w-full pb-2 border-b">
        <div class="mx-auto mb-1 w-20 h-20 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
          <img src="/blank-profile.png" alt="user-profile">
        </div>
        <h1 class="font-semibold uppercase text-gray-800 dark:text-gray-200">User Name</h1>
      </div>
  
      <div class="py-2 border-b">
        <h1 class="font-semibold text-gray-800 dark:text-gray-200">Date since</h1>
        <p class="text-gray-500 dark:text-gray-300">01/01/2023 - 01/04/2023</p>
      </div>
  
      <div class="py-2 border-b">
        <h1 class="font-semibold text-gray-800 dark:text-gray-200">Member Status</h1>
        <span class="font-medium inline-flex items-center text-green-500">
          <ion-icon name="checkmark-done-outline" class="text-xl mr-1"></ion-icon>Active
        </span>
      </div>
  
      <div class="pt-2 flex justify-between">
        <a href="/profile/detail" class="text-blue-500 hover:underline inline-flex items-center"><ion-icon name="settings-outline" class="text-xl mr-1"></ion-icon>Profile</a>
        <a href="" class="text-red-500 hover:underline inline-flex items-center"><ion-icon name="power-outline" class="text-xl mr-1"></ion-icon>Logout</a>
      </div>
    </div>
</nav>


<script>
  window.onscroll = function () {
      const navbar = document.querySelector("#navbar");
      const fixedNav = navbar.offsetTop;

      if (window.pageYOffset > fixedNav) {
          navbar.classList.add("navbar-fixed");
      } else navbar.classList.remove("navbar-fixed");
  };
  //Nav Menu Mobile
  const navLinks = document.querySelector('.nav-links')
    function onToggleMenu(e){
        e.name = e.name === 'menu-outline' ? 'close-outline' : 'menu-outline'
       navLinks.classList.toggle('top-[45px]')
    }
</script>

{{-- <nav class="absolute top-0 left-0 w-full bg-slate-100 dark:bg-slate-900 transition-shadow duration-300" id="navbar">
    <div class="max-w-screen-lg mx-auto flex flex-wrap items-center justify-between px-4 py-2">
      <a href="/" class="flex items-center">
          <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-1 md:mr-3" alt="Flowbite Logo" />
          <span class="self-center text-base md:text-xl font-bold uppercase whitespace-nowrap text-slate-800 dark:text-gray-400">Radar Bogor</span>
      </a>

      <div class="flex items-center justify-center gap-2 md:hidden">
        <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="cursor-pointer text-slate-900 dark:text-slate-400 md:hover:text-primary"><i data-feather="user"></i></a>
          <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
              <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                </li>
              </ul>
          </div>
      
        <div class="flex justify-center">
          <input type="checkbox" id="toggle" class="hidden"/>
          <label for="toggle">
            <div class="w-10 h-5 bg-slate-900 dark:bg-slate-400 rounded-full flex gap-2 items-center p-1 cursor-pointer relative">
              <i data-feather="moon" class="text-white"></i>
              <i data-feather="sun" class="text-yellow-400"></i>
              <div class="w-4 h-4 bg-white rounded-full toggle-circle transition duration-300 ease-in-out absolute"></div>
            </div>
          </label>
        </div>
      </div>

      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center text-sm text-gray-500 md:hidden dark:text-gray-400" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <span data-feather="menu"></span>
      </button>

      <div class="hidden w-full md:flex md:items-center md:w-auto" id="navbar-default">
        <ul class="flex flex-col p-4 mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
          <li>
            <a href="/" class="block py-2 pl-3 pr-4 md:p-0 text-center text-slate-900 dark:text-slate-400 md:hover:text-primary hover:bg-gray-100 md:hover:bg-transparent rounded" aria-current="page">Home</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 md:p-0 text-center text-slate-900 dark:text-slate-400 md:hover:text-primary hover:bg-gray-100 md:hover:bg-transparent rounded">Epaper</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 md:p-0 text-center text-slate-900 dark:text-slate-400 md:hover:text-primary hover:bg-gray-100 md:hover:bg-transparent rounded">Pricing</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 md:p-0 text-center text-slate-900 dark:text-slate-400 md:hover:text-primary hover:bg-gray-100 md:hover:bg-transparent rounded">Contact</a>
          </li>
        </ul>
        
<<<<<<<<< Temporary merge branch 1
          <div class="flex justify-center">
            <input type="checkbox" id="toggle" class="hidden"/>
            <label for="toggle">
              <div class="w-9 h-6 bg-gray-500 dark:bg-yellow-300 rounded-full flex items-center p-1 cursor-pointer">
                <div class="w-4 h-4 toggle-circle transition duration-300 ease-in-out flex items-center justify-center"><span>🌗</span></div>
              </div>
            </label>
          </div>

=========
            <div class="md:flex items-center justify-center gap-2 hidden">
              <a id="dropdownDefaultButton" data-dropdown-toggle="dropdown1" class="cursor-pointer text-slate-900 dark:text-slate-400 md:hover:text-primary"><i data-feather="user"></i></a>
              <div id="dropdown1" class="z-10 w-64 hidden bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700">
                <div class="p-3 text-center text-sm">
                  
                  <div class="w-full pb-2 border-b">
                    <div class="mx-auto mb-1 w-20 h-20 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
                      <img src="/blank-profile.png" alt="user-profile">
                    </div>
                    <h1 class="font-semibold uppercase">User Name</h1>
                  </div>

                  <div class="py-2 border-b">
                    <h1 class="font-semibold">Date since</h1>
                    <p class="text-gray-500">01/01/2023 - 01/04/2023</p>
                  </div>

                  <div class="py-2 border-b">
                    <h1 class="font-semibold">Member Status</h1>
                    <span class="font-medium inline-flex items-center text-primary">
                      <span data-feather="check-circle" class="size-12 mr-1"></span>Active
                    </span>
                  </div>

                  <div class="pt-2">
                    <a href="" class="text-red-500 hover:underline"><i data-feather="power" class="size-12 inline-flex items-center"></i> Sign Out</a>
                  </div>
                </div>
              </div>

              <div class="flex justify-center">
                <input type="checkbox" id="toggle" class="hidden"/>
                <label for="toggle">
                  <div class="w-10 h-5 bg-slate-900 dark:bg-slate-400 rounded-full flex gap-2 items-center p-1 cursor-pointer relative">
                    <i data-feather="moon" class="text-white"></i>
                    <i data-feather="sun" class="text-yellow-400"></i>
                    <div class="w-4 h-4 bg-white rounded-full toggle-circle transition duration-300 ease-in-out absolute"></div>
                  </div>
                </label>
              </div>
            </div>
>>>>>>>>> Temporary merge branch 2
        </div>

    </div>
  </nav>
   --}}