<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <i data-feather="align-left" class="text-gray-500"></i>
 </button>
 
 <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
      <div class="h-full px-3 py-4 overflow-y-auto bg-gray-100 dark:bg-gray-800">
       <a href="https://flowbite.com/" class="flex items-center pl-2.5 mb-5">
          <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-7" alt="Flowbite Logo" />
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Radar Bogor</span>
       </a>
       <ul class="space-y-2">
          <li>
             <a href="/dashboard" class="{{ Request::is('dashboard') ? 'bg-gray-200 font-semibold' : '' }} flex items-center p-2 text-base text-gray-800 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">          
               <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-6 mr-3" viewBox="0 0 512 512"><title>Speedometer</title><path d="M326.1 231.9l-47.5 75.5a31 31 0 01-7 7 30.11 30.11 0 01-35-49l75.5-47.5a10.23 10.23 0 0111.7 0 10.06 10.06 0 012.3 14z"/><path d="M256 64C132.3 64 32 164.2 32 287.9a223.18 223.18 0 0056.3 148.5c1.1 1.2 2.1 2.4 3.2 3.5a25.19 25.19 0 0037.1-.1 173.13 173.13 0 01254.8 0 25.19 25.19 0 0037.1.1l3.2-3.5A223.18 223.18 0 00480 287.9C480 164.2 379.7 64 256 64z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M256 128v32M416 288h-32M128 288H96M165.49 197.49l-22.63-22.63M346.51 197.49l22.63-22.63"/></svg>
               Dashboard
             </a>
          </li>
          
          <li>
             <a href="/member" class="{{ Request::is('member*') ? 'bg-gray-200 font-semibold' : '' }} flex items-center p-2 text-base text-gray-800 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">
               <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-6 mr-3" viewBox="0 0 512 512"><title>People</title><path d="M402 168c-2.93 40.67-33.1 72-66 72s-63.12-31.32-66-72c-3-42.31 26.37-72 66-72s69 30.46 66 72z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M336 304c-65.17 0-127.84 32.37-143.54 95.41-2.08 8.34 3.15 16.59 11.72 16.59h263.65c8.57 0 13.77-8.25 11.72-16.59C463.85 335.36 401.18 304 336 304z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path d="M200 185.94c-2.34 32.48-26.72 58.06-53 58.06s-50.7-25.57-53-58.06C91.61 152.15 115.34 128 147 128s55.39 24.77 53 57.94z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M206 306c-18.05-8.27-37.93-11.45-59-11.45-52 0-102.1 25.85-114.65 76.2-1.65 6.66 2.53 13.25 9.37 13.25H154" fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32"/></svg>
               Member
             </a>
          </li>

          <li>
             <a href="/product" class="{{ Request::is('product*') ? 'bg-gray-200 font-semibold' : '' }} flex items-center p-2 text-base text-gray-800 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700">
               <svg xmlns="http://www.w3.org/2000/svg" class="ionicon w-6 mr-3" viewBox="0 0 512 512"><title>Pricetags</title><path d="M403.29 32H280.36a14.46 14.46 0 00-10.2 4.2L24.4 281.9a28.85 28.85 0 000 40.7l117 117a28.86 28.86 0 0040.71 0L427.8 194a14.46 14.46 0 004.2-10.2v-123A28.66 28.66 0 00403.29 32z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path d="M352 144a32 32 0 1132-32 32 32 0 01-32 32z"/><path d="M230 480l262-262a13.81 13.81 0 004-10V80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
               Products
             </a>
          </li>
          
       </ul>
    </div>
 </aside>