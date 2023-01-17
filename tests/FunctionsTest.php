<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Functions;


class FunctionsTest extends TestCase
{
    public function testSum(): void
    {
        $sum = new Functions();

        $result = $sum->sum(4,5);

        $this->assertEquals(9, $result);
    }

    public function testsIfAStringCanReverseItsCharacters()
    {   
        $reversedString = new Functions();

        $result = $reversedString->reverse('hola mundo');

        $this->assertEquals('odnum aloh', $result); 

    }

    public function testIfAStringCanChangeToArrayByCharacter()
    {
        $array = new Functions();

        $result = $array->eachCharToArray('quiero aprender php');

        $this->assertEquals(['q','u','i','e','r','o','a','p','r','e','n','d','e','r','p','h','p'], $result);
    }

    public function testIfAStringCanChangeToArrayByWord()
    {
        $array = new Functions();

        $result1 = $array->eachWordToArray('hola');
        $result2 = $array->eachWordToArray('quiero aprender php');

        $this->assertEquals(['hola'], $result1);
        $this->assertEquals(['quiero', 'aprender', 'php'], $result2);

    }

    public function testIfAValueIsBooleanType()
    {
        $bool = new Functions();

        $result1 = $bool->isBoolean(true);
        $result2 = $bool->isBoolean('hola');
        $result3 = $bool->isBoolean(1);

        $this->assertTrue($result1);
        $this->assertFalse($result2);
        $this->assertFalse($result3);

    }

    public function testIfCanAddAnElementToArray()
    {
        $elem = new Functions();

        $result = $elem->addItem(['chocolate', 'helado', 'granizado']);

        $this->assertEquals(['chocolate', 'helado', 'granizado', 'pastelito'], $result);
    }

    public function testIfCanUpdateAnElementOfArray()
    {
        $elem = new Functions();

        $result1 = $elem->updateItem(['chocolate', 'helado', 'granizado', 'pastelito']);
        $result2 = $elem->updateItem(['granizado', 'chocolate', 'pastelito', 'helado']);
        $result3 = $elem->updateItem(['pastelito', 'chocolate', 'granizado', 'helado','tartaleta']);

        $this->assertEquals(['chocolate', 'helado', 'granizado', 'tarta'], $result1);
        $this->assertEquals(['granizado', 'chocolate', 'tarta', 'helado'], $result2);
        $this->assertEquals(['tarta', 'chocolate', 'granizado', 'helado','tartaleta'], $result3);
    }

    public function testIfCanDeleteAnElementOfArray()
    {
        $elem = new Functions();

        $result = $elem->deleteItem(['chocolate', 'helado', 'granizado', 'pastel']);

        $this->assertEquals(['0'=>'chocolate','1'=>'granizado', '2'=>'pastel'], $result);

    }

    public function testIfCanJoinTwoArrays()
    {
        $elem = new Functions();

        $result = $elem->joinMeals(['chocolate', 'helado', 'granizado', 'pastel'], ['césar', 'griega', 'caprese', 'fresca']);

        $this->assertEquals(['chocolate', 'helado', 'granizado', 'pastel','césar', 'griega', 'caprese', 'fresca'] , $result);
    }
}


?>