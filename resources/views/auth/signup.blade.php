<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="flex h-screen">
        <div class="m-auto bg-gray-100 w-1/4 p-5 shadow-2xl rounded-lg">
            <h5 class="text-left font-sans font-semibold text-3xl mb-8">Signup</h5>
            <form action="POST">
                <input type="email" name="email" id="email"
                    class="p-2 text-center w-full mb-5 rounded-sm focus:outline-none focus:ring-4 transition shadow-sm"
                    placeholder="Email" required>
                <input type="text" name="username" id="username"
                    class="p-2 text-center w-full mb-5 rounded-sm focus:outline-none focus:ring-4 transition shadow-sm"
                    placeholder="Username" required>
                <input type="password" name="password" id="password"
                    class="p-2 text-center w-full mb-5 rounded-sm focus:outline-none focus:ring-4 transition shadow-sm"
                    placeholder="Password" required>
                <button type="submit"
                    class="bg-gray-200 w-2/4 rounded-full p-2 w-full shadow-md hover:bg-gray-300 transition delay-100 font-sans font-semibold text-md focus:outline-none mb-3">Create</button>
                <div class="grid gap-2 grid-cols-1">
                    <a href="/"><button
                            class="bg-gray-200 w-full p-2 rounded-full hover:bg-gray-300 transition shadow-md">have
                            account?</button></a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
