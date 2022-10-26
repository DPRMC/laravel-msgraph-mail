<?php

namespace DPRMC\Tests\Unit;

use DPRMC\Tests\Unit\BaseTestCase;

class MailTest extends BaseTestCase {

    /**
     * @test
     */
    public function testDefault() {
        dd(config('mail'));
    }


}
