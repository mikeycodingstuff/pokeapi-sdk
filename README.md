A simple PHP SDK for the [PokéAPI](https://pokeapi.co/) built using [Saloon](https://docs.saloon.dev/)

## Example Usage

```php
<?php

$pokeApi = new PokeApi;

$firstTenPokemon = $pokeApi->pokemon()->all(limit: 10);

$bestPokemon = $pokeapi->pokemon()->get(idOrName: 'metagross');
```
