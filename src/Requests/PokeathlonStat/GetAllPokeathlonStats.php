<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokeathlonStat;

use PokeApiSdk\Endpoints\Traits\PokeathlonStatEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllPokeathlonStats extends GetAllRequest
{
    use PokeathlonStatEndpoint;
}
