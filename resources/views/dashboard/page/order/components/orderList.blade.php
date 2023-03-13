<div class="mb-3 md:flex items-center justify-between">
    <div class="md:flex items-center md:space-x-3">
    <h1 class="">Short :</h1>
    <div class="mb-2 md:mb-0">
        <select name="status" id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Status</option>
        <option value="Wt">Waiting</option>
        <option value="Cn">Cenceled</option>
        </select>
    </div>
    <div class="mb-2 md:mb-0">
        <select name="paket" id="paket" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option selected>Products</option>
        <option value="Cl">Clasic</option>
        <option value="Sl">Silver</option>
        <option value="Gl">Gold</option>
        <option value="Pl">Platinum</option>
        </select>
    </div>
</div>
    
    <label for="table-search" class="sr-only">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
    </div>
</div>

<div class="relative overflow-x-scroll shadow-md sm:rounded-lg mb-4">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Username
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Product
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    Checkout
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <td class="px-6 py-4">
                    01
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Neli Sims
                </th>
                <td class="px-6 py-4">
                    neil.sims
                </td>
                <td class="px-6 py-4">
                    neil.sims@flowbite.com
                </td>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-yellow-300 mr-2"></div> Waiting
                </td>
                <td class="px-6 py-4">
                    11 Februari 2023
                </td>
                <td class="px-6 py-4">
                    <a href="/member/editMember" class="text-gray-700 hover:text-blue-600">
                        <ion-icon name="create-outline" class="text-xl stroke-2"></ion-icon>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-red-600">
                        <ion-icon name="trash-outline" class="text-xl stroke-2"></ion-icon>
                    </a>
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">
                    02
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Neli Sims
                </th>
                <td class="px-6 py-4">
                    neil.sims
                </td>
                <td class="px-6 py-4">
                    neil.sims@flowbite.com
                </td>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-yellow-300 mr-2"></div> Waiting
                    </div>
                </td>
                <td class="px-6 py-4">
                    11 Februari 2023
                </td>
                <td class="px-6 py-4">
                    <a href="/member/editMember" class="text-gray-700 hover:text-blue-600">
                        <ion-icon name="create-outline" class="text-xl stroke-2"></ion-icon>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-red-600">
                        <ion-icon name="trash-outline" class="text-xl stroke-2"></ion-icon>
                    </a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <td class="px-6 py-4">
                    03
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Neli Sims
                </th>
                <td class="px-6 py-4">
                    neil.sims
                </td>
                <td class="px-6 py-4">
                    neil.sims@flowbite.com
                </td>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-yellow-300 mr-2"></div> Waiting
                </td>
                <td class="px-6 py-4">
                    11 Februari 2023
                </td>
                <td class="px-6 py-4">
                    <a href="/member/editMember" class="text-gray-700 hover:text-blue-600">
                        <ion-icon name="create-outline" class="text-xl stroke-2"></ion-icon>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-red-600">
                        <ion-icon name="trash-outline" class="text-xl stroke-2"></ion-icon>
                    </a>
                </td>
            </tr>
            <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">
                    04
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Neli Sims
                </th>
                <td class="px-6 py-4">
                    neil.sims
                </td>
                <td class="px-6 py-4">
                    neil.sims@flowbite.com
                </td>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    <div class="flex items-center">
                        <div class="h-2.5 w-2.5 rounded-full bg-gray-500 mr-2"></div> Cenceled
                    </div>
                </td>
                <td class="px-6 py-4">
                    11 Februari 2023
                </td>
                <td class="px-6 py-4">
                    <a href="/member/editMember" class="text-gray-700 hover:text-blue-600">
                        <ion-icon name="create-outline" class="text-xl stroke-2"></ion-icon>
                    </a>
                    <a href="#" class="text-gray-700 hover:text-red-600">
                        <ion-icon name="trash-outline" class="text-xl stroke-2"></ion-icon>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="mb-3">
    <nav class="text-center md:flex items-center md:justify-between" aria-label="Table navigation">
        <div class="mb-1 md:mb-0">
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
        </div>
        <ul class="inline-flex items-center">
            <li>
                <a href="#" class="px-3 py-1 border border-r-0 text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700 rounded-l-md">Prev</a>
            </li>
            <li>
                <a href="#" class="px-3 py-1 border border-r-0 text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
            </li>
            <li>
                <a href="#" class="px-3 py-1 border border-r-0 text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
            </li>
            <li>
                <a href="#" class="px-3 py-1 border border-r-0 text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700">3</a>
            </li>
            <li>
                <a href="#" class="px-3 py-1 border text-gray-500 bg-white border-gray-300 hover:bg-gray-100 hover:text-gray-700 rounded-r-md">Next</a>
            </li>
        </ul>
    </nav>
</div>
