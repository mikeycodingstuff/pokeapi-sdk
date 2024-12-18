<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Version;

use PokeApiSdk\Endpoints\Traits\VersionEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllVersions extends GetAllRequest
{
    use VersionEndpoint;
}
