<?php
/**
 * Created by PhpStorm.
 * User: ssanchez
 * Date: 20/09/2018
 * Time: 12:45
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route as ruta;
/**
 * @ruta("/main")
 */
class MainController extends AbstractController
{
    /**
     * @ruta("/", name="main")
     */
    public function main(){
        return $this->render("main/main.html.twig");
    }

}