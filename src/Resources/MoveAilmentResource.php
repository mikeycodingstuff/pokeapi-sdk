<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\MoveAilment\GetAllMoveAilments;
use PokeApiSdk\Requests\MoveAilment\GetSingleMoveAilment;

class MoveAilmentResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllMoveAilments::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleMoveAilment::class;
    }
}
