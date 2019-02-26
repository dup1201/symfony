<?php

namespace IpepsWapi\DoctrineTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * table1
 *
 * @ORM\Table(name="table1")
 * @ORM\Entity(repositoryClass="IpepsWapi\DoctrineTestBundle\Repository\table1Repository")
 */
class table1
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @ORM\ManyToOne(targetEntity="table3", inversedBy="tableUne")
     * @ORM\ManyToMany(targetEntity="DoctrineTestBundle\Entity\table2")
     */

    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return table1
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}

