<?php

namespace Application\Bundle\DefaultBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertTrue($crawler->filter('html:contains("Hello World!")')->count() > 0);
    }
}
