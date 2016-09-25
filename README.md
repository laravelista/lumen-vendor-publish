# `vendor:publish` for Lumen framework

[![Latest Stable Version](https://poser.pugx.org/laravelista/lumen-vendor-publish/v/stable)](https://packagist.org/packages/laravelista/lumen-vendor-publish) [![Total Downloads](https://poser.pugx.org/laravelista/lumen-vendor-publish/downloads)](https://packagist.org/packages/laravelista/lumen-vendor-publish) [![Latest Unstable Version](https://poser.pugx.org/laravelista/lumen-vendor-publish/v/unstable)](https://packagist.org/packages/laravelista/lumen-vendor-publish) [![License](https://poser.pugx.org/laravelista/lumen-vendor-publish/license)](https://packagist.org/packages/laravelista/lumen-vendor-publish)

This is mostly a copy from [`illuminate/foundation`](https://github.com/laravel/framework/blob/5.3/src/Illuminate/Foundation/Console/VendorPublishCommand.php).

This package contains a single command that enables you to publish a package config file to the config folder of your Lumen application.

## Installation

```
composer require laravelista/lumen-vendor-publish
```

## Usage

To be able to use it you have to add it to your `app/Console/Kernel.php` file:

```
protected $commands = [
    \Laravelista\LumenVendorPublish\VendorPublishCommand::class
];
```