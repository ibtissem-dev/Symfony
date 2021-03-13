<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/blog/{id}", name="blog-details")
     */
    public function readBlog ($id) {
        return new Response ("affichage d'id : " . $id);
    }

    public function test1 () {
        return new Response ("Route with YAML File");
    }

    public function test2 () {
        return new Response ("Route with Php File");
    }

    /**
     * @Route("/api/blog", name="blog-details-api")
     */
    public function test3 () {
        return new Response ("API");
    }
}
