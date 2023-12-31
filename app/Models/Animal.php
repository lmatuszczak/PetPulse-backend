<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Animal extends Model
{
    use HasFactory;

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

}
