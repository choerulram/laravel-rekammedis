<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'tb_dokter';
    protected $primaryKey = 'id_dokter';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'jk',
        'spesialis',
    ];

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class, 'id_dokter');
    }
}
