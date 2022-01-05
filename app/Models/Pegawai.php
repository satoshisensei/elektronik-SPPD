<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawais';
    protected $guarded = 'id';
    protected $fillable = [
        'pangkat_id',
        'jabatan_id',
        'nama',
        'nip'
    ];

    public function pangkat()
    {
        return $this->belongsTo(Pangkat::class);
    }

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
