<?php

namespace CodeIgniter;

use CodeIgniter\Test\ControllerTester;
use CodeIgniter\Test\CIDatabaseTestCase;

class testBeranda extends CIDatabaseTestCase
{
    use ControllerTester;

    public function testShowCategories()
    {
        $result = $this->withURI('http://localhost:8080/beranda/request_news')
            ->controller(\App\Controllers\Beranda::class)
            ->execute('request_news');

        $this->assertTrue($result->isOK());
    }
}
