<?php

/**
 * Description of IndexController
 *
 * @author ssanchez
 */

namespace App\Controller;

use App\Entity\Usuario;
use App\Models\DatabaseOperations;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route as ruta;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class IndexController extends AbstractController {
    /**
     * @ruta("/", name="index")
     */
    public function index(AuthenticationUtils $authenticationUtils){
        return $this->render("index/index.html.twig", array(
            "error" => $authenticationUtils->getLastAuthenticationError(),
            "last_username" => $authenticationUtils->getLastUsername()
        ));
    }
    /**
     * @ruta("/newuser", name="newuser")
     */
    public function newUser(Request $request, UserPasswordEncoderInterface $encoder){
        $bd = new DatabaseOperations($this->getDoctrine()->getManager());
        $bd->newUser(new Usuario(), $request, $encoder);
        if ($request->getMethod() === "POST"){
            return new Response("Usuario creado con exito");
        } else {
            return new Response("Error 400: BAD REQUEST MODERFAKER", Response::HTTP_BAD_REQUEST);
        }
    }
}
