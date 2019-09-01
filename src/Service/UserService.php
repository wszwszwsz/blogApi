<?php


namespace App\Service;


use App\Entity\Post;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use http\Env\Request;

class UserService
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function addUser(string $name,string $last_name,string $email, string $password ) {

        $user = new User();
        $user->setName($name);
        $user->setLastName($last_name);
        $user->setEmail($email);
        $user->setPassword($password);

        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }
}
