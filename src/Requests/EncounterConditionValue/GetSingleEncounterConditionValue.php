<?php

declare(strict_types=1);

namespace PokeApiSdk\Requests\EncounterConditionValue;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetSingleEncounterConditionValue extends Request
{
    /**
     * HTTP Method
     */
    protected Method $method = Method::GET;

    public function __construct(protected readonly int|string $idOrName) {}

    /**
     * Resolve the endpoint
     */
    public function resolveEndpoint(): string
    {
        return "/encounter-condition-value/$this->idOrName";
    }
}
