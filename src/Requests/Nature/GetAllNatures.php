<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Nature;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllNatures extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::NATURE;
    }
}
