<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\ContestType;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllContestTypes extends GetAllRequest
{
    protected function endpointName(): string
    {
        return 'contest-type';
    }
}
