<?php

namespace Mjedari\Ticket;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mjedari\Ticket\Skeleton\SkeletonClass
 */
class TicketFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Ticket';
    }
}
