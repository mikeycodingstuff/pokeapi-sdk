<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Berry;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllBerries extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::BERRY;
    }
}
