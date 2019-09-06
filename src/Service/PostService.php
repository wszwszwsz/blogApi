<?php


namespace App\Service;


use App\Entity\Post;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use http\Env\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;


class PostService
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;
    private $user;

    public function __construct(EntityManagerInterface $entityManager, TokenStorageInterface $tokenStorage)
    {
        $this->entityManager = $entityManager;
        $this->user = $tokenStorage->getToken()->getUser();
    }

    public function addPost(string $title, string $content, User $user) {
        $post = new Post();
        $post->setTitle($title);
        $post->setContent($content);
        $post->setCreatedAt(new \DateTime());
        $post->setUser($user);

//        $user = new User();
//        $user->setName("Anonymous");
//        $post->setUser($user);

        $this->entityManager->persist($post);
//        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }

    public function editPost(String $title, String $content, Post $post)
    {
        $post->setTitle($title);
        $post->setContent($content);

        $this->entityManager->flush();
    }
}
