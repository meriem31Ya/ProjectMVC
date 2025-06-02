<?php
use PHPUnit\Framework\TestCase;
use App\Models\Message;

class MessageTest extends TestCase {
    public function testGetMessage() {
        $msg = new Message("Test Message");
        $this->assertEquals("Test Message", $msg->get());
    }
}
