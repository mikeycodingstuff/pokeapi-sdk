<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\PokemonForm;

use PokeApiSdk\Endpoints\Traits\PokemonFormEndpoint;
use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllPokemonForms extends GetAllRequest
{
    use PokemonFormEndpoint;

    public function __construct(protected ?int $limit = 10000)
    {
        parent::__construct($limit);
    }
}
