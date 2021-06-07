<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
