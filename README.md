# Laravel SIASN REFERENSI

[![Latest Version on Packagist](https://img.shields.io/packagist/v/kanekescom/laravel-siasn-referensi.svg?style=flat-square)](https://packagist.org/packages/kanekescom/laravel-siasn-referensi)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/kanekescom/laravel-siasn-referensi/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/kanekescom/laravel-siasn-referensi/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/kanekescom/laravel-siasn-referensi/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/kanekescom/laravel-siasn-referensi/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/kanekescom/laravel-siasn-referensi.svg?style=flat-square)](https://packagist.org/packages/kanekescom/laravel-siasn-referensi)

This library is the abstraction of SIASN REFERENSI for access from applications written with Laravel PHP Framework.

## Support us

Want to provide tangible support? Use the following platform to contribute to open-source software developers. Every contribution you make is a significant boost to continue building and enhancing technology that benefits everyone.

- Buy Me a Coffee https://s.id/hadibmac
- Patreon https://s.id/hadipatreon
- Saweria https://s.id/hadisaweria

We highly appreciate you sending us a few cups of coffee to accompany us while writing code. Super thanks.

## Use pro version

We also offer a professional version. We're excited for you to try it out, as it allows us to consistently deliver high-quality software. Don't hesitate to contact us at kanekescom@gmail.com for further information.

- Laravel SIASN Referensi Panel
- Laravel SIASN SIMPEG Panel
- SIMPEGDA App

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

Or, all installations can be completed with the install command:

```bash
php artisan siasn-referensi:install
```

## Usage

### Pull data

Pull referensi data from SIASN into the database

```bash
php artisan siasn-referensi:pull
```

### Get data

Get referensi data from API

```php
use Kanekescom\Siasn\Referensi\Referensi;

$limit = 10;
$offset = 0;

// get list of agama
Referensi::getAgama([
    'limit' => $limit,
    'offset' => $offset,
]);

// get list of alasan hukuman disiplin
Referensi::getAlasanHukumanDisiplin([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of asn jenis jabatan
Referensi::getAsnJenisJabatan([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of asn jenjang jabatan
Referensi::getAsnJenjangJabatan([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of eselon
Referensi::getEselon([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of golongan
Referensi::getGolongan([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of instansi
Referensi::getInstansi([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of jabatan fungsional
Referensi::getJabatanFungsional([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of jabatan fungsional umum
Referensi::getJabatanFungsionalUmum([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of jenis anak
Referensi::getJenisAnak([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of jenis diklat
Referensi::getJenisDiklat([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of jenis hukuman
Referensi::getJenisHukuman([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of jenis jabatan
Referensi::getJenisJabatan([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of kanreg
Referensi::getKanreg([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of kedudukan hukum
Referensi::getKedudukanHukum([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of kel jabatan
Referensi::getKelJabatan([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of latihan struktural
Referensi::getLatihanStruktural([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of lokasi
Referensi::getLokasi([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of pendidikan
Referensi::getPendidikan([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of ref dokumen
Referensi::getRefDokumen([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of ref jenjang jf
Referensi::getRefJenjangJf([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of satuan kerja
Referensi::getSatuanKerja([
    'limit' => $limit,
    'offset' => $offset,
])

// get list of tingkat pendidikan
Referensi::getTingkatPendidikan([
    'limit' => $limit,
    'offset' => $offset,
]);
```

## Testing

```bash
composer test
```

## Our other cool packages

Need a package for other BKN's Web Service APIs? Consider installing our packages for seamless integration.

### Referensi APIs

- Laravel SIASN Referensi API as API client.
  
```bash
composer require kanekescom/laravel-siasn-referensi-api
```

- Laravel SIASN Referensi as backend.
  
```bash
composer require kanekescom/laravel-siasn-referensi
```

### SIASNAPI-SIMPEG APIs

- Laravel SIASN SIMPEG API as API client.
  
```bash
composer require kanekescom/laravel-siasn-simpeg-api
```

- Laravel SIASN SIMPEG as backend.
  
```bash
composer require kanekescom/laravel-siasn-simpeg
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
