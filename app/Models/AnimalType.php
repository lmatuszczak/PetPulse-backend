<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AnimalType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function animal(): HasMany
    {
        return $this->hasMany(Animal::class);
    }
}
