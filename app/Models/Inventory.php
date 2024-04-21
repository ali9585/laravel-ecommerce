<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'variant_id',
        'sku',
        'barcode',
        'onhand',
        'available',
        'commited',
        'un_damaged',
        'un_qa',
        'un_safety',
        'un_other'
    ];

    public function variant()
    {
        return $this->belongsTo(Variant::class);
    }
}
