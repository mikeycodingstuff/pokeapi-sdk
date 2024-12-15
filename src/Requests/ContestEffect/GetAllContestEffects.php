<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ContestEffect;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllContestEffects extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'contest-effect';
    }
}
