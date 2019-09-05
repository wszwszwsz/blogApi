<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\EditPostType;
use App\Form\PostAddType;
use App\Service\EditPostService;
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
     * @var PostService
     */
    private $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * @Route("/add", name="post_write_blog")
     */
    public function create(Request $request)
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');
        if ($user = $this->getUser()) {
            $postAddForm = $this->createForm(PostAddType::class);
            $postAddForm->handleRequest($request);
            if ($postAddForm->isSubmitted() && $postAddForm->isValid()) {
                $title = $postAddForm->get('title')->getData();
                $content = $postAddForm->get('content')->getData();
                $this->postService->addPost($title, $content, $user);
                return $this->redirectToRoute("main");
            }

            return $this->render('post_blog/post_blog.html.twig', [
                'controller_name' => 'FrontController',
                'postAddForm' => $postAddForm->createView(),
            ]);
        }
        return $this->redirectToRoute("main");
    }

    /**
     * @Route("/edit/post/{id}", name="edit_post")
     */
    public function edit(Post $post, Request $request)
    {

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');
        $user = $this->getUser();
        if ($user && $post->getUser() == $user) {
            $EditPostType = $this->createForm(EditPostType::class);
            $EditPostType->handleRequest($request);
            $EditPostType->get('title')->setData($post->getTitle());
            $EditPostType->get('content')->setData($post->getContent());
            if ($EditPostType->isSubmitted() && $EditPostType->isValid()) {
                $title = $EditPostType->get('title')->getData();
                $content = $EditPostType->get('content')->getData();
                $this->postService->editPost($title, $content, $post);
                return $this->redirectToRoute("main");
            }

            return $this->render('edit_post/index.html.twig', [
                'controller_name' => 'FrontController',
                'EditPostType' => $EditPostType->createView(),
            ]);
        }
        return $this->redirectToRoute("main");
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
