# Laravel Service Repository Pattern

[![Latest Version on Packagist](https://img.shields.io/packagist/v/gaurang-commits/laravel-service-repository.svg?style=flat-square)](https://packagist.org/packages/gaurang-commits/laravel-service-repository)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/gaurang-commits/laravel-service-repository-package/run-tests?label=tests)](https://github.com/gaurang-commits/laravel-service-repository-package/actions/workflows/run-tests.yml?query=branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/gaurang-commits/laravel-service-repository-package/Check%20&%20fix%20styling?label=code%20style)](https://github.com/gaurang-commits/laravel-service-repository-package/actions/workflows/php-cs-fixer.yml?query=branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/gaurang-commits/laravel-service-repository.svg?style=flat-square)](https://packagist.org/packages/gaurang-commits/laravel-service-repository)

## Installation

You can install the package via composer:

```bash
composer require gaurang-commits/laravel-service-repository
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="service-repository-config"
```

This is the contents of the published config file:

```php
return [
    'NAMESPACE' => [
        'MODELS' => 'App\\Models',
        'SERVICES' => 'App\\Services',
        'REPOSITORIES' => 'App\\Repositories',
    ],
];
```

## Usage

```bash
php artisan make:service User
```
```bash
php artisan make:repository User
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Gaurang Sharma](https://github.com/gaurang-commits)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
