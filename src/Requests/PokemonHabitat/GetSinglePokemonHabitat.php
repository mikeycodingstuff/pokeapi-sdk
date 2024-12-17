<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokemonHabitat;

use PokeApiSdk\Endpoints\Traits\PokemonHabitatEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSinglePokemonHabitat extends GetSingleRequest
{
    use PokemonHabitatEndpoint;
}
