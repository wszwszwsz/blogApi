<?php


namespace App\Service;


use App\Entity\Post;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserService
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordEncoderInterface $password_encoder)
    {
        $this->entityManager = $entityManager;
        $this->password_encoder = $password_encoder;
    }


    public function addUser(string $name,string $last_name,string $email, string $password ) {

        $user = new User();
        $user->setName($name);
        $user->setLastName($last_name);
        $user->setEmail($email);
        $user->setPassword($this->password_encoder->encodePassword($user, $password));
        $user->setRoles(['ROLE_USER']);

        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }
}
