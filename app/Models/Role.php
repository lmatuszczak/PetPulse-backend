<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Role extends Model
{
    protected $fillable = ['name'];

    public const IS_ADMIN = 1;
    public const IS_VET = 2;
    public const IS_USER = 3;

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
