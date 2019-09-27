<?php
namespace Jywang\Say\Facades;

use Illuminate\Support\Facades\Facade;
class Say extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'say';
    }
}
