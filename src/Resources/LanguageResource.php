<?php

declare(strict_types=1);

namespace PokeApiSdk\Resources;

use PokeApiSdk\Requests\Language\GetAllLanguages;
use PokeApiSdk\Requests\Language\GetSingleLanguage;

class LanguageResource extends BaseResource
{
    protected function getAllRequestClass(): string
    {
        return GetAllLanguages::class;
    }

    protected function getSingleRequestClass(): string
    {
        return GetSingleLanguage::class;
    }
}
