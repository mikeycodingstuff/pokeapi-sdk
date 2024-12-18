<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Region;

use PokeApiSdk\Endpoints\Traits\RegionEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllRegions extends GetAllRequest
{
    use RegionEndpoint;
}
