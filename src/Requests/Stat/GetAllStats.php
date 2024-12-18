<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Stat;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllStats extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::STAT;
    }
}
