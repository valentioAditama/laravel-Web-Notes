<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Welcome user - Home</title>
</head>

<body>
    <div class="w-full bg-gray-200 shadow-md text-lg font-sans">
        <div class="grid md:gap-56 border-2 p-3 md:grid-cols-3">
            <div class="flex justify-center">
                <div class="pr-10 font-sans font-semibold text-gray-500 hover:text-gray-700 text-lg">
                    <a href="/home">Home</a>
                </div>
            </div>
            <div class="flex justify-center font-medium text-gray-400">
                <a href="/uses" class="pr-5 text-gray-700">Users</a>
                <a href="/admin" class="hover:text-gray-600">Admin</a>
            </div>
            <div class="flex items-center justify-end ">
                <div class="">
                    <img class="rounded-full w-12 mr-2" src="{{ asset("image/24712.jpg")}}" alt="">
                </div>
                <div>
                    <p class="font-medium text-gray-700 font-sans md:text-sm">Hello, Valentio Aditama</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-center h-screen">
        <div class="w-full">
            <div class="grid grid-cols-2 p-5 text-center">
                <div class="bg-gray-50 shadow-xl border border-5 border-gray-300 rounded-lg p-5">
                    <div class="flex grid grid-cols-1 p-3 text-center">
                        <div class="w-full">
                            <input type="text"
                                class="w-full p-2 font-semibold focus:outline-none hover:border-gray-400 shadow-sm hover:bg-gray-50 focus:border-gray-400 font-sans rounded-md border border-5 border-gray-200"
                                placeholder="Search name">
                        </div>
                    </div>
                    <div class="w-full md:w-full">
                        <table class="table-fixed">
                            <thead>
                                <tr>
                                    <th class="w-1/12 border border-5 bg-gray-100 p-3 font-sans font-semibold">No</th>
                                    <th class="w-1/2 border border-5 bg-gray-100 font-sans font-semibold">Email</th>
                                    <th class="border border-5 bg-gray-100 font-sans font-semibold">Username</th>
                                    <th class="w-1/2 border border-5 bg-gray-100 font-sans font-semibold ">Password</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="border border-5 font-sans font-normal p-3">1</td>
                                    <td class="border border-5 font-sans font-normal p-3">valentioaditama8@gmail.com
                                    </td>
                                    <td class="border border-5 font-sans font-normal p-3">Valentioaditama</td>
                                    <td class="border border-5 font-sans font-normal p-3">181202181202</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="bg-gray-100 shadow-xl border border-5 border-gray-300 rounded-lg p-5 ml-5">
                    <form method="POST" action="{{ route('register')}}">
                        @csrf
                        <div class="mt-4">
                            <x-jet-label for="name" value="{{ __('Name') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus autocomplete="name" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="email" value="{{ __('Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password" value="{{ __('Password') }}" />
                            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                                required autocomplete="new-password" />
                        </div>

                        <div class="mt-4">
                            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                            <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                name="password_confirmation" required autocomplete="new-password" />
                        </div>
                        <button
                            class="bg-green-600 text-white hover:bg-green-700 transition p-3 rounded-lg shadow-lg font-sans text-center mt-5 w-full ">
                            {{ __('Register') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
