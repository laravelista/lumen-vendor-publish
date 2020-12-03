<?php

namespace Laravelista\LumenVendorPublish;

use Illuminate\Support\ServiceProvider;

class LumenVendorPublishServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->commands([
            VendorPublishCommand::class
        ]);
    }
}