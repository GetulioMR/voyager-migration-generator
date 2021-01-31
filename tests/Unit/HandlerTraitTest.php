<?php

namespace Izar\Tests\Unit;

use Izar\Handlers\TableUpdatedEventHandler;
use Izar\Tests\TestCase;
use Izar\Utilities;

class HandlerTraitTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_return_the_last_similar_migration_hash()
    {
        $handler = \Mockery::mock(TableUpdatedEventHandler::class)->makePartial();

        $handler->shouldReceive([
           'listMigrations' => collect([app(Utilities::class)->generateFileName()])
        ]);

    }
}
