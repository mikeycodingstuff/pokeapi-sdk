<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Type;

use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleType extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return 'type';
    }
}
