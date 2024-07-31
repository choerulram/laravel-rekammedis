<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;
    protected $table = 'tb_resep';
    protected $primaryKey = 'id_resep';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'id_rekam',
        'id_obat',
        'resep_obat',
        'keterangan',
    ];

    public function rekam()
    {
        return $this->belongsTo(Pemeriksaan::class, 'id_rekam');
    }

    public function obat()
    {
        return $this->belongsTo(Obat::class, 'id_obat');
    }
}
