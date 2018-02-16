# FurtherMobi PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/FurtherMobi-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/FurtherMobi-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/furthermobi-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/FurtherMobi-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/FurtherMobi-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/FurtherMobi-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/FurtherMobi-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require faustbrian/furthermobi-php-client
```

## Usage

```php
$client = new BrianFaust\FurtherMobi\Client();
$client->setConfig(['apiKey' => 'YOUR_API_KEY']);

$response = $client->api('Offers')->findAll(['limit' => 5]);

dump($response);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
