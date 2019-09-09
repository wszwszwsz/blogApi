<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\EditPostType;
use App\Form\PostAddType;
use App\Service\PostService;
use PhpParser\Node\Scalar\String_;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\StrictSessionHandler;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints as Assert;



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
            $editPostRequest = EditPostRequest::fromPost($post);
            $form = $this->createForm(EditPostType::class, $editPostRequest);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $this->postService->editPost(
                    $editPostRequest->title,
                    $editPostRequest->content,
                    $post
                );
                return $this->redirectToRoute("main");
            }
            return $this->render('edit_post/edit.html.twig', [
                'form' => $form->createView(),]);


        }
        return $this->redirectToRoute("main");
    }

    /**
     * @Route("/edit/post/delete/{id}", name="delete_post")
     */
    public function delete(Post $post){
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($post);
        $manager->flush();
        return $this->redirectToRoute('main');
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

class EditPostRequest
{

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min="5", max="100")
     * @var String
     */
    public $title;

    /**
     * @Assert\NotBlank()
     * @var String
     */
    public $content;

    public static function fromPost(Post $post): self
    {
        $editRequest = new self();
        $editRequest->title = $post->getTitle();
        $editRequest->content = $post->getContent();

        return $editRequest;
    }
}
