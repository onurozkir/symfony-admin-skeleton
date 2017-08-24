<?php

namespace Tests\AppBundle\Controller;

use AppBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategoryControllerTest extends WebTestCase
{

    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/admin/category');

        $this->assertCount(
            Category::NUM_ITEMS,
            $crawler->filter('tr.category-bundle'),
            'Doğru sayıda element gösterilmektedir.'
        );
    }
}
