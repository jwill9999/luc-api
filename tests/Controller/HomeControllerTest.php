<?php

namespace App\Tests\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    /**
     * @covers /\App\Controller\HomeController::index
     */
    public function testShowPost()
    {
        $client = static::createClient();
        dump($client);

        $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }
}
