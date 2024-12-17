<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EncounterConditionValue;

use PokeApiSdk\Endpoints\Traits\EncounterConditionValueEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSingleEncounterConditionValue extends GetSingleRequest
{
    use EncounterConditionValueEndpoint;
}
