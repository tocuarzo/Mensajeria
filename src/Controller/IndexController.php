<?php

/**
 * Description of IndexController
 *
 * @author ssanchez
 */

namespace App\Controller;

use App\Entity\Usuario;
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
        return $this->render("index/index.html.twig", array("error" => $authenticationUtils->getLastAuthenticationError()));
    }
    /**
     * @ruta("/newuser", name="newuser")
     */
    public function newUser(Request $request, UserPasswordEncoderInterface $encoder){
        $usuario = new Usuario();
        if ($request->getMethod() === "POST"){
            $usuario->setNick($request->request->get("nick"));
            $plainPassword = $request->request->get("password");
            $encoded = $encoder->encodePassword($usuario, $plainPassword);
            $usuario->setPassword($encoded);
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();
            return new Response("Usuario creado con exito");
        } else {
            return new Response("Error 400: BAD REQUEST MODERFAKER", Response::HTTP_BAD_REQUEST);
        }
    }
}
