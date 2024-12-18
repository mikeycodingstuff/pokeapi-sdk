<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\MoveBattleStyle;

use PokeApiSdk\Endpoints\ResourceEndpoints;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllMoveBattleStyles extends GetAllRequest
{
    protected function endpointName(): string
    {
        return ResourceEndpoints::MOVE_BATTLE_STYLE;
    }
}
