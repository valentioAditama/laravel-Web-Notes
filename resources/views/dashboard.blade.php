<x-app-layout>
    <div class="flex items-center justify-center h-screen">
        <div class="w-full">
            <div class="grid grid-cols-1 p-5 text-center">
                <div class="bg-gray-100 shadow-xl border border-5 border-gray-300 rounded-lg p-5 ml-5">
                    <h5 class="font-sans text-lg font-semibold text-gray-700 mb-14">Record your notes here</h5>
                    <img class="mx-auto border-5 mb-14" src="{{ asset("image/notes.png")}}" alt="">
                    <p class="text-center font-sans text-md font-normal mb-5">Your notes will be stored in the database section and you can eliminate them at any time if you need them.</p>
                    <button class="bg-green-600 p-3 hover:bg-green-700 font-sans font-semibold transition rounded-lg shadow-xl text-white"><a href="{{ route('users')}}">Click Here!</a></button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
