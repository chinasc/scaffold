<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Scaffold\Scaffold;

class CodeTest extends TestCase
{
    public function testHello()
    {
        $scaffold = new Scaffold();

        echo $scaffold->index();
    }
}