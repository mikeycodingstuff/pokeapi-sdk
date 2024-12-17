<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Pokemon;

use PokeApiSdk\Endpoints\Traits\PokemonEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSinglePokemon extends GetSingleRequest
{
    use PokemonEndpoint;
}
