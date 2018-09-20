<?php

/**
 * Description of IndexController
 *
 * @author ssanchez
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route as ruta;

class IndexController extends AbstractController {
    /**
     * @ruta("/", name="index")
     */
    public function index(){
        return $this->render("index/index.html.twig");
    }
}
