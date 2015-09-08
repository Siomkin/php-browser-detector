<?php

namespace Browser\Tests;

use Browser\Browser;
use Browser\Os;
use PHPUnit_Framework_TestCase;

class OsDetectorTest extends PHPUnit_Framework_TestCase
{
    public function testDetect()
    {
        $userAgentStringCollection = UserAgentStringMapper::map();
        foreach ($userAgentStringCollection as $userAgentString) {
            $os = new Os($userAgentString->getString());
            $this->assertEquals($userAgentString->getOs(), $os->getName());
            $this->assertEquals($userAgentString->getosVersion(), $os->getVersion());
        }
    }
}
