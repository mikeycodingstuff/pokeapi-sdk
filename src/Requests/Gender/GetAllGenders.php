<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Gender;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllGenders extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::GENDER;
    }
}
