<?php

namespace Mjedari\Ticket;

class Ticket
{
    /**
     * Check if Ticket config file has been published and set.
     * @return bool
     */
    public function configNotPublished()
    {
        return is_null(config('ticket'));
    }
}
