<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selesai extends Model
{
    use HasFactory;
    protected $table = 'tb_rekam_medis';
    protected $primaryKey = 'id_rekam';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'id_pasien',
        'keluhan',
        'diagnosa',
        'tanggal',
        'id_dokter',
        'status',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }

    public function resep()
    {
        return $this->hasMany(Resep::class, 'id_rekam');
    }
}
