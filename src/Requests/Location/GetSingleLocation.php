<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Location;

use PokeApiSdk\Endpoints\Traits\LocationEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleLocation extends GetSingleRequest
{
    use LocationEndpoint;
}
