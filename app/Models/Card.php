<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Card extends Model
{
    public function physicalCards(): HasMany
    {
        return $this->hasMany(PhysicalCard::class);
    }
}
