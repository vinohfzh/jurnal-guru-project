<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Jurnal Mengajar
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6">

                @if ($errors->any())
                    <div class="mb-4 text-red-700 bg-red-100 p-3 rounded">
                        <ul class="ml-4 list-disc">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('guru.jurnal.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="block text-sm font-medium">Tanggal</label>
                        <input type="date" name="tanggal" class="mt-1 w-full border rounded p-2"
                               value="{{ old('tanggal', date('Y-m-d')) }}">
                    </div>

                    <div class="mb-3 flex gap-3">
                        <div class="flex-1">
                            <label class="block text-sm font-medium">Jam Mulai</label>
                            <input type="time" name="jam_mulai" class="mt-1 w-full border rounded p-2"
                                   value="{{ old('jam_mulai') }}">
                        </div>
                        <div class="flex-1">
                            <label class="block text-sm font-medium">Jam Selesai</label>
                            <input type="time" name="jam_selesai" class="mt-1 w-full border rounded p-2"
                                   value="{{ old('jam_selesai') }}">
                        </div>
                    </div>

                    <div class="mb-3 flex gap-3">
                        <div class="flex-1">
                            <label class="block text-sm font-medium">Kelas</label>
                            <input type="text" name="kelas" class="mt-1 w-full border rounded p-2"
                                   placeholder="X IPA 1" value="{{ old('kelas') }}">
                        </div>
                        <div class="flex-1">
                            <label class="block text-sm font-medium">Mapel</label>
                            <input type="text" name="mapel" class="mt-1 w-full border rounded p-2"
                                   placeholder="Matematika" value="{{ old('mapel') }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="block text-sm font-medium">Materi</label>
                        <input type="text" name="materi" class="mt-1 w-full border rounded p-2"
                               value="{{ old('materi') }}">
                    </div>

                    <div class="mb-3">
                        <label class="block text-sm font-medium">Metode</label>
                        <input type="text" name="metode" class="mt-1 w-full border rounded p-2"
                               value="{{ old('metode') }}" placeholder="Diskusi, ceramah, dll">
                    </div>

                    <div class="mb-3">
                        <label class="block text-sm font-medium">Kehadiran</label>
                        <textarea name="kehadiran" rows="2"
                                  class="mt-1 w-full border rounded p-2"
                                  placeholder="Hadir 30, izin 2, sakit 1">{{ old('kehadiran') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="block text-sm font-medium">Catatan</label>
                        <textarea name="catatan" rows="3"
                                  class="mt-1 w-full border rounded p-2"
                                  placeholder="Catatan/refleksi">{{ old('catatan') }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-sm font-medium">Foto Kegiatan (opsional)</label>
                        <input type="file" name="foto_kegiatan" class="mt-1 w-full border rounded p-2">
                    </div>

                    <div class="flex justify-end gap-2">
                        <a href="{{ route('guru.jurnal.index') }}"
                           class="px-4 py-2 border rounded">
                            Batal
                        </a>
                        <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded">
                            Simpan
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
