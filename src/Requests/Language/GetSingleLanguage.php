<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Language;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleLanguage extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::LANGUAGE;
    }
}
