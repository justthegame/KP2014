<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bab")
 */
class Bab{
    
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
    * @ORM\ManyToOne(targetEntity="Pelajaran", inversedBy="bab")
    * @ORM\JoinColumn(name="idPelajaran", referencedColumnName="id")
    */
    protected $idPelajaran;
    
    /**
    * @ORM\ManyToOne(targetEntity="Kelas", inversedBy="bab")
    * @ORM\JoinColumn(name="idKelas", referencedColumnName="id")
    */
    protected $kelas;
    
    /**
    * @ORM\OneToMany(targetEntity="SubBab", mappedBy="bab")
    */
    protected $subBab;

    public function __construct()
    {
        $this->subBab = new ArrayCollection();
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
     * @return Bab
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
     * Set idPelajaran
     *
     * @param \APositive\Bundle\Entity\Pelajaran $idPelajaran
     * @return Bab
     */
    public function setIdPelajaran(\APositive\Bundle\Entity\Pelajaran $idPelajaran = null)
    {
        $this->idPelajaran = $idPelajaran;

        return $this;
    }

    /**
     * Get idPelajaran
     *
     * @return \APositive\Bundle\Entity\Pelajaran 
     */
    public function getIdPelajaran()
    {
        return $this->idPelajaran;
    }

    /**
     * Set kelas
     *
     * @param \APositive\Bundle\Entity\Kelas $kelas
     * @return Bab
     */
    public function setKelas(\APositive\Bundle\Entity\Kelas $kelas = null)
    {
        $this->kelas = $kelas;

        return $this;
    }

    /**
     * Get kelas
     *
     * @return \APositive\Bundle\Entity\Kelas 
     */
    public function getKelas()
    {
        return $this->kelas;
    }

    /**
     * Add subBab
     *
     * @param \APositive\Bundle\Entity\SubBab $subBab
     * @return Bab
     */
    public function addSubBab(\APositive\Bundle\Entity\SubBab $subBab)
    {
        $this->subBab[] = $subBab;

        return $this;
    }

    /**
     * Remove subBab
     *
     * @param \APositive\Bundle\Entity\SubBab $subBab
     */
    public function removeSubBab(\APositive\Bundle\Entity\SubBab $subBab)
    {
        $this->subBab->removeElement($subBab);
    }

    /**
     * Get subBab
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubBab()
    {
        return $this->subBab;
    }
}
