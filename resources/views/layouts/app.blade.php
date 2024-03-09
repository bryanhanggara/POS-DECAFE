<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- * MAIN CSS -->
    @vite(['resources/css/app.css','resources/js/app.js'])

    <!-- * TITTLE -->
    <title>@yield('title')</title>

    <!-- * GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

</head>

<body>
    <!-- TODO EDIT HERE BEB -->
    <!-- cek -->
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-8 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                        <img src="{{url('front-end-pos/src/image/logo-1.png')}}" class="h-12 me-1" alt="FlowBite Logo" />
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">DeCafe Shop</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <a href="{{route('cart.show')}}" class="px-4">
                        <ion-icon class="w-7 h-7 text-gray-400 hover:text-peach-500" name="cart-outline"></ion-icon>
                    </a>
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    Neil Sims
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    neil.sims@flowbite.com
                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Earnings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Sign out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 text-sm text-gray-500 rounded-lg ms-3 sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-16 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('listmenu') }}"
                    class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white hover:bg-peach-100 dark:hover:bg-gray-700 group {{ Request::route()->getName() == 'listmenu' ? 'bg-peach-500 text-white' : '' }}">
                    <ion-icon
                        class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-peach-500 dark:group-hover:text-white {{ Request::route()->getName() == 'listmenu' ? 'text-white' : '' }}"
                        name="home"></ion-icon>
                    <span class="ms-3 group-hover:text-peach-500">Menu</span>
                </a>
                
                </li>
                <li>
                    <a href="{{route('history')}}"
                        class="flex items-center p-2 text-gray-500 rounded-lg dark:text-white hover:bg-peach-100 dark:hover:bg-gray-700 group {{ Request::route()->getName() == 'history' ? 'bg-peach-500 text-white' : '' }} ">
                        <ion-icon
                            class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-peach-500 dark:group-hover:text-white {{ Request::route()->getName() == 'history' ? 'text-white' : '' }}"
                            name="newspaper-outline"></ion-icon>
                        <span class="ms-3 group-hover:text-peach-500">Transaction Log</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base text-gray-500 transition duration-75 rounded-lg group hover:bg-peach-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <ion-icon
                            class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-peach-500 dark:group-hover:text-white"
                            name="grid-outline"></ion-icon>
                        <span
                            class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap group-hover:text-peach-500">Management</span>
                        <svg class="w-3 h-3 group-hover:text-peach-500" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{route('produk.create')}}"
                                class="{{ Request::route()->getName() == 'produk.create' ? 'bg-peach-500 text-white' : '' }} flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-peach-100 hover:text-peach-500 dark:text-white dark:hover:bg-gray-700">Add
                                Menu</a>
                        </li>
                        <li>
                            <a href="{{route('produk.index')}}"
                                class="{{ Request::route()->getName() == 'produk.index' ? 'bg-peach-500 text-white' : '' }} flex items-center w-full p-2 text-gray-500 transition duration-75 rounded-lg pl-11 group hover:bg-peach-100 hover:text-peach-500 dark:text-white dark:hover:bg-gray-700">List
                                Menu</a>
                        </li>
                    </ul>
                </li>
                <hr class="text-gray-400 border-[1.25px]">
                <li>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button type="submit"
                        class="flex items-center w-full p-2 text-gray-500 rounded-lg dark:text-white hover:bg-peach-100 dark:hover:bg-gray-700 group">
                        <ion-icon
                            class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-peach-500 dark:group-hover:text-white"
                            name="log-out-outline"></ion-icon>
                        <span class="ms-3 group-hover:text-peach-500">Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>

    @yield('main')




    <!-- TODO EDIT HERE BEB END -->

    <!-- * IONICONS -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- * SCRIPT LOCAL -->
    <script src="{{url('Front-end-pos/src/js/script.js')}}"></script>
    <script src="{{url('Front-end-pos/src/js/preview.js')}}"></script>

    <!-- * FLOWBITE -->
    <script src="{{url('Front-end-pos/node_modules/flowbite/dist/flowbite.min.js')}}"></script>
</body>

</html>