<?php

namespace href\hrefBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use href\hrefBundle\Entity\User;
use href\hrefBundle\Repository;
use ArrayAccess;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        
        $repository = $this->getDoctrine()->getRepository('hrefBundle:Structure');
        $structure = $repository->findAll();
        
        return $this->render('hrefBundle:Default:index.html.twig',array('structure'=>$structure));
    }
    
    /**
     * @Route("/showAllUsers",name="showAllUsers")
     */
    public function showAllUsersAction()
            {
        
        $userManager=$this->get('fos_user.user_manager');
        $users=$userManager->findUsers();
        
        return $this->render('hrefBundle:Default:showAllUsers.html.twig',array('users'=>$users));
        
        
    }
    
}
