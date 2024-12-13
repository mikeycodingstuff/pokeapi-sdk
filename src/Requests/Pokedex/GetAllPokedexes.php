<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Pokedex;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAllPokedexes extends Request
{
    /**
     * HTTP Method
     */
    protected Method $method = Method::GET;

    /**
     * Resolve the endpoint
     */
    public function resolveEndpoint(): string
    {
        return '/pokedex';
    }
}
