<?php

namespace Yamanjamal\BlogPost\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Yamanjamal\BlogPost\BlogPost
 */
class BlogPost extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Yamanjamal\BlogPost\BlogPost::class;
    }
}
