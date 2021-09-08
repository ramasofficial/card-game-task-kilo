<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Card extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'effect',
        'attack',
        'defense',
        'color',
        'trigger',
    ];

    public function physicalCards(): HasMany
    {
        return $this->hasMany(PhysicalCard::class);
    }
}
