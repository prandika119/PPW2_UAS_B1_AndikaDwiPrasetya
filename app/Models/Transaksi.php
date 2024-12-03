<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'transaksi';

    protected $fillable = [
        'tanggal_pembelian',
        'total_harga',
        'bayar',
        'kembalian',
    ];

    public function transaksidetail()
    {
        return $this->hasMany(TransaksiDetail::class, 'id_transaksi', 'id');
    }
}
