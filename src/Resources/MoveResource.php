<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Move\GetAllMoves;
use PokeApiSdk\Requests\Move\GetSingleMove;

class MoveResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllMoves::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleMove::class;
    }
}
