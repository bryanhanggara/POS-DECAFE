{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Welcome to D'Coffee Cafe. Please enter your username and password.">
    <title>D'Coffee Cafe</title>

    <!-- MAIN CSS -->
    {{-- <link rel="stylesheet" href="{{url('front-end-pos/src/css/output.css')}}"> --}}
    @vite('resources/css/app.css')
   
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

</head>

<body>
    <section>
        <div class="w-full h-screen flex items-start overflow-x-hidden">
            <div class="hidden md:flex relative md:w-1/2 h-full flex-col">
                <img src="{{url('front-end-pos/src/image/coffee_rorozoa_3_07.jpg')}}" class="w-full h-full object-cover">
            </div>


            <div class="md:w-1/2 w-full h-full flex flex-col pt-12 md:pt-0 md:justify-center items-center relative">
                <img src="https://raw.githubusercontent.com/rihannh/Front-end-Pos/main/src/image/latte-art.png" class="absolute -right-8 top-0 w-36 -z-20" alt="">
                <img src="https://github.com/rihannh/Front-end-Pos/blob/main/src/image/coffee-cup.png?raw=true" class="absolute -left-12 top-1/2 rotate-12 w-24 -z-20" alt="">
                <img src="https://github.com/rihannh/Front-end-Pos/blob/main/src/image/coffee-cup.png?raw=true"
                    class="absolute -right-12 top-1/2 translate-y-24 -rotate-12 w-24 -z-20" alt="">
                <div class="px-6 md:px-0 md:max-w-sm lg:max-w-md">
                    <h1 class="text-peach-500 text-3xl md:text-4xl font-bold py-1">D'Coffee Cafe Register</h1>
                    <p class="md:text-lg pb-6">Welcome new comer! Let us know <span
                            class="text-white bg-peach-500 font-semibold px-2 shadow-md rounded-md">about you</span></p>

                    <form class="w-full flex flex-col gap-2 " action="{{route('register')}}" method="POST">
                        @csrf
                        <div class="mb-5">
                            <label for="name"
                                class="block mb-1 text-sm text-gray-500 ml-1.5 dark:text-white">Name</label>
                            <input type="text" id="username" name="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                placeholder="Name" required />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="mb-5">
                            <label for="Email"
                                class="block mb-1 text-sm text-gray-500 ml-1.5 dark:text-white">Username</label>
                            <input type="email" id="username" name="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                placeholder="Email" required />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="mb-5">
                            <label for="password"
                                class="block mb-1 text-sm text-gray-500 ml-1.5 dark:text-white">Password</label>
                            <input type="password" id="password" name="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2"
                                placeholder="Password" required />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div class="mb-5">
                            <label for="confirm-password"
                                class="block mb-1 text-sm text-gray-500 ml-1.5 dark:text-white">Password</label>
                            <input type="password" id="password" name="password_confirmation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2"
                                placeholder="Password Confirm" required />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <button type="submit"
                            class="bg-peach-500 rounded-xl text-white py-3 hover:scale-105 duration-300 mt-4">Enter</button>
                    </form>
                </div>
                <p class="absolute bottom-0 text-sm text-gray-400">© 2011-2024 PT. D'Coffe Cafe. All Rights Reserved</p>
            </div>
        </div>
    </section>

    <!-- IONICONS -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- SCRIPT LOCAL -->
    <script src="{{url('front-end-pos/src/js/script.js')}}"></script>

    <!-- FLOWBITE -->
    <script src="{{url('front-end-pos/node_modules/flowbite/dist/flowbite.min.js')}}"></script>
</body>

</html>