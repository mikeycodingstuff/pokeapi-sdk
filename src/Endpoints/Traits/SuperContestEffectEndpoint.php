<?php

declare(strict_types=1);

namespace PokeApiSdk\Endpoints\Traits;

use PokeApiSdk\Endpoints\ResourceEndpoints;

trait SuperContestEffectEndpoint
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::SUPER_CONTEST_EFFECT;
    }
}
