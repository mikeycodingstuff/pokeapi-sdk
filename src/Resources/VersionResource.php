<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Version\GetAllVersions;
use PokeApiSdk\Requests\Version\GetSingleVersion;

class VersionResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllVersions::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleVersion::class;
    }
}
