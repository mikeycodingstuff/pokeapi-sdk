<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EncounterMethod;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAllEncounterMethods extends Request
{
    /**
     * HTTP Method
     */
    protected Method $method = Method::GET;

    public function __construct(protected readonly ?int $limit = 100) {}

    /**
     * Resolve the endpoint
     */
    public function resolveEndpoint(): string
    {
        return '/encounter-method';
    }

    protected function defaultQuery(): array
    {
        return [
            'limit' => $this->limit,
        ];
    }
}
