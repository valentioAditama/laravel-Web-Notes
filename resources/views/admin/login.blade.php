<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Welcome user - Home</title>
</head>

<body>
    <div class="flex items-center justify-center h-screen">
        <div class="w-full">
            <div class="grid grid-cols-2 p-5 text-center">
                <div class="rounded-lg p-5">
                    <img src="{{ asset("image/admin2.jpg")}}" alt="">
                </div>
                <div class="flex items-center mx-auto">
                    <div class="rounded-lg p-5 ml-5">
                        <h5 class="font-sans text-lg font-semibold text-gray-700 mb-5">Login Form</h5>
                        <input
                            class="md:w-full p-3 font-sans font-semibold bg-gray-100 focus:outline-none rounded-md mb-5"
                            type="text" placeholder="Username">
                        <input
                            class="md:w-full p-3 font-sans font-semibold bg-gray-100 focus:outline-none rounded-md mb-5"
                            type="text" placeholder="Password">
                        <button
                            class="w-full bg-green-500 p-2 rounded-md text-white shadow-lg hover:bg-green-400 transition ">Log
                            in</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
