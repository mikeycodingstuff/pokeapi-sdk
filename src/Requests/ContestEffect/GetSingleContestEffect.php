<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ContestEffect;

use PokeApiSdk\Endpoints\Traits\ContestEffectEndpoint;
use PokeApiSdk\Requests\Base\GetByIdOnlySingleRequest;

class GetSingleContestEffect extends GetByIdOnlySingleRequest
{
    use ContestEffectEndpoint;
}
