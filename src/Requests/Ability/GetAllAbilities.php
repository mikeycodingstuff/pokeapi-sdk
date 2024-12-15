<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Ability;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllAbilities extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'ability';
    }
}
