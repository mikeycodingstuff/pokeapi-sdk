<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Stat;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleStat extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::STAT;
    }
}
