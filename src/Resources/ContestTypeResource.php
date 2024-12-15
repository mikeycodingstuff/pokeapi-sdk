<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\ContestType\GetAllContestTypes;
use PokeApiSdk\Requests\ContestType\GetSingleContestType;

class ContestTypeResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllContestTypes::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleContestType::class;
    }
}
