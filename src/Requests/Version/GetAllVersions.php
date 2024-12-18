<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Version;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllVersions extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::VERSION;
    }
}
