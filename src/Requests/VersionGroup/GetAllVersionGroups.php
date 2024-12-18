<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\VersionGroup;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllVersionGroups extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::VERSION_GROUP;
    }
}
