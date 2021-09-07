{{-- @if (session()->has('message'))
<div class="p-3 bg-green-600 text-white text-center font-sans font-normal">
    <div>
        <p class="text-sm">{{ session('message') }}</p>
    </div>
</div>
@endif --}}
<div class="flex items-center justify-center h-screen">
    <div class="w-full">
        <div class="p-3">
            <button wire:click="create()" class="bg-green-500 p-3 rounded-lg text-white shadow-lg">Add Records</button>

            @if($isModal)
            @include('livewire.create')
            @endif
        </div>
        <div class="grid grid-cols-1 p-2 text-center">
            <div class="bg-gray-50 shadow-xl border border-5 border-gray-300 rounded-lg p-5">
                <div class="flex grid-cols-1 p-3 text-center">
                    <div class="w-full">
                        <input type="text"
                            class="w-full p-2 font-semibold focus:outline-none hover:border-gray-400 shadow-sm hover:bg-gray-50 focus:border-gray-400 font-sans rounded-md border border-5 border-gray-200"
                            placeholder="Search name">
                    </div>
                </div>
                <div class="w-full md:w-full">
                    <div class="overflow-auto md:overflow-scroll">
                        <table class="table-fixed">
                            <thead>
                                <tr>
                                    <th class="w-1/12 border border-5 bg-gray-100 p-3 font-sans font-semibold">No</th>
                                    <th class="w-1/12 border border-5 bg-gray-100 p-3 font-sans font-semibold">Name</th>
                                    <th class="w-1/2 border border-5 bg-gray-100 font-sans font-semibold">Notes</th>
                                    <th class="w-1/2 border border-5 bg-gray-100 font-sans font-semibold ">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $row)
                                <tr>
                                    <td class="border border-5 font-sans font-normal p-3">{{ $row->id }}</td>
                                    <td class="border border-5 font-sans font-normal p-3">{{ $row->name }}</td>
                                    <td class="border border-5 font-sans font-normal p-3">{{ $row->notes }}</td>
                                    <td class="border border-5 font-sans font-normal p-3">
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
