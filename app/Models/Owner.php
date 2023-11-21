<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Owner extends Model
{

    protected $fillable = [
        'first_name',
        'last_name',
        'company_name',
        'nip',
        'regon',
        'postal_code',
        'city',
        'street',
        'phone',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function animal(): hasOne
    {
        return $this->hasOne(Animal::class);
    }
}
