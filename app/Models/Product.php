<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Supplier;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;

    function getSupplier() {

        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }

    // function getSupplierid() {

    //     return $this->belongsTo(Supplier::class);
    // }
}
