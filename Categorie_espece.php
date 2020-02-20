<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie_espece
 *
 * @ORM\Table(name="Categorie_espece")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\Categorie_especeRepository")
 */
class Categorie_espece
{
    /**
     * @var int
     *
     * @ORM\Column(name="idC", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idC;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string",length=255)
     */
    private $nom;

    /**
     * @return int
     */
    public function getIdC()
    {
        return $this->idC;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }



}

