<?php

namespace DivLooper\Bundle\SandBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
    Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use DivLooper\Bundle\SandBundle\Entity\Post;

/**
 * @Route("/post")
 */
class PostController extends Controller
{
    /**
     * @Route("/", methods={"GET"}, name="post_index")
     * @Template()
     */
    public function indexAction()
    {
        /** @var $em \Doctrine\ORM\EntityManager */
        $em = $this->getDoctrine()->getManager();

        return array(
            'posts' => $em
                ->getRepository('DivLooperSandBundle:Post')
                ->findAll()
        );
    }

    // ---------------------------------------------------------------------


    /**
     * @Route("/{id}", methods={"GET"}, name="post_view")
     * @Template()
     */
    public function viewAction(Post $post)
    {
        return array(
            'post' => $post
        );
    }

    // ---------------------------------------------------------------------
}
