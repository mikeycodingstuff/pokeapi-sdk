<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\SuperContestEffect;

use PokeApiSdk\Endpoints\Traits\SuperContestEffectEndpoint;
use PokeApiSdk\Requests\Base\GetByIdOnlySingleRequest;

class GetSingleSuperContestEffect extends GetByIdOnlySingleRequest
{
    use SuperContestEffectEndpoint;
}
