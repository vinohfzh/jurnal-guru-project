<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Jurnal Mengajar Saya
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- SUCCESS MESSAGE --}}
            @if(session('success'))
                <div class="mb-4 p-3 text-green-800 dark:text-green-200 bg-green-100 dark:bg-green-900 rounded">
                    {{ session('success') }}
                </div>
            @endif

            {{-- ADD BUTTON --}}
            <div class="mb-4">
                <a href="{{ route('guru.jurnal.create') }}"
                   class="inline-flex items-center px-4 py-2 bg-blue-600 hover:bg-blue-700
                          text-white rounded-lg shadow transition">
                    + Tambah Jurnal
                </a>
            </div>

            {{-- CARD WRAPPER --}}
            <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg p-6">

                @if($jurnals->count())
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-sm text-gray-700 dark:text-gray-200">
                            <thead>
                                <tr class="border-b border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900">
                                    <th class="px-4 py-3 text-left font-semibold">Tanggal</th>
                                    <th class="px-4 py-3 text-left font-semibold">Jam</th>
                                    <th class="px-4 py-3 text-left font-semibold">Kelas</th>
                                    <th class="px-4 py-3 text-left font-semibold">Mapel</th>
                                    <th class="px-4 py-3 text-left font-semibold">Materi</th>
                                    <th class="px-4 py-3 text-left font-semibold">Aksi</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                @foreach ($jurnals as $jurnal)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700 transition">
                                        <td class="px-4 py-2">{{ $jurnal->tanggal }}</td>

                                        <td class="px-4 py-2">
                                            {{ $jurnal->jam_mulai }} - {{ $jurnal->jam_selesai }}
                                        </td>

                                        <td class="px-4 py-2">{{ $jurnal->kelas }}</td>
                                        <td class="px-4 py-2">{{ $jurnal->mapel }}</td>
                                        <td class="px-4 py-2">{{ $jurnal->materi }}</td>

                                        {{-- Aksi --}}
                                        <td class="px-4 py-2 flex items-center gap-3">

                                            {{-- EDIT --}}
                                            <a href="{{ route('guru.jurnal.edit', $jurnal->id) }}"
                                                class="text-blue-600 dark:text-blue-400 hover:underline">
                                                Edit
                                            </a>

                                            {{-- DELETE --}}
                                            <form action="{{ route('guru.jurnal.destroy', $jurnal->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Hapus jurnal ini?')">
                                                @csrf
                                                @method('DELETE')

                                                <button class="text-red-600 dark:text-red-400 hover:underline">
                                                    Hapus
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{-- PAGINATION --}}
                    <div class="mt-4">
                        {{ $jurnals->links() }}
                    </div>

                @else
                    <p class="text-gray-600 dark:text-gray-300">Belum ada jurnal.</p>
                @endif

            </div>

        </div>
    </div>
</x-app-layout>
