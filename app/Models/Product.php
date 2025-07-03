<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Supplier;

class Product extends Model
{
    function getSupplier() {

        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }

    // function getSupplierid() {

    //     return $this->belongsTo(Supplier::class);
    // }
}
