<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait ContestEffectEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::CONTEST_EFFECT;
    }
}
