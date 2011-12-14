<?php

namespace Senda\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        
        $em = $this->get('doctrine')->getEntityManager();

        $clientes = $em->getRepository('PortalBundle:Cliente')->findTodosAlfabeticamente();
        
        return $this->render('PortalBundle:Default:index.html.twig', array(
                               'clientes'      => $clientes                                
                             )            
                            );
    }
   public function estaticaAction($pagina)
    {
        $format = $this->get('request')->getRequestFormat();

        return $this->render(sprintf('PortalBundle:Estaticas:%s.'.$format.'.twig', $pagina));
    }
    
    


}
