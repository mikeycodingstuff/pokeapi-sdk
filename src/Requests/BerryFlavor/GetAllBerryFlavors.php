<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\BerryFlavor;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAllBerryFlavors extends Request
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
        return '/berry-flavor';
    }

    protected function defaultQuery(): array
    {
        return [
            'limit' => $this->limit,
        ];
    }
}
