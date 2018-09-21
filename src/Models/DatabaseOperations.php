<?php
/**
 * Created by PhpStorm.
 * User: ssanchez
 * Date: 21/09/2018
 * Time: 9:57
 */

namespace App\Models;


use App\Entity\Usuario;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class DatabaseOperations {
    private $em;

    public function __construct(EntityManager $manager){
        $this->em = $manager;
    }
    public function newUser (Usuario $usuario, Request $request, UserPasswordEncoderInterface $encoder = null) {
        $usuario->setNick($request->request->get("nick"));
        if ($encoder === null){ //si no se pasa el codificador de password como argumento, se mete en la bbdd en texto plano
            $usuario->setPassword($request->request->get("password"));
        } else {
            $plainPassword = $request->request->get("password");
            $encoded = $encoder->encodePassword($usuario, $plainPassword);
            $usuario->setPassword($encoded);
        }
        $this->em->persist($usuario);
        $this->em->flush();
    }
}