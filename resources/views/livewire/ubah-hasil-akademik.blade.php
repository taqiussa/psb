<section class="px-7 bg-white border-b">
    <div class="my-3">
        <x-input wire:model.debounce.500ms="search" icon="search" placeholder="Cari ..." class="w-auto text-slate-600" />
    </div>
    <div class="overflow-x-auto relative">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        #
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Nama
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Kode Daftar
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Status
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Panitia
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listUser as $key => $user)
                    <tr
                        class="odd:bg-white even:bg-slate-200 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-slate-300">
                        <td scope="row"
                            class="py-2 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $listUser->firstItem() + $key }}
                        </td>
                        <td scope="row"
                            class="py-2 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $user->name }}
                        </td>
                        <td class="py-2 px-6">
                            {{ $user->kode_daftar }}
                        </td>
                        <td class="py-2 px-6">
                            @switch($user->akademik->nilai)
                                @case('0')
                                    Akademik : Tidak diterima
                                @break

                                @case('1')
                                    Akademik : Diterima
                                @break

                                @default
                                    Akademik : Belum dikonfirmasi
                            @endswitch
                            <br>
                            @switch($user->diterima)
                                @case('0')
                                    Pengumuman : Tidak diterima
                                @break

                                @case('1')
                                    Pengumuman : Diterima
                                @break

                                @default
                                    Pengumuman : Belum dikonfirmasi
                            @endswitch
                            <br>
                            <br>
                            Nilai Akademik : {{ $user->akademik->benar * 5}}
                        </td>
                        <td class="py-2 px-6">
                            {{ $user->akademik->user->name }}
                        </td>
                        <td class="py-2 px-6">
                            <x-button wire:click.prevent="confirmTerima({{ $user->id }})" positive
                                label="Ubah Terima" />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-3">
        {{ $listUser->links() }}
    </div>
</section>
