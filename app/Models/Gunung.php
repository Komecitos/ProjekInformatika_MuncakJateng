<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gunung extends Model
{
    use HasFactory;

    // Nama tabel dalam database
    protected $table = 'gunung';

    // Primary key tabel
    protected $primaryKey = 'id_via';

    // Jika tidak menggunakan timestamps, tambahkan properti ini
    public $timestamps = true;

    // Daftar kolom yang dapat diisi (mass-assignable)
    protected $fillable = [
        'nama_gunung',
        'alamat',
        'ketinggian',
        'nama_via',
        'harga_tiket',
        'created_at',
        'updated_at',
        'kondisi',
    ];

    public function pendakian()
    {
        return $this->hasMany(Pendakian::class, 'id_via'); // Kolom 'id_via' di Pendakian menghubungkan dengan Gunung
    }
    
}
