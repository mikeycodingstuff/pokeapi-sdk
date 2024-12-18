<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\VersionGroup;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleVersionGroup extends GetSingleRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::VERSION_GROUP;
    }
}
