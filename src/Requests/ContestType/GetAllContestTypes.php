<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ContestType;

use PokeApiSdk\Endpoints\Traits\ContestTypeEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllContestTypes extends GetAllRequest
{
    use ContestTypeEndpoint;
}
