<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Language;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllLanguages extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::LANGUAGE;
    }
}
