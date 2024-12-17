<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokemonForm;

use PokeApiSdk\Endpoints\Traits\PokemonFormEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSinglePokemonForm extends GetSingleRequest
{
    use PokemonFormEndpoint;
}
