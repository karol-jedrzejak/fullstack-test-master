<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Prize extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function receiptRegistrations(): HasMany
    {
        return $this->hasMany(ReceiptRegistration::class);
    }
}
