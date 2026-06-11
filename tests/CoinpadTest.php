<?php
/**
 * Tests for CoinPad
 */

use PHPUnit\Framework\TestCase;
use Coinpad\Coinpad;

class CoinpadTest extends TestCase {
    private Coinpad $instance;

    protected function setUp(): void {
        $this->instance = new Coinpad(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Coinpad::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
