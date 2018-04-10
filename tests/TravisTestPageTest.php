<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 10/4/2561
 * Time: 20:58 น.
 */

namespace Suilven\TravisTestTest;


use SilverStripe\Dev\SapphireTest;
use Suilven\TravisTest\TravisTestPage;

class TravisTestPageTest extends SapphireTest
{
    public function test_double()
    {
        $page = new TravisTestPage();
        $this->assertEquals(10, $page->double(5));
    }
}
