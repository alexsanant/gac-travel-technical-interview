<?php

namespace App\DataFixtures;

use App\Entity\Product;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);


        
        


        for ($i = 0; $i < 20; $i++) {
            $product = new Product();
            $category = new Category(1);
            $product->setCategory($category);
            $product->setName('product '.$i);
            $product->setStock(mt_rand(10, 100));
            $product->setCreatedAt(new \DateTimeImmutable(date("Y-m-d H:i:s", mt_rand(1262055681, 1562055681))));

            $manager->persist($product);
        }


        $manager->flush();
    }
}
