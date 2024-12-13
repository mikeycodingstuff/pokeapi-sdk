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

    public function __construct(protected readonly int $limit = 10000) {}

    /**
     * Resolve the endpoint
     */
    public function resolveEndpoint(): string
    {
        return '/pokemon';
    }

    protected function defaultQuery(): array
    {
        return [
            'limit' => $this->limit,
        ];
    }
}
