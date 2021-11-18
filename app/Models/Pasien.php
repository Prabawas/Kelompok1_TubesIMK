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

   public function User() {
        return $this->belongsTo(User::class);       //relasi tabel post ke tabel user. satu postingan dimiliki oleh satu user
    }
}
