<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EggGroup;

use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleEggGroup extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return 'egg-group';
    }
}
