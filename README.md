# LumenVendorPublish

[![Latest Stable Version](https://poser.pugx.org/basicit/lumen-vendor-publish/v/stable)](https://packagist.org/packages/basicit/lumen-vendor-publish) [![Total Downloads](https://poser.pugx.org/basicit/lumen-vendor-publish/downloads)](https://packagist.org/packages/basicit/lumen-vendor-publish) [![Latest Unstable Version](https://poser.pugx.org/basicit/lumen-vendor-publish/v/unstable)](https://packagist.org/packages/basicit/lumen-vendor-publish) [![License](https://poser.pugx.org/basicit/lumen-vendor-publish/license)](https://packagist.org/packages/basicit/lumen-vendor-publish)

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