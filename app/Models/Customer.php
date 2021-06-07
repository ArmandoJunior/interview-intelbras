<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'street',
        'number',
        'city',
        'energy_bill_amount',
        'state_id'
    ];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
