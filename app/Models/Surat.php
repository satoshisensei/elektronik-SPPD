<?php

namespace App\Models;

use App\Models\Pegawai;
use App\Models\Perjalanan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Surat extends Model
{
    use HasFactory;

    protected $table = 'surats';
    protected $guarded = 'id';
    protected $fillable = [
        'pegawai_id',
        'perjalanan_id',
        'nomor',
        'uraian'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function perjalanan()
    {
        return $this->belongsTo(Perjalanan::class);
    }
}
