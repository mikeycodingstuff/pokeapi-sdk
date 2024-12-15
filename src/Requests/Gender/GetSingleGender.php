<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Gender;

use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleGender extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return 'gender';
    }
}
