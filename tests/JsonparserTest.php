<?php
/**
 * Tests for JsonParser
 */

use PHPUnit\Framework\TestCase;
use Jsonparser\Jsonparser;

class JsonparserTest extends TestCase {
    private Jsonparser $instance;

    protected function setUp(): void {
        $this->instance = new Jsonparser(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Jsonparser::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
