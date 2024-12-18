<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\SuperContestEffect;

use PokeApiSdk\Endpoints\Traits\SuperContestEffectEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllSuperContestEffects extends GetAllRequest
{
    use SuperContestEffectEndpoint;
}
