<?php
namespace Controller;

use Silicone\Route;
use Silicone\Controller;

class Index extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        
        return $this->render('index.twig');
    }
    
    
    
     /**
     * @Route("/pagina", name="pagina")
     */
    public function pagina()
    {
        
        return $this->render('pagina.twig');
    }
}