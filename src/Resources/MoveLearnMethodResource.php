<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\MoveLearnMethod\GetAllMoveLearnMethods;
use PokeApiSdk\Requests\MoveLearnMethod\GetSingleMoveLearnMethod;

class MoveLearnMethodResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllMoveLearnMethods::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleMoveLearnMethod::class;
    }
}
