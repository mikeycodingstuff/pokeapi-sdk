<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Gender\GetAllGenders;
use PokeApiSdk\Requests\Gender\GetSingleGender;

class GenderResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllGenders::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleGender::class;
    }
}
