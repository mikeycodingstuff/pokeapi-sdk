<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\SuperContestEffect;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllSuperContestEffects extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::SUPER_CONTEST_EFFECT;
    }
}
