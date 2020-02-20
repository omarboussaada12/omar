<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Requetes
 *
 * @ORM\Table(name="requetes")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\RequetesRepository")
 */
class Requetes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idM", type="integer")
     */
    private $idM;

    /**
     * @var int
     *
     * @ORM\Column(name="idArticles", type="integer")
     */
    private $idArticles;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idM
     *
     * @param integer $idM
     *
     * @return Requetes
     */
    public function setIdM($idM)
    {
        $this->idM = $idM;

        return $this;
    }

    /**
     * Get idM
     *
     * @return int
     */
    public function getIdM()
    {
        return $this->idM;
    }

    /**
     * Set idArticles
     *
     * @param integer $idArticles
     *
     * @return Requetes
     */
    public function setIdArticles($idArticles)
    {
        $this->idArticles = $idArticles;

        return $this;
    }

    /**
     * Get idArticles
     *
     * @return int
     */
    public function getIdArticles()
    {
        return $this->idArticles;
    }
}

