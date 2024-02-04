<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Visit extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
        'animal_id',
        'user_id',
        'start_date',
        'end_date',
    ];

    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function recommendation(): HasMany
    {
        return $this->hasMany(Recommendation::class);
    }
    public function test(): HasMany
    {
        return $this->hasMany(Test::class);
    }
    public function medicalTreatment(): HasMany
    {
        return $this->hasMany(MedicalTreatment::class);
    }
}
