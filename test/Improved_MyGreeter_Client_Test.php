<?php

require_once 'MyGreeter\Client.php';

use PHPUnit\Framework\TestCase;

class Improved_MyGreeter_Client_Test extends TestCase
{
    public function setUp(): void
    {
        $this->greeter = new \MyGreeter\Client();
    }

    public function tearDown(): void {
        unset($this->greeter);
    }

    public function test_Instance()
    {
        $this->assertInstanceOf(
            MyGreeter\Client::class,
            $this->greeter
        );
    }

    /**
     * @dataProvider getGreetingProvider     
    */
    public function test_getGreeting($time, $greeting)
    {
        $this->assertEquals(
            $this->greeter->getGreeting($time),
            $greeting
        );
    }

    public function getGreetingProvider() {
        return [
            [strtotime('6am'), 'Good evening'],
            [strtotime('7am'), 'Good morning'],
            [strtotime('12pm'), 'Good morning'],
            [strtotime('1pm'), 'Good afternoon'],
            [strtotime('6pm'), 'Good afternoon'],
            [strtotime('7pm'), 'Good evening'],
        ];
    }

}
