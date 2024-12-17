<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Nature;

use PokeApiSdk\Endpoints\Traits\NatureEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleNature extends GetSingleRequest
{
    use NatureEndpoint;
}
