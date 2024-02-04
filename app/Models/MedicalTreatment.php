<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MedicalTreatment extends Model
{
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'animal_id',
        'visit_id',
    ];

    public function animal(): BelongsTo
    {
        return $this->belongsTo(Animal::class);
    }
    public function visit(): BelongsTo
    {
        return $this->belongsTo(Visit::class);
    }
}
