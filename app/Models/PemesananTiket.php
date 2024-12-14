<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemesananTiket extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pemesanan';
    protected $table = 'pemesanan_tiket';
    protected $fillable = ['id_gunung', 'id_pendakian', 'nomor_pemesanan'];

    public function pendakian()
    {
        return $this->belongsTo(Pendakian::class, 'id_pendakian', 'id_pendakian');
    }
}
