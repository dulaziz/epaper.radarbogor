<div class="bg-gray-50 p-4 rounded-md shadow-md border-t-4 border-blue-500">
    
    <form>
        <div class="grid md:grid-cols-2 md:gap-6">
            <div>
                <h5 class="mb-6 text-gray-900 text-sm font-medium">User Detail</h5>
                <div class="mb-4">
                <label for="name" class="block mb-1 text-sm text-gray-500 dark:text-white">Name</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
                </div>
                <div class="mb-4">
                <label for="username" class="block mb-1 text-sm text-gray-500 dark:text-white">Username</label>
                <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
                <div class="mb-4">
                <label for="email" class="block mb-1 text-sm text-gray-500 dark:text-white">Email Address</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
                </div>
                <div class="mb-4">
                <label for="password" class="block mb-1 text-sm text-gray-500 dark:text-white">Password</label>
                <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
            </div>
    
            <div>
                <h5 class="mb-6 text-gray-900 text-sm font-medium">Member Status</h5>
                <div class="mb-4">
                    <label for="product" class="block mb-1 text-sm text-gray-500 dark:text-white">Product</label>
                    <select name="product" id="product" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="Ac">Clasic</option>
                        <option value="Ex">Silver</option>
                        <option value="Ac">Gold</option>
                        <option value="Ex">Platinum</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="status" class="block mb-1 text-sm text-gray-500 dark:text-white">Status</label>
                    <select name="status" id="status" class="bg-gray-50 border border-gray-300 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="Ac" class="text-green-500">Active</option>
                        <option value="Ex" class="text-red-500">Expired</option>
                        <option value="Wt" class="text-yellow-500">Waiting</option>
                        <option value="Cn" class="text-gray-500">Cenceled</option>
                    </select>
                </div>
                <div class="mb-4">
                <label for="since" class="block mb-1 text-sm text-gray-500 dark:text-white">Since</label>
                <input type="date" name="since" id="since" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
                </div>
                <div class="mb-4">
                <label for="expired" class="block mb-1 text-sm text-gray-500 dark:text-white">Expired</label>
                <input type="date" name="expired" id="expired" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                </div>
            </div>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save Member</button>
        </div>
      </form>
      
    </div>
      