<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetSinglePokemon extends Request
{
    /**
     * HTTP Method
     */
    protected Method $method = Method::GET;

    public function __construct(protected readonly int|string $identifier) {}

    /**
     * Resolve the endpoint
     */
    public function resolveEndpoint(): string
    {
        return "/pokemon/$this->identifier";
    }
}
