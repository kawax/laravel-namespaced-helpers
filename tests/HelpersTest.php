<?php

namespace Tests;

use function Revolution\Illuminate\Support\env;

class HelpersTest extends TestCase
{
    public function testEnv()
    {
        $this->assertSame('Laravel', env('APP_NAME'));
    }
}
