<?php

namespace Lambdish\Phunctional\Tests;

use ArrayIterator;
use PHPUnit_Framework_TestCase;
use function Lambdish\Phunctional\get_key;

class GetKeyTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_should_return_the_value_of_the_item_of_an_existent_key()
    {
        $actual = ['one' => 1, 'two' => 2];

        $this->assertSame('two', get_key(2, $actual));
    }

    /** @test */
    public function it_should_return_null_if_the_key_does_not_exists_and_not_default_value_is_provided()
    {
        $actual = ['one' => 1, 'two' => 2];

        $this->assertNull(get_key(3, $actual));
    }

    /** @test */
    public function it_should_return_the_default_value_provided_if_the_key_does_not_exists()
    {
        $actual = ['one' => 1, 'two' => 2];

        $this->assertSame('three', get_key(3, $actual, 'three'));
    }
}