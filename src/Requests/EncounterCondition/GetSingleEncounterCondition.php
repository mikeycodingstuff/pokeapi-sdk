<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EncounterCondition;

use PokeApiSdk\Endpoints\Traits\EncounterConditionEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleEncounterCondition extends GetSingleRequest
{
    use EncounterConditionEndpoint;
}
