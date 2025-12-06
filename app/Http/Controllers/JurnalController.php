<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;

class JurnalController extends Controller
{
    public function index()
    {
        $jurnals = Jurnal::where('user_id', auth()->id())
            ->orderBy('tanggal', 'desc')
            ->paginate(10);

        return view('guru.jurnal.index', compact('jurnals'));
    }

    public function create()
    {
        return view('guru.jurnal.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'tanggal'       => 'required|date',
            'jam_mulai'     => 'required',
            'jam_selesai'   => 'nullable',
            'kelas'         => 'required|string|max:100',
            'mapel'         => 'required|string|max:100',
            'materi'        => 'required|string|max:255',
            'metode'        => 'nullable|string|max:255',
            'kehadiran'     => 'nullable|string',
            'catatan'       => 'nullable|string',
            'foto_kegiatan' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data['user_id'] = auth()->id();

        if ($request->hasFile('foto_kegiatan')) {
            $path = $request->file('foto_kegiatan')->store('jurnals', 'public');
            $data['foto_path'] = $path;
        }

        Jurnal::create($data);

        return redirect()->route('guru.jurnal.index')->with('success', 'Jurnal berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jurnal = Jurnal::where('user_id', auth()->id())->findOrFail($id);

        return view('guru.jurnal.edit', compact('jurnal'));
    }

    public function update(Request $request, $id)
    {
        $jurnal = Jurnal::where('user_id', auth()->id())->findOrFail($id);

        $data = $request->validate([
            'tanggal'       => 'required|date',
            'jam_mulai'     => 'required',
            'jam_selesai'   => 'nullable',
            'kelas'         => 'required|string|max:100',
            'mapel'         => 'required|string|max:100',
            'materi'        => 'required|string|max:255',
            'metode'        => 'nullable|string|max:255',
            'kehadiran'     => 'nullable|string',
            'catatan'       => 'nullable|string',
            'foto_kegiatan' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Jika upload foto baru
        if ($request->hasFile('foto_kegiatan')) {

            // hapus foto lama
            if ($jurnal->foto_path && file_exists(storage_path('app/public/' . $jurnal->foto_path))) {
                unlink(storage_path('app/public/' . $jurnal->foto_path));
            }

            // simpan foto baru
            $path = $request->file('foto_kegiatan')->store('jurnals', 'public');
            $data['foto_path'] = $path;
        }

        $jurnal->update($data);

        return redirect()->route('guru.jurnal.index')->with('success', 'Jurnal berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jurnal = Jurnal::where('user_id', auth()->id())->findOrFail($id);

        if ($jurnal->foto_path && file_exists(storage_path('app/public/' . $jurnal->foto_path))) {
            unlink(storage_path('app/public/' . $jurnal->foto_path));
        }

        $jurnal->delete();

        return redirect()->route('guru.jurnal.index')
            ->with('success', 'Jurnal berhasil dihapus.');
    }
}
