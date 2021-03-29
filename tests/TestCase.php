<?php

namespace Mjedari\Ticket\Tests;

use Illuminate\Database\Schema\Blueprint;
use Mjedari\Ticket\TicketServiceProvider;


class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            TicketServiceProvider::class,
        ];
    }

}
