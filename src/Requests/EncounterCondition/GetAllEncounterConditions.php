<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EncounterCondition;

use PokeApiSdk\Endpoints\Traits\EncounterConditionEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllEncounterConditions extends GetAllRequest
{
    use EncounterConditionEndpoint;
}
