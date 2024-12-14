<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Pendaki extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pendaki';
    public $incrementing = true; 

    protected $table = 'pendaki';
    protected $fillable = [
        'id_pendakian',
        'nama',
        'email',
        'no_telp',
        'no_telp_darurat',
        'kewarganegaraan',
        'jenis_identitas',
        'no_identitas',
        'lampiran_identitas',
        'alamat'
    ];

    public function pendakian()
    {
        return $this->belongsTo(Pendakian::class, 'id_pendakian', 'id_pendakian');
    }
    
}
