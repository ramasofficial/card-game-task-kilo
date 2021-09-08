<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Deck;
use Illuminate\Http\Response;

class DeckController
{
    public function index(): Response
    {
        return new Response(
            Deck::all(),
        );
    }
}
