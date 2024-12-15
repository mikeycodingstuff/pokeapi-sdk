<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EggGroup;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllEggGroups extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'egg-group';
    }
}
