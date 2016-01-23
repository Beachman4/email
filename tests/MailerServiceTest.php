<?php

use App\Email\MailerService;
use Infuse\Test;

class MailerServiceTest extends PHPUnit_Framework_TestCase
{
    public function testService()
    {
        $this->assertInstanceOf('App\Email\Mailer', Test::$app['mailer']);

        $service = new MailerService(Test::$app);
        $this->assertInstanceOf('App\Email\Mailer', $service(Test::$app));
    }
}
