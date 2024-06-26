<?php

namespace App\Models;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Items extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'nama_sprei',
        'harga_sprei',
        'catatan',
        'bahan_sprei',
        'ukuran_sprei', 
        'bahan_bantal',
        'jenis_bantal',
        'jumlah_bantal',
        'bahan_bedcover',
        'jenis_bedcover',
        'jumlah_bedcover',  
        'bahan_inner',
        'jenis_inner',
        'jumlah_inner', 
        'bahan_quilt',
        'jenis_quilt',
        'jumlah_quilt', 
        'jumlah_box',
        'jenis_karet'
    ];

    public function order(): BelongsTo
    {
        return $this->belongsTo(Orders::class, 'order_id', 'id');
    }

    public function scopeSelectedById($query, $id) {

        return $query->where('id', $id);

    }

    
}
