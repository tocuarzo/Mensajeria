<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuarioMensajeRepository")
 */
class UsuarioMensaje
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario")
     * @ORM\JoinColumn(nullable=false)
     */
    private $remitente;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuario", inversedBy="mensajes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $receptor;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Mensaje")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mensaje;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRemitente(): ?Usuario
    {
        return $this->remitente;
    }

    public function setRemitente(?Usuario $remitente): self
    {
        $this->remitente = $remitente;

        return $this;
    }

    public function getReceptor(): ?Usuario
    {
        return $this->receptor;
    }

    public function setReceptor(?Usuario $receptor): self
    {
        $this->receptor = $receptor;

        return $this;
    }

    public function getMensaje(): ?Mensaje
    {
        return $this->mensaje;
    }

    public function setMensaje(?Mensaje $mensaje): self
    {
        $this->mensaje = $mensaje;

        return $this;
    }
}
