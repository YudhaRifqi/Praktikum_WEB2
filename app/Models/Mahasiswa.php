<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $guarded = ['id'];
    protected $fillable = [
        'jurusan', 'npm', 'nama_mahasiswa', 'tanggal_lahir', 'jenis_kelamin', 'alamat', 'hobby', 'foto', 'user_id'
    ];
    public $timestamps = false;
}
