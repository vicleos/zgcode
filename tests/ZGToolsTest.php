<?php
use Vicleos\ZGTools\ZGTools;

class NachoTest extends PHPUnit_Framework_TestCase {

	public function testZGToolsHasCheese()
	{
		$zgTools = new ZGTools;
		$this->assertTrue($zgTools->hasCheese());
	}
}