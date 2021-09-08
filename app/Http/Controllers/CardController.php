<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Response;

class CardController
{
    public function index(): Response
    {
        return new Response(
            Card::all(),
        );
    }
}
