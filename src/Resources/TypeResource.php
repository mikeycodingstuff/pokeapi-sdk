<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Type\GetAllTypes;
use PokeApiSdk\Requests\Type\GetSingleType;

class TypeResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllTypes::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleType::class;
    }
}
