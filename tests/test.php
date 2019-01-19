<?php 

require_once __DIR__.'/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use HelloWorld\SayHello;

final class Test extends TestCase
{
	protected $sayyer;
    
    /** @test */
    public function hello()
    {
        SayHello::world();
    }
}

