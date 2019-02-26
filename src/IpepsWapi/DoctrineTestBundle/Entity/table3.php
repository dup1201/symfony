<?php

namespace IpepsWapi\DoctrineTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * table3
 *
 * @ORM\Table(name="table3")
 * @ORM\Entity(repositoryClass="IpepsWapi\DoctrineTestBundle\Repository\table3Repository")
 */
class table3
{
    /**
     * @ORM\Column(name="tableUne", type="object")
     * @ORM\OneToMany(targetEntity="table1", mappedBy="table3")
     */
    private $tableUne;

    /**
     * @return mixed
     */
    public function getTableUne()
    {
        return $this->tableUne;
    }

    /**
     * @param mixed $tableUne
     */
    public function setTableUne($tableUne)
    {
        $this->tableUne = $tableUne;
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var bool
     *
     * @ORM\Column(name="actif", type="boolean")
     */
    private $actif;


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
     * Set actif
     *
     * @param boolean $actif
     *
     * @return table3
     */
    public function setActif($actif)
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get actif
     *
     * @return bool
     */
    public function getActif()
    {
        return $this->actif;
    }
}

