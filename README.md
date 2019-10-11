# `vendor:publish` for Lumen framework

This package contains a single command borrowed from the Laravel framework that enables you to use `php artisan vendor:publish` in your Lumen application.

[![Become a Patron](https://img.shields.io/badge/Become%20a-Patron-f96854.svg?style=for-the-badge)](https://www.patreon.com/laravelista)

## Overview

This package contains a copy of the class from [`Illuminate/Foundation/Console/VendorPublishCommand`](https://github.com/laravel/framework/blob/6.x/src/Illuminate/Foundation/Console/VendorPublishCommand.php).

**This repository now follows the Lumen framework versioning.** Use the appropriate version of this package for your Lumen application. _eg. Lumen ^5.5 -> LumenVendorPublish ^5.5. etc._

## Installation

```
composer require laravelista/lumen-vendor-publish=^6.0
```

## Usage

To be able to use it you have to add it to your `app/Console/Kernel.php` file:

```
protected $commands = [
    \Laravelista\LumenVendorPublish\VendorPublishCommand::class
];
```

## Laravelista Sponsors & Backers

I would like to extend my thanks to the following sponsors & backers for funding my open-source journey. If you are interested in becoming a sponsor or backer, please visit the Laravelista [Backers page](https://laravelista.hr/backers).

## Contributing

Thank you for considering contributing to LumenVendorPublish! The contribution guide can be found on the [Laravelista website](https://laravelista.hr/contributing).

## Code of Conduct

In order to ensure that the Laravelista community is welcoming to all, please review and abide by the [Code of Conduct](https://laravelista.hr/code-of-conduct).

## License

LumenVendorPublish is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).