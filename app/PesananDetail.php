<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    //
    public function pesanan()
    {
        $this->belongsTo(Pesanan::class, 'pesanan_id', 'id');
    }
    public function product()
    {
        $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
