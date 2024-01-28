<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Animal extends Model
{


    protected $fillable = [
        'name',
        'microchip_number',
        'weight',
        'age',
        'color',
        'gender',
        'animal_type_id',
        'breed_id',
        'owner_id',

    ];

    public function breed(): BelongsTo
    {
        return $this->belongsTo(Breed::class);
    }

    public function owner(): belongsTo
    {
        return $this->belongsTo(Owner::class);
    }

    public function animalType(): BelongsTo
    {
        return $this->belongsTo(AnimalType::class);
    }

    public function calendar(): HasMany
    {
        return $this->hasMany(Calendar::class);
    }

    public function test(): HasMany
    {
        return $this->hasMany(Test::class);
    }

}
