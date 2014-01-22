<?php
namespace Controller;

use Silicone\Route;
use Silicone\Controller;



class Principal extends Controller
{
    /**
     * @Route("/principal", name="pindex")
     */
    public function pindex()
    {
      
        return $this->render('pagina.twig');
    }
    
    
     /**
     * @Route("/principal/pagina", name="ppagina")
     */
    public function ppagina()
    {
    //    return $this->render('pagina.twig');
    }
}