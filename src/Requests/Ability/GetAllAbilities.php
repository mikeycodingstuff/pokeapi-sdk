<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Ability;

use PokeApiSdk\Endpoints\Traits\AbilityEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllAbilities extends GetAllRequest
{
    use AbilityEndpoint;
}
