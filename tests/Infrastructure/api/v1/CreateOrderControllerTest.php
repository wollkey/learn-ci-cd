<?php

declare(strict_types=1);

namespace App\Tests\Infrastructure\api\v1;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CreateOrderControllerTest extends WebTestCase
{
    public function testSuccessfulWorkflow(): void
    {
        $client = static::createClient();

        $client->request('POST', '/api/v1/request');

        $this->assertResponseIsSuccessful();
    }
}
