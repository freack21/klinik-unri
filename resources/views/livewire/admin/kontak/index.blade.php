<div>
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800 uppercase">Kelola Kontak</h2>

        <div class="flex space-x-2">
            @if ($kontaks->isEmpty())
                <a href="{{ route('admin.kontak.create') }}"
                    class="px-4 py-2 bg-blue-200 text-blue-800 font-bold rounded-full hover:bg-blue-300 transition">TAMBAH</a>
            @endif
        </div>
    </div>

    <div class="bg-[#1e293b] rounded-lg p-6 shadow-lg">
        <div class="overflow-x-auto">
            <table class="w-full text-white">
                <thead>
                    <tr class="border-b border-gray-600 text-left">
                        <th class="py-3 px-4 w-16 text-center">No</th>
                        <th class="py-3 px-4">Description</th>
                        <th class="py-3 px-4">Phone</th>
                        <th class="py-3 px-4">Email</th>
                        <th class="py-3 px-4 w-24 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kontaks as $index => $item)
                        <tr class="border-b border-gray-700 hover:bg-gray-700 transition">
                            <td class="py-3 px-4 text-center">{{ $kontaks->firstItem() + $index }}</td>
                            <td class="py-3 px-4">{{ Str::limit($item->description, 50) }}</td>
                            <td class="py-3 px-4">{{ $item->phone }}</td>
                            <td class="py-3 px-4">{{ $item->email }}</td>
                            <td class="py-3 px-4 flex justify-center space-x-2">
                                <a href="{{ route('admin.kontak.edit', $item->id) }}"
                                    class="text-gray-400 hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </a>
                                <button wire:click="delete({{ $item->id }})"
                                    wire:confirm="Are you sure you want to delete this contact info?"
                                    class="text-gray-400 hover:text-red-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            {{ $kontaks->links() }}
        </div>
    </div>
</div>
