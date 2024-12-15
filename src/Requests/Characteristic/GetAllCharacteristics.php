<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Characteristic;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllCharacteristics extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'characteristic';
    }
}
