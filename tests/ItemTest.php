<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase
{
    public function testIfCanCreateAnItem():void
    {
        $item = new Item('shirt', 15, 1);

        $this->assertIsObject($item);
    }

    public function testIfCanAccessToName():void{
        $item = new Item('shirt', 15, 1);

        $result = $item->getName();

        $this->assertEquals('shirt', $result);
    }

    public function testIfCanAccessToPrice():void
    {
        $item = new Item('shirt', 15, 1);

        $result = $item->getPrice();

        $this->assertEquals(15, $result);
    }

    public function testIfCanAccessToQuantity():void
    {
        $item = new Item('shirt', 15, 1);

        $result = $item->getQuantity();

        $this->assertEquals(1, $result);

    }

}


?>