<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pelajaran")
 */
class Pelajaran{
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nama;
    
    /**
    * @ORM\OneToMany(targetEntity="Bab", mappedBy="pelajaran")
    */
    protected $bab;
    
    public function __construct()
    {
        $this->bab = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nama
     *
     * @param string $nama
     * @return Pelajaran
     */
    public function setNama($nama)
    {
        $this->nama = $nama;

        return $this;
    }

    /**
     * Get nama
     *
     * @return string 
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * Add bab
     *
     * @param \APositive\Bundle\Entity\Bab $bab
     * @return Pelajaran
     */
    public function addBab(\APositive\Bundle\Entity\Bab $bab)
    {
        $this->bab[] = $bab;

        return $this;
    }

    /**
     * Remove bab
     *
     * @param \APositive\Bundle\Entity\Bab $bab
     */
    public function removeBab(\APositive\Bundle\Entity\Bab $bab)
    {
        $this->bab->removeElement($bab);
    }

    /**
     * Get bab
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getBab()
    {
        return $this->bab;
    }
}
