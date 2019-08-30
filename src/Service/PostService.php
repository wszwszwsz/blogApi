<?php


namespace App\Service;


use App\Entity\Post;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use http\Env\Request;

class PostService
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function addPost(string $title, string $content) {
        $post = new Post();
        $post->setTitle($title);
        $post->setContent($content);
        $post->setCreatedAt(new \DateTime());

        $user = new User();
        $user->setName("Anonymous");
        $post->setUser($user);

        $this->entityManager->persist($post);
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }
}
