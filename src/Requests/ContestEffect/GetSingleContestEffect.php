<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ContestEffect;

use PokeApiSdk\Requests\Base\GetByIdOnlySingleRequest;

class GetSingleContestEffect extends GetByIdOnlySingleRequest
{
    protected function endpointName(): string
    {
        return 'contest-effect';
    }
}
