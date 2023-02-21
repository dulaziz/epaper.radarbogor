<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <i data-feather="align-left" class="text-gray-500"></i>
 </button>
 
 <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
      <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
       <a href="https://flowbite.com/" class="flex items-center pl-2.5 mb-5">
          <img src="https://flowbite.com/docs/images/logo.svg" class="h-6 mr-3 sm:h-7" alt="Flowbite Logo" />
          <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Radar Bogor</span>
       </a>
       <ul class="space-y-2">
          <li>
             <a href="/dashboard" class="{{ Request::is('dashboard') ? 'bg-gray-100 font-semibold' : '' }} flex items-center p-2 text-base text-gray-800 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <i data-feather="pie-chart" class="mr-3"></i>Dashboard
             </a>
          </li>
          
          <li>
             <a href="/member" class="{{ Request::is('member*') ? 'bg-gray-100 font-semibold' : '' }} flex items-center p-2 text-base text-gray-800 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <i data-feather="table" class="mr-3"></i>Member
             </a>
          </li>

          <li>
             <a href="/product" class="{{ Request::is('product*') ? 'bg-gray-200 font-semibold' : '' }} flex items-center p-2 text-base text-gray-800 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <i data-feather="tag" class="mr-3"></i>Products
             </a>
          </li>
          
       </ul>
    </div>
 </aside>