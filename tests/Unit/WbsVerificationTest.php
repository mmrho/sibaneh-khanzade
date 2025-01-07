<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Classes\WbsVerification;

class WbsVerificationTest extends TestCase
{
    private $wbsVerification;

    protected function setUp(): void
    {
        parent::setUp();
        $this->wbsVerification = new WbsVerification();
    }

    public function testWbsVerificationClassExists()
    {
        $this->assertInstanceOf(WbsVerification::class, $this->wbsVerification);
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        unset($this->wbsVerification);
    }
}
