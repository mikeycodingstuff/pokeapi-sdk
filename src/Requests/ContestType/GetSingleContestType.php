<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ContestType;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleContestType extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::CONTEST_TYPE;
    }
}
