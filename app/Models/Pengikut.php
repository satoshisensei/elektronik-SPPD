<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengikut extends Model
{
    use HasFactory;

    protected $table = 'pengikuts';
    protected $guarded = 'id';
    protected $fillable = [
        'nama','umur','hubungan'
    ];
}
