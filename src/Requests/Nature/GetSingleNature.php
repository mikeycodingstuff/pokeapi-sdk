<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Nature;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleNature extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::NATURE;
    }
}
