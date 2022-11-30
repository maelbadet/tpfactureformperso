<?php

namespace App\DataFixtures\Purger;

use Doctrine\Bundle\FixturesBundle\Purger\PurgerFactory;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Doctrine\Common\DataFixtures\Purger\PurgerInterface;
use Doctrine\ORM\EntityManagerInterface;

class CustomPurgerFactory implements PurgerFactory
{
    public function createForEntityManager(?string $emName, EntityManagerInterface $em, array $excluded = [], bool $purgeWithTruncate = false): PurgerInterface
    {
        $excluded[] = 'client';
        $excluded[] = 'produit';
        $excluded[] = 'commande';
        $excluded[] = 'detail';
        $excluded[] = 'user';
        

        return new ORMPurger($em, $excluded);
    }
}
