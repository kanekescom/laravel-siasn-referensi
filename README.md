# Laravel SIASN REFERENSI

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kanekescom/laravel-siasn-referensi.svg?style=flat-square)](https://packagist.org/packages/kanekescom/laravel-siasn-referensi)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/kanekescom/laravel-siasn-referensi/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/kanekescom/laravel-siasn-referensi/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/kanekescom/laravel-siasn-referensi/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/kanekescom/laravel-siasn-referensi/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kanekescom/laravel-siasn-referensi.svg?style=flat-square)](https://packagist.org/packages/kanekescom/laravel-siasn-referensi)

This library is the abstraction of SIASN REFERENSI API for access from applications written with Laravel PHP Framework.

## Support us

Want to provide tangible support? Use the following platform to contribute to open-source software developers. Every contribution you make is a significant boost to continue building and enhancing technology that benefits everyone.

- Buy Me a Coffee https://s.id/hadibmac
- Patreon https://s.id/hadipatreon
- Saweria https://s.id/hadisaweria

We highly appreciate you sending us a few cups of coffee to accompany us while writing code. Super thanks.

## Installation

You can install the package via composer:

```bash
composer require kanekescom/laravel-siasn-referensi
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="siasn-referensi-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="siasn-referensi-config"
```

## Pull data

Pull referensi data from SIASN to database

```bash
php artisan siasn-referensi:pull
```

## Use database notifications

Before we start, make sure that the Laravel notifications table is added to your database:

```bash
# Laravel 11 and higher
php artisan make:notifications-table
```
 
```bash
# Laravel 10
php artisan notifications:table
```

And don't forget to run migrate

```bash
php artisan migrate
```

Next, make sure you have activated the dataBase notifications feature `filament.databaseNotifications.enabled` in the siasn-referensi.php config file.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Achmad Hadi Kurnia](https://github.com/kanekescom)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
