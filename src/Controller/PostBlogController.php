<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\User;
use App\Form\PostAddType;
use App\Service\PostService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class PostBlogController
 * @package App\Controller
 *
 * @Route("/post")
 */
class PostBlogController extends AbstractController
{


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

    /**
     * @Route("/{id}", name="post_blog")
     */
    public function postBlog()
    {
        return $this->render('post_blog/post_blog.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }
}
