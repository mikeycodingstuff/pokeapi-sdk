<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokemonColor;

use PokeApiSdk\Endpoints\Traits\PokemonColorEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllPokemonColors extends GetAllRequest
{
    use PokemonColorEndpoint;

    public function __construct(protected ?int $limit = 10000)
    {
        parent::__construct($limit);
    }
}
