<?php

namespace Lavrahq\Identity;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lavrahq\Identity\Skeleton\SkeletonClass
 */
class IdentityFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'identity';
    }
}
