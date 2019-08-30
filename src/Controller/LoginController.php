<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{


    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $helper)
    {
        return $this->render('login/login.html.twig', [
            'error' => $helper->getLastAuthenticationError()
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     * @throws \Exception
     */
    public function logout() : void
    {
        throw new \Exception('This should never be reached!');
    }
//    /**
//     * @Route("/{id}", name="post_blog")
//     */
//    public function postBlog()
//    {
//        return $this->render('post_blog/post_blog.html.twig', [
//            'controller_name' => 'FrontController',
//        ]);
//    }
}
