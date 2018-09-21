<?php
/**
 * Created by PhpStorm.
 * User: ssanchez
 * Date: 21/09/2018
 * Time: 14:24
 */

namespace App\Controller;


use App\Models\DatabaseOperations;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class RESTServices
 * @package App\Controller
 * @Route("/WS")
 */

class RESTServices extends AbstractController {
    /**
     * @Route("/generarTabla", methods={"GET"})
     */
    public function generarTabla(){
        $db = new DatabaseOperations($this->getDoctrine()->getManager(), $this->getUser());
        $mensajes = [];
        foreach ($db->getMensajes() as $key => $item){
            $mensajes[$key] = $item;
        }
        return new Response($mensajes);
    }

}