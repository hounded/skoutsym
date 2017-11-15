<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->redirectToRoute('fos_user_security_login');
    }

    /**
     * @Route("/image", name="image")
     */
    public function imageAction(Request $request)
    {
        $user = $this->getDoctrine()->getManager()->getRepository('AppBundle:User')->find(1);
        return $this->render('default/image.html.twig',array(
            'user'=>$user
        ));
    }
}
