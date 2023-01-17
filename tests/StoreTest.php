<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Store;

class StoreTest extends TestCase
{
    public function testIncreaseANumber():void
    {
        $item = new Store();

        $result1 = $item->increase(0);
        $result2 = $item->increase(5);
        $result3 = $item->increase(10);

        $this->assertEquals(1, $result1);
        $this->assertEquals(6, $result2);
        $this->assertEquals(11, $result3);
    }

    public function testDecreaseANumber():void
    {
        $item = new Store();

        $result1 = $item->decrease(2);
        $result2 = $item->decrease(5);
        $result3 = $item->decrease(10);
        $result4 = $item->decrease(0);

        $this->assertEquals(1, $result1);
        $this->assertEquals(4, $result2);
        $this->assertEquals(9, $result3);
        $this->assertEquals(0, $result4);
    }

    public function testRatingByPrice():void
    {
        $item = new Store();

        $result1 = $item->rateByPrice(0);
        $result2 = $item->rateByPrice(50);
        $result3 = $item->rateByPrice(50.01);
        $result4 = $item->rateByPrice(100);
        $result5 = $item->rateByPrice(100.01);
        $result6 = $item->rateByPrice(101);

        $this->assertEquals('€', $result1);
        $this->assertEquals('€', $result2);
        $this->assertEquals('€€', $result3);
        $this->assertEquals('€€', $result4);
        $this->assertEquals('€€€', $result5);
        $this->assertEquals('€€€', $result6);

    }

    public function testIfCanPass3RandomsNumsIntoAnArray(): void
    {   
        $item = new Store();
        $numMax = 100;

        $result1 = $item->randomItem($numMax);

        $this->assertIsArray($result1);
        $this->assertCount(3, $result1);
        $this->assertIsInt($result1[0]);
        $this->assertLessThanOrEqual($numMax, $result1[0]);
        $this->assertLessThanOrEqual($numMax, $result1[1]);
        $this->assertLessThanOrEqual($numMax, $result1[2]);
    }

    public function testIfCanReturnAnArrayOfItemsThatCostIsNotMoreThanAValueGiven(): void
    {
        $item = new Store();
        $maxPrice = 50;
        $arr = [15,20,55];

        $result = $item->getItem($arr, $maxPrice);

        $this->assertIsArray($result);
        $this->assertEquals([15, 20], $result);
    }

}

?>