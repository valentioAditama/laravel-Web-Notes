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
        <div class="text-center">
        <p class="text-lg font-semibold font-sans mb-2">Did your forgot password?</h3>
        <p class="text-sm font-200 text-center font-sans mb-5">Enter your email address you're using for your account below and we will send you a password reset link</h3>
    </div>
            <input type="email" class="p-2 text-center w-full mb-5 rounded-sm focus:outline-none focus:ring-4 transition shadow-sm hover:bg-gray-50" placeholder="Email">
            <button class="bg-gray-200 w-2/4 rounded-full p-2 w-full shadow-md hover:bg-gray-300 transition delay-100 font-sans font-semibold text-md focus:outline-none mb-3">Request Reset Link</button>
            <a href="/"><p class="text-center text-blue-600 underline hover:text-blue-700">back to sign in</p></a>
        </div>
    </div>
</body>

</html>
