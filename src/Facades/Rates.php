<?php

namespace DvK\Laravel\Vat\Facades;

use Illuminate\Support\Facades\Facade;

class Rates extends Facade {

    protected static function getFacadeAccessor() { return 'vat-rates'; }

}