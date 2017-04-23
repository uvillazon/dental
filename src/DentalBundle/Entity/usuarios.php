<?php

namespace DentalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity(repositoryClass="DentalBundle\Repository\usuariosRepository")
 */
class usuarios
{

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="idusuario", type="integer")
     */
    private $idusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50)
     */
    private $login;



    /**
     * Set idusuario
     *
     * @param integer $idusuario
     *
     * @return usuarios
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return int
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return usuarios
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }
}

