<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Berry;

use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleBerry extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return 'berry';
    }
}
