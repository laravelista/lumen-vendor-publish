# LumenVendorPublish

This is mostly a copy from [`illuminate/foundation`](https://github.com/laravel/framework/blob/5.1/src/Illuminate/Foundation/Console/VendorPublishCommand.php).

This package contains a single command that enables you to publish a package config to the config folder.

## Installation

```
composer require basicit/lumen-vendor-publish
```

## Usage

To be able to use it you have to add it to your `app/Console/Kernel.php` file:

```
protected $commands = [
    'BasicIT\LumenVendorPublish\VendorPublishCommand'
];
```