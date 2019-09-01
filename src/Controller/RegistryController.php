<?php

namespace App\Controller;

use App\Form\PostAddType;
use App\Service\PostService;
use Doctrine\ORM\Mapping\PostUpdate;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Form\UserRegisterType;
use App\Service\UserService;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistryController extends AbstractController
{
    /**
     * @Route("/registry", name="registry")
     * @param UserPasswordEncoderInterface $password_encoder
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function register(UserPasswordEncoderInterface $password_encoder, Request $request, UserService $UserService)
    {

        $UserRegistryForm = $this->createForm(UserRegisterType::class);
        $UserRegistryForm->handleRequest($request);

        if ($UserRegistryForm->isSubmitted() && $UserRegistryForm->isValid()) {
            $name = $UserRegistryForm->get('name')->getData();
            $last_name = $UserRegistryForm->get('last_name')->getData();
            $email = $UserRegistryForm->get('email')->getData();
            $password = $UserRegistryForm->get('password')->getData();
            $UserService->addUser($name, $last_name, $email, $password );
            return $this->redirectToRoute("main");
        }
        return $this->render('post_blog/post_blog.html.twig', [
            'controller_name' => 'FrontController',
            'postAddForm' => $UserRegistryForm->createView(),
        ]);
    }


}

//        $user = new User;
//        $form = $this->createForm(UserRegisterType::class, $user);
//        $form->handleRequest($request);
//        if ($form->isSubmitted() && $form->isValid())
//        {
//            $entityManager = $this->getDoctrine()->getManager();
//
//            $user->setName($request->request->get('user')['name']);
//            $user->setLastName($request->request->get('user')['last_name']);
//            $user->setEmail($request->request->get('user')['email']);
//            $password = $password_encoder->encodePassword($user, $request->request->get('user')['password']['first']);
//            $user->setPassword($password);
//            $user->setRoles(['ROLE_USER']);


