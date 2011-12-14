<?php

namespace Senda\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PageController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('PortalBundle:Page:index.html.twig');
    }
   public function estaticaAction($pagina)
    {
        $format = $this->get('request')->getRequestFormat();

        return $this->render(sprintf('PortalBundle:Estaticas:%s.'.$format.'.twig', $pagina));
    }

}
