<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\Pokemon;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAllPokemon extends Request
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
        return '/pokemon';
    }
}
