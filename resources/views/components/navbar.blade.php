{{--  @props(["credential"])  --}}
<nav class="bg-white shadow-md fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">

            <!-- Logo -->
            <a href="#" class="text-2xl font-bold text-blue-600 flex items-center space-x-2">
                <i class="fa-solid fa-rocket"></i>
                <span>Brand</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex md:items-center md:space-x-6">

                <!-- Home Dropdown -->
                <div class="relative group">
                    <button class="flex items-center space-x-1 text-gray-700 hover:text-blue-600 transition">
                        <span>Home</span>
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </button>
                    <div
                        class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all">
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50">Subhome 1</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50">Subhome 2</a>
                    </div>
                </div>

                <!-- About Dropdown -->
                <div class="relative group">
                    <button class="flex items-center space-x-1 text-gray-700 hover:text-blue-600 transition">
                        <span>About</span>
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </button>
                    <div
                        class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all">
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50">Team</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50">Company</a>
                    </div>
                </div>

                <!-- Services Dropdown -->
                <div class="relative group">
                    <button class="flex items-center space-x-1 text-gray-700 hover:text-blue-600 transition">
                        <span>Services</span>
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </button>
                    <div
                        class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all">
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50">Web Design</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50">Marketing</a>
                    </div>
                </div>

                <!-- Contact Dropdown -->
                <div class="relative group">
                    <button class="flex items-center space-x-1 text-gray-700 hover:text-blue-600 transition">
                        <span>Contact</span>
                        <i class="fa-solid fa-chevron-down text-xs"></i>
                    </button>
                    <div
                        class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-all">
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50">Email</a>
                        <a href="#" class="block px-4 py-2 hover:bg-blue-50">Support</a>
                    </div>
                </div>
                <div class="group border-b border-gray-200">
                    <form action="{{ route('logout') }}" method="POST" class="">
                        @csrf
                        <button class="text-black p-2 rounded bg-green-300" type="submit">
                            Logout
                        </button>
                    </form>
                </div>

            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                    <i class="fa-solid fa-bars fa-lg"></i>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-inner">
        <!-- Home -->
        <details class="group border-b border-gray-200">
            <summary class="px-4 py-2 cursor-pointer flex justify-between items-center hover:bg-blue-50">
                Home <i class="fa-solid fa-chevron-down text-xs"></i>
            </summary>
            <div class="px-4 py-2 space-y-1">
                <a href="#" class="block py-1 hover:bg-blue-50">Subhome 1</a>
                <a href="#" class="block py-1 hover:bg-blue-50">Subhome 2</a>
            </div>
        </details>

        <!-- About -->
        <details class="group border-b border-gray-200">
            <summary class="px-4 py-2 cursor-pointer flex justify-between items-center hover:bg-blue-50">
                About <i class="fa-solid fa-chevron-down text-xs"></i>
            </summary>
            <div class="px-4 py-2 space-y-1">
                <a href="#" class="block py-1 hover:bg-blue-50">Team</a>
                <a href="#" class="block py-1 hover:bg-blue-50">Company</a>
            </div>
        </details>

        <!-- Services -->
        <details class="group border-b border-gray-200">
            <summary class="px-4 py-2 cursor-pointer flex justify-between items-center hover:bg-blue-50">
                Services <i class="fa-solid fa-chevron-down text-xs"></i>
            </summary>
            <div class="px-4 py-2 space-y-1">
                <a href="#" class="block py-1 hover:bg-blue-50">Web Design</a>
                <a href="#" class="block py-1 hover:bg-blue-50">Marketing</a>
            </div>
        </details>

        <!-- Contact -->
        <details class="group border-b border-gray-200">
            <summary class="px-4 py-2 cursor-pointer flex justify-between items-center hover:bg-blue-50">
                Contact <i class="fa-solid fa-chevron-down text-xs"></i>
            </summary>
            <div class="px-4 py-2 space-y-1">
                <a href="#" class="block py-1 hover:bg-blue-50">Email</a>
                <a href="#" class="block py-1 hover:bg-blue-50">Support</a>
            </div>
        </details>
        <div class="group border-b border-gray-200">
            <form action="{{ route('logout') }}" method="POST" class="">
                @csrf
                <button class="text-black p-2 rounded bg-green-300" type="submit">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>
<div class="shadow bg-gray-100 font-bold text-5xl p-2 pt-24">
    {{ $authUser->name }}
</div>
<div class="bg-gray-100 p-6 ">

    <div class="max-w-full overflow-x-auto bg-white rounded-xl shadow">
        <table class="min-w-full divide-y divide-gray-200">
            <!-- Table Head -->
            <thead class="bg-gray-200 shadow-md">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created
                        At</th>
                    <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Actions
                    </th>
                </tr>
            </thead>

            <!-- Table Body -->
            <tbody class="bg-white divide-y divide-gray-200">
                <tr class="hover:bg-gray-50">
                
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{$credential->id}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{$credential->name}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{$credential->email}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{$credential->created_at}}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-center space-x-2">
                        <button
                            class="px-3 py-1 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">View</button>
                        <button
                            class="px-3 py-1 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition">Edit</button>
                        <button
                            class="px-3 py-1 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">Delete</button>
                    </td>
                </tr>
              
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

</div>
{{--    <!-- Page Content -->
  <div class="pt-24 max-w-7xl mx-auto px-4">
    <h1 class="text-4xl font-bold mb-6">Dropdown Navbar Example</h1>
    <p class="text-gray-600 mb-4">Hover over each link on desktop to see the dropdown. On mobile, tap to expand submenus.</p>
  </div>
   <script src="../FontAwesome/all.js"></script>  --}}

<!-- Mobile toggle script -->
<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    btn.addEventListener('click', () => menu.classList.toggle('hidden'));
</script>
