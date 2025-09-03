<?php

namespace App\Models;
use app\Models\User;

use Illuminate\Database\Eloquent\Model;
use app\Models\Supplier;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;

    function getSupplier() {

        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // function getSupplierid() {

    //     return $this->belongsTo(Supplier::class);
    // }
}
