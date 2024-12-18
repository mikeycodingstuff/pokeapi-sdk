<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\VersionGroup;

use PokeApiSdk\Endpoints\Traits\VersionGroupEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleVersionGroup extends GetSingleRequest
{
    use VersionGroupEndpoint;
}
