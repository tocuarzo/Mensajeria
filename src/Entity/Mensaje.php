<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MensajeRepository")
 */
class Mensaje
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
    private $asunto;

    /**
     *  @ORM\Column(type="text")
     */

    private $mensaje;

    /**
     *  @ORM\Column(type="date")
     */

    private $hora;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */

    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * @param mixed $asunto
     */

    public function setAsunto($asunto): void
    {
        $this->asunto = $asunto;
    }

    /**
     * @return mixed
     */

    public function getMensaje()
    {
        return $this->mensaje;
    }

    /**
     * @param mixed $mensaje
     */

    public function setMensaje($mensaje): void
    {
        $this->mensaje = $mensaje;
    }

    /**
     * @return mixed
     */

    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $hora
     */

    public function setHora($hora): void
    {
        $this->hora = $hora;
    }
}
