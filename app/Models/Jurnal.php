<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'kelas',
        'mapel',
        'materi',
        'metode',
        'kehadiran',
        'catatan',
        'foto_path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
