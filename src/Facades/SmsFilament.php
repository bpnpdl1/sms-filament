<?php

namespace Bpnpdl\SmsFilament\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bpnpdl\SmsFilament\SmsFilament
 */
class SmsFilament extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Bpnpdl\SmsFilament\SmsFilament::class;
    }
}
