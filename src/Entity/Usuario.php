<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuarioRepository")
 */
class Usuario implements UserInterface, \Serializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     *  @ORM\Column(type="text")
     */
    private $nick;
    /**
     *  @ORM\Column(type="text")
     */
    private $password;
    /**
     *  @ORM\Column(type="text", nullable=true)
     *
     */
    private $avatar;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Mensaje", mappedBy="receptor", orphanRemoval=true)
     */
    private $mensajes;


    public function __construct()
    {
        $this->mensajes = new ArrayCollection();
    }

    public function getId(): ? int
    {
        return $this->id;
    }

    /**
     * @return Collection|UsuarioMensaje[]
     */
    public function getMensajesUsuario(): Collection
    {
        return $this->mensajes;
    }

    /**
     * @return mixed
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * @param mixed $nick
     */
    public function setNick($nick): void
    {
        $this->nick = $nick;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param mixed $avatar
     */
    public function setAvatar($avatar): void
    {
        $this->avatar = $avatar;
    }

    /**
     * @return mixed
     */
    public function getMensajes()
    {
        return $this->mensajes;
    }

    /**
     * @param mixed $mensajes
     */
    public function setMensajes($mensajes): void
    {
        $this->mensajes = $mensajes;
    }

    public function getRoles()
    {
        return array('ROLE_ADMIN');
    }

    public function getSalt()
    {
        return null;
    }

    public function getUsername()
    {
        return $this->nick;
    }

    public function eraseCredentials()
    {
        return null;
    }

    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->nick,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }

    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->nick,
            $this->password,
            // see section on salt below
            // $this->salt
            ) = unserialize($serialized);
    }
}
