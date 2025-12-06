<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Jurnal Mengajar
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                <form action="{{ route('guru.jurnal.update', $jurnal->id) }}" 
                      method="POST"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    {{-- TANGGAL --}}
                    <div class="mb-3">
                        <label class="block text-sm font-medium">Tanggal</label>
                        <input type="date" name="tanggal" class="mt-1 w-full border rounded p-2"
                               value="{{ old('tanggal', $jurnal->tanggal) }}">
                    </div>

                    {{-- JAM --}}
                    <div class="mb-3 flex gap-3">
                        <div class="flex-1">
                            <label class="block text-sm font-medium">Jam Mulai</label>
                            <input type="time" name="jam_mulai" class="mt-1 w-full border rounded p-2"
                                   value="{{ old('jam_mulai', $jurnal->jam_mulai) }}">
                        </div>

                        <div class="flex-1">
                            <label class="block text-sm font-medium">Jam Selesai</label>
                            <input type="time" name="jam_selesai" class="mt-1 w-full border rounded p-2"
                                   value="{{ old('jam_selesai', $jurnal->jam_selesai) }}">
                        </div>
                    </div>

                    {{-- KELAS --}}
                    <div class="mb-3">
                        <label class="block text-sm font-medium">Kelas</label>
                        <input type="text" name="kelas" class="mt-1 w-full border rounded p-2"
                               value="{{ old('kelas', $jurnal->kelas) }}">
                    </div>

                    {{-- MAPEL --}}
                    <div class="mb-3">
                        <label class="block text-sm font-medium">Mapel</label>
                        <input type="text" name="mapel" class="mt-1 w-full border rounded p-2"
                               value="{{ old('mapel', $jurnal->mapel) }}">
                    </div>

                    {{-- MATERI --}}
                    <div class="mb-3">
                        <label class="block text-sm font-medium">Materi</label>
                        <input type="text" name="materi" class="mt-1 w-full border rounded p-2"
                               value="{{ old('materi', $jurnal->materi) }}">
                    </div>

                    {{-- METODE --}}
                    <div class="mb-3">
                        <label class="block text-sm font-medium">Metode</label>
                        <input type="text" name="metode" class="mt-1 w-full border rounded p-2"
                               value="{{ old('metode', $jurnal->metode) }}">
                    </div>

                    {{-- KEHADIRAN --}}
                    <div class="mb-3">
                        <label class="block text-sm font-medium">Kehadiran</label>
                        <textarea name="kehadiran" class="mt-1 w-full border rounded p-2" rows="2">
                            {{ old('kehadiran', $jurnal->kehadiran) }}
                        </textarea>
                    </div>

                    {{-- CATATAN --}}
                    <div class="mb-3">
                        <label class="block text-sm font-medium">Catatan</label>
                        <textarea name="catatan" class="mt-1 w-full border rounded p-2" rows="3">
                            {{ old('catatan', $jurnal->catatan) }}
                        </textarea>
                    </div>

                    {{-- FOTO --}}
                    <div class="mb-4">
                        <label class="block text-sm font-medium">Foto Kegiatan</label>

                        @if($jurnal->foto_path)
                            <img src="{{ asset('storage/' . $jurnal->foto_path) }}" 
                                 class="w-32 rounded shadow mb-2">
                        @endif

                        <input type="file" name="foto_kegiatan"
                               class="mt-1 w-full border rounded p-2">
                    </div>

                    <div class="flex justify-end gap-2">
                        <a href="{{ route('guru.jurnal.index') }}"
                           class="px-4 py-2 border rounded">
                            Batal
                        </a>
                        <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded">
                            Update
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</x-app-layout>
