<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Type;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllTypes extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'type';
    }
}
