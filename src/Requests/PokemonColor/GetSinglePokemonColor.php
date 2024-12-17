<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokemonColor;

use PokeApiSdk\Endpoints\Traits\PokemonColorEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSinglePokemonColor extends GetSingleRequest
{
    use PokemonColorEndpoint;
}
