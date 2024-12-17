<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Location;

use PokeApiSdk\Endpoints\Traits\LocationEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllLocations extends GetAllRequest
{
    use LocationEndpoint;
}
