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

    /**
     * @return mixed
     */
    public function getRemitente()
    {
        return $this->remitente;
    }

    /**
     * @param mixed $remitente
     */
    public function setRemitente($remitente): void
    {
        $this->remitente = $remitente;
    }

    /**
     * @return mixed
     */
    public function getReceptor()
    {
        return $this->receptor;
    }

    /**
     * @param mixed $receptor
     */
    public function setReceptor($receptor): void
    {
        $this->receptor = $receptor;
    }
}
