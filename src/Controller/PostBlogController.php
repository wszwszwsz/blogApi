<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\User;
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
    public function create(Request $request)
    {
        if ($request->request->get('title')) {
            $title = trim($request->request->get('title'));
            $content = trim($request->request->get('content'));

            $entityManager = $this->getDoctrine()->getManager();

            $post = new Post();
            $post->setTitle($title);
            $post->setContent($content);
            $post->setCreatedAt(new \DateTime());

            $user = new User();
            $user->setName("Anonymous");
            $post->setUser($user);

            $entityManager->persist($post);
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute("main");
        }

        return $this->render('post_blog/post_blog.html.twig', [
            'controller_name' => 'FrontController',
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
