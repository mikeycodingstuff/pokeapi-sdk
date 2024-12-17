<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Pokedex;

use PokeApiSdk\Endpoints\Traits\PokedexEndpoint;
use PokeApiSdk\Requests\Base\GetSingleRequest;

class GetSinglePokedex extends GetSingleRequest
{
    use PokedexEndpoint;
}
