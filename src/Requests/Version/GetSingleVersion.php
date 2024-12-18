<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Version;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleVersion extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::VERSION;
    }
}
