<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\VersionGroup;

use PokeApiSdk\Endpoints\Traits\VersionGroupEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllVersionGroups extends GetAllRequest
{
    use VersionGroupEndpoint;
}
