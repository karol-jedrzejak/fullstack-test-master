<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Store extends Model
{
    protected $fillable = [
        'name',
    ];

    public function receiptRegistrations(): HasMany
    {
        return $this->hasMany(ReceiptRegistration::class);
    }
}
