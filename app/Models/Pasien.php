<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

      protected $guarded = [
        'id',
    ];

    //penggunaan variabel scope untuk pencarian di halaman pasien mealalui nama dan tulisan
    public function scopeFilter($query, array $filters) {      
        $query->when($filters['cari'] ?? false, function($query, $cari) {
            return $query->where(function($query) use ($cari) {
                $query->where('nama', 'like', '%' . $cari . '%');
            });
        });
    }

   public function User() {
        return $this->belongsTo(User::class);       //relasi tabel post ke tabel user. satu postingan dimiliki oleh satu user
    }
}
