<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Pendakian extends Model
{
    use HasFactory;

    protected $table = 'pendakian';
    protected $primaryKey = 'id_pendakian';
    public $incrementing = true;
    protected $fillable = ['id_via', 'tanggal', 'id_user'];

    public function pendaki()
    {
        return $this->hasMany(Pendaki::class, 'id_pendakian', 'id_pendakian');
    }

    public function pemesanan()
    {
        return $this->hasOne(PemesananTiket::class, 'id_pendakian', 'id_pendakian');
    }
}
