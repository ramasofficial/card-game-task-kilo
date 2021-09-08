<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property Deck $deck
 * @property int $deck_id
 * @property Card $card
 * @property int $card_id
 * @property bool $isDrawn
 */
class PhysicalCard extends Model
{
    public function deck(): BelongsTo
    {
        return $this->belongsTo(Deck::class);
    }

    public function card(): BelongsTo
    {
        return $this->belongsTo(Card::class);
    }
}
