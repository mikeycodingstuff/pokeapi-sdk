<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait GenderEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::GENDER;
    }
}
