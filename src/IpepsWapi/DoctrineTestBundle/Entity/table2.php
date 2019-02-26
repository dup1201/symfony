<?php

namespace IpepsWapi\DoctrineTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * table2
 *
 * @ORM\Table(name="table2")
 * @ORM\Entity(repositoryClass="IpepsWapi\DoctrineTestBundle\Repository\table2Repository")
 */
class table2
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\ManyToMany(targetEntity="table1")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

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
     * Get id
     *@ORM\Column(name="tableUne", type="object")
     * @return int
     */

    private $tableUne;
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return table2
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return table2
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }
}

