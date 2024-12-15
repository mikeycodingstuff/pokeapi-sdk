<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Characteristic;

use PokeApiSdk\Requests\Base\GetByIdOnlySingleRequest;

class GetSingleCharacteristic extends GetByIdOnlySingleRequest
{
    protected function endpointName(): string
    {
        return 'characteristic';
    }
}
