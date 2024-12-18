<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Version;

use PokeApiSdk\Endpoints\Traits\VersionEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleVersion extends GetSingleRequest
{
    use VersionEndpoint;
}
