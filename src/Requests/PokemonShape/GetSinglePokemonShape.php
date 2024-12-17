<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokemonShape;

use PokeApiSdk\Endpoints\Traits\PokemonShapeEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSinglePokemonShape extends GetSingleRequest
{
    use PokemonShapeEndpoint;
}
