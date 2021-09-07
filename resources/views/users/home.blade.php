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
                <div class="bg-gray-100 shadow-xl border border-5 border-gray-300 rounded-lg p-5">
                    <h5 class="font-sans text-lg font-semibold text-gray-700 mb-5">Create Request Account To Admin</h5>
                    <img class="mx-auto border-5 mb-5" src="{{ asset("image/admin.jpg")}}" alt="">
                    <p class="text-center font-sans text-md font-normal mb-5">Please click here to request an account creation request by admin</p>
                    <button class="bg-green-600 p-3 text-black hover:bg-green-700 hover:text-white font-sans font-semibold transition rounded-lg shadow-xl"><a href="/createRequest">Click Here!</a></button>
                </div>
                <div class="bg-gray-100 shadow-xl border border-5 border-gray-300 rounded-lg p-5 ml-5">
                    <h5 class="font-sans text-lg font-semibold text-gray-700 mb-14">Create your account</h5>
                    <img class="mx-auto border-5 mb-14" src="{{ asset("image/CreateAcount.png")}}" alt="">
                    <p class="text-center font-sans text-md font-normal mb-5">Please click here to create your own account without using admin</p>
                    <button class="bg-green-600 p-3 text-black hover:bg-green-700 hover:text-white font-sans font-semibold transition rounded-lg shadow-xl"><a href="/createWithoutAdmin">Click Here!</a></button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
