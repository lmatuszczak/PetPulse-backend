<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Calendar extends Model
{
    public function user(): BelongsTo
    {
      return  $this->belongsTo(User::class);
    }

    public function animal(): BelongsTo
    {
     return   $this->belongsTo(Animal::class);
    }
}
