<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Generation;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllGenerations extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'generation';
    }
}
