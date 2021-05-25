<?php

require_once 'MyGreeter\Client.php';

use PHPUnit\Framework\TestCase;

class MyGreeter_Client_Test extends TestCase
{
    public function setUp(): void
    {
        $this->greeter = new \MyGreeter\Client();
    }

    public function test_Instance()
    {
        $this->assertEquals(
            get_class($this->greeter),
            'MyGreeter\Client'
        );
    }

    public function test_getGreeting()
    {
        $this->assertTrue(
            strlen($this->greeter->getGreeting()) > 0
        );
    }
}
