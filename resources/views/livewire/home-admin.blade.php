<div>
    <div class="grid grid-cols-4">
        <div class="w-full h-screen bg-blue-500">
            <div class="mx-auto">
                <img class="w-32 h-32 mx-auto p-1 pt-2" src="{{ asset("image/admin.svg")}}" alt="" srcset="">
                <h6 class="text-center pt-3 text-lg text-white">Welcome back!, <span
                        class="font-sans font-semibold text-xl">Valentio Aditama</span></h6>
                <h6 class="text-center text-white font-sans">Login Date: <span class="font-semibold text-lg">Selasa,
                        24/8/2021</span></h6>
            </div>
            <div class="p-3 bg-blue-600 mt-5 font-sans font-semibold text-lg text-white hover:bg-blue-700 transition">
                <a href="/homeAdmin">
                    <p>Dashboard</p>
                </a>
            </div>
        </div>
        <div class="col-span-3">
            <div class="h-screen bg-gray-200">
                <div class="row-span-2 bg-white p-2 shadow-lg">
                    <div class="grid grid-cols-2">
                        <div class="flex items-center">
                            <h6 class="font-sans font-normal text-lg">Welcome Back!, Valentio Aditama</h6>
                        </div>
                        <div class="flex justify-end">
                            <img class="h-10 w-10 mr-2" src="{{ asset("image/admin.svg")}}" alt="">
                            <h6 class="flex items-center font-sans font-normal text-lg">Valentio Aditama</h6>
                        </div>
                    </div>
                </div>
                <div class="row-span-2">
                    <div class="grid grid-cols-3">
                        <div class="flex justify-center mt-10 p-5">
                            <div class="bg-white w-full h-32 shadow-xl rounded-lg">
                                <div class="grid grid-cols-3">
                                    <div class="col-span-1">
                                        <div class="h-32 flex items-center">
                                            <img class="h-20 w-20 mx-auto" src="{{ asset("image/admin.svg")}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="h-32 flex items-center">
                                            <p class="font-sans text-4xl">200 <sub
                                                    class="font-sans text-base font-medium">Users</sub></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center mt-10 p-5">
                            <div class="bg-white w-full h-32 shadow-xl rounded-lg">
                                <div class="grid grid-cols-3">
                                    <div class="col-span-1">
                                        <div class="h-32 flex items-center">
                                            <img class="h-20 w-20 mx-auto" src="{{ asset("image/admin.svg")}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="h-32 flex items-center">
                                            <p class="font-sans text-4xl">200 <sub
                                                    class="font-sans text-base font-medium">Request Account</sub></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center mt-10 p-5">
                            <div class="bg-white w-full h-32 shadow-xl rounded-lg">
                                <div class="grid grid-cols-3">
                                    <div class="col-span-1">
                                        <div class="h-32 flex items-center">
                                            <img class="h-20 w-20 mx-auto" src="{{ asset("image/admin.svg")}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <div class="h-32 flex items-center">
                                            <p class="font-sans text-4xl">200 <sub
                                                    class="font-sans text-base font-medium">Create without Request</sub>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full p-5 h-32">
                    <div class="bg-white p-5 shadow-md rounded-lg">
                        <div class="grid grid-cols-2">
                            <div class="flex items-center">
                                <h5 class="text-xl font-sans font-medium">Request Account</h5>
                            </div>
                        </div>
                        <div class="mt-5 overflow-auto">
                            <div class="w-full md:w-full">
                                <div class="overflow-auto md:overflow-scroll">
                                    <table class="table-fixed">
                                        <thead>
                                            <tr>
                                                <th class="w-1/12 border border-5 bg-gray-100 p-3 font-sans font-semibold">
                                                    No</th>
                                                <th class="w-1/12 border border-5 bg-gray-100 p-3 font-sans font-semibold">
                                                    Name</th>
                                                <th class="w-1/2 border border-5 bg-gray-100 font-sans font-semibold">
                                                    Notes</th>
                                                <th class="w-1/2 border border-5 bg-gray-100 font-sans font-semibold ">
                                                    Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($users as $row)
                                            <tr>
                                                <td class="border border-5 font-sans font-normal text-center p-3">{{ $row->id }}
                                                </td>
                                                <td class="border border-5 font-sans font-normal text-center p-3">{{ $row->name }}
                                                </td>
                                                <td class="border border-5 font-sans font-normal text-center p-3">{{ $row->notes }}
                                                </td>
                                                <td class="border border-5 font-sans font-normal text-center p-3">
                                                    <button wire:click="delete({{ $row->id }})"
                                                        class="bg-red-600 text-white font-bold py-2 px-4 rounded">Hapus</button>
                                                </td>
                                            </tr>
                                            @empty
                                            <tr>
                                                <td>Tidak ada data</td>
                                                <td>Tidak ada data</td>
                                                <td>Tidak ada data</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</div>