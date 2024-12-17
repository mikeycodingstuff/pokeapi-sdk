<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\MoveTarget\GetAllMoveTargets;
use PokeApiSdk\Requests\MoveTarget\GetSingleMoveTarget;

class MoveTargetResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllMoveTargets::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleMoveTarget::class;
    }
}
