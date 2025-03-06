# Squidex PHP Library

The Squidex PHP library provides access to the Squidex API from JavaScript and TypeScript. Can be used in node and in the browser.

Requires **PHP 7** or higher.


## Status

[![Version Shield](https://img.shields.io/github/v/release/squidex/sdk-php?label=packagist)](https://packagist.org/packages/squidex/squidex)
![Packagist PHP Version](https://img.shields.io/packagist/dependency-v/squidex/squidex/php)

## Documentation

API reference documentation is available [here](https://cloud.squidex.io/api/docs).

## Installation

```bash
composer install @squidex/squidex
```

## Usage

```php
use Squidex\Client\Configuration;
use Squidex\Client\SquidexClient;

require_once __DIR__ . '/../vendor/autoload.php';

$config = new Configuration();
$config->setClientId('client-id');
$config->setClientSecret('client-secret');
$config->setAppName('my-app');
// $config->setUrl('https://your.squidex-deployment');

$client = new SquidexClient($config);

$response = $client->rules()->runRule("rule-id", true);

echo "Received response from Squidex!\n$response\n";
```

## Handling errors

When the API returns a non-success status code (4xx or 5xx response), a subclass of [ApiException](https://github.com/Squidex/sdk-php/blob/main/lib/ApiException.php) will be thrown:

```php
use Squidex\Client\ApiException;

try {
    $response = $client->rules()->runRule("rule-id", true);
} catch (err) {
  if (ApiException $) {
    echo $e->getMessage();
  }
}
```

## Generation Config

To generate the config you have to execute the following steps.

1. Run a Squidex version locally.
2. Run the `/api/docs` URL to get the OpenAPI spec.
3. Copy the OpenAPI spec to this repository.
4. Run the generator:

```
docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate -i /local/openapi.json -g php --template-dir  /local/templates -o /local/ -c /local/openapi-config.yml
```

### Releases

To create a new release, just create a tag. Packagist will use this tag to calculate the version.

## Contributing

While we value open-source contributions to this SDK, this library is generated programmatically. Additions made directly to this library would have to be moved over to our generation code, otherwise they would be overwritten upon the next generated release. Feel free to open a PR as a proof of concept, but know that we will not be able to merge it as-is. We suggest opening an issue first to discuss with us!

On the other hand, contributions to the README are always very welcome!
