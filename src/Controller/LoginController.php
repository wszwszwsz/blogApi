<?php

namespace App\Controller;

use App\Form\PostAddType;
use App\Service\PostService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{


    /**
     * @Route("/login", name="login")
     */
    public function index()
    {
        return $this->render('login/login.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    /**
     * @Route("/add", name="post_write_blog")
     */
    public function create(Request $request, PostService $postService)
    {
        $postAddForm = $this->createForm(PostAddType::class);
        $postAddForm->handleRequest($request);

        if ($postAddForm->isSubmitted() && $postAddForm->isValid()) {
            $title = $postAddForm->get('title')->getData();
            $content = $postAddForm->get('content')->getData();

            $postService->addPost($title, $content);

            return $this->redirectToRoute("main");
        }

        return $this->render('post_blog/post_blog.html.twig', [
            'controller_name' => 'FrontController',
            'postAddForm' => $postAddForm->createView(),
        ]);
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
