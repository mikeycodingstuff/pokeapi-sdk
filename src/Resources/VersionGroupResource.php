<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\VersionGroup\GetAllVersionGroups;
use PokeApiSdk\Requests\VersionGroup\GetSingleVersionGroup;

class VersionGroupResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllVersionGroups::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleVersionGroup::class;
    }
}
