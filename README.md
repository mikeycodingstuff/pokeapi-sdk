A simple PHP SDK for the [PokéAPI](https://pokeapi.co/) built using [Saloon](https://docs.saloon.dev/)

## Example Usage

```
$pokeApi = new PokeApi;

$pokemon = $pokeApi->pokemon()->all(limit: 10);
```
