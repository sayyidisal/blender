<?php

namespace Tests\Unit;

use Tests\Concerns\CreatesApplication;
use Tests\Concerns\UsesInMemoryDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    use UsesInMemoryDatabase;

    public function setUp()
    {
        parent::setUp();

        $this->setUpDatabase();
    }
}
