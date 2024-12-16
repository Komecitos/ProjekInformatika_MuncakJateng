<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi plural form
    protected $table = 'pembayaran_tiket';

    // Tentukan atribut yang bisa diisi
    protected $fillable = [
        'order_id',
        'snap_token',
        'status',
        'amount',
        'payment_method',
        'response',
    ];

    // Tentukan tipe data untuk atribut tertentu, jika diperlukan
    public function pendakian()
    {
        return $this->belongsTo(Pendakian::class, 'id_pendakian');
    }

    protected $casts = [
        'amount' => 'decimal:2',
    ];
}
