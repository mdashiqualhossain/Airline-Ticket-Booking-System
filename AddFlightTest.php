<?php

class AddFlightTest extends \PHPUnit\Framework\TestCase
{
    protected $user;
    public function testaddFlight()
    {
        $this->user = new \App\Models\AddFlight;
        $this->assertEquals( $this->user->addFlight("45345","2021-09-10","100","On Time","Dhaka","London","00:33:00"),"added successfully");

    }
}