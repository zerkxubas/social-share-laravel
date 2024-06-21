<?php

namespace Zerkxubas\SocialShareLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class SocialShare extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'socialshare';
    }
}