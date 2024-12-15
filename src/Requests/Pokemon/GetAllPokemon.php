<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Pokemon;

use PokeApiSdk\Requests\Base\GetAllRequest;

class GetAllPokemon extends GetAllRequest
{
    public function __construct(protected ?int $limit = 10000)
    {
        parent::__construct($limit);
    }

    protected function endpointName(): string
    {
        return 'pokemon';
    }
}
