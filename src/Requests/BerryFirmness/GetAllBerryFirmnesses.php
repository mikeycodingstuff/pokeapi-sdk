<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\BerryFirmness;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAllBerryFirmnesses extends Request
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
        return '/berry-firmness';
    }

    protected function defaultQuery(): array
    {
        return [
            'limit' => $this->limit,
        ];
    }
}
