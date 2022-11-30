<?php

namespace App\DataFixtures;

use App\Entity\Post;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher){
        $this->hasher = $hasher;
    }


    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        //mise en place des faker 
        $generator = Factory::create('fr_FR');
        for ($i = 0; $i < 39; $i++) {
            $post = new Post();
            $post->setSlug($generator->sentence($nbWords = 6, $variableNbWords = true));
            $post->setTitle($generator->sentence($nbWords = 6, $variableNbWords = true));
            $post->setExcerpt($generator->sentence($nbWords = 6, $variableNbWords = true));
            $post->setContent($generator->sentence($nbWords = 6, $variableNbWords = true));
            $manager->persist($post);
        }


        // eciter la suppression des user dans la bdd
        $user = new User();
        $user->setUsername('admin');
        $password=$this->hasher->hashPassword($user, 'admin');
        $user->setPassword($password);
        $user->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);


        //Création de deux posts
        $post = new Post();
        $post->setSlug("post-1");
        $post->setTitle(("Message de début"));
        $post->setExcerpt("Bonjour");
        $post->setContent("Bonjour tout le monde");
        $manager->persist($post);

        $post = new Post();
        $post->setSlug("post-2");
        $post->setTitle(("Message de fin"));
        $post->setExcerpt("Au revoir");
        $post->setContent("Au revoir à tous");
        $manager->persist($post);

        //push dans la bdd
        $manager->flush();
    }
}
