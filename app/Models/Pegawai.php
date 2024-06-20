<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pegawai',
        'NIK',
        'jenis_kelamin',
        'jabatan_id',
        'divisi_id',
        'tgl_masuk',
        'gaji',
        'alamat',
        'foto'
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id', 'id');
    }

    public function divisi()
    {
        return $this->belongsTo(Divisi::class, 'divisi_id', 'id');
    }
}
