<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EncounterConditionValue;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAllEncounterConditionValues extends Request
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
        return '/encounter-condition-value';
    }

    protected function defaultQuery(): array
    {
        return [
            'limit' => $this->limit,
        ];
    }
}
