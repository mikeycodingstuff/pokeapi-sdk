<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Ability;

use PokeApiSdk\Endpoints\Traits\AbilityEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleAbility extends GetSingleRequest
{
    use AbilityEndpoint;
}
