<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="aksesmateri")
 */
class AksesMateri{
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
    * @ORM\ManyToOne(targetEntity="Karyawan", inversedBy="aksesMateri")
    * @ORM\JoinColumn(name="idKaryawan", referencedColumnName="id")
    */
    protected $idKaryawan;
    
    /**
    * @ORM\ManyToOne(targetEntity="Pelajaran", inversedBy="aksesMateri")
    * @ORM\JoinColumn(name="idPelajaran", referencedColumnName="id")
    */
    protected $idPelajaran;
    
    /**
    * @ORM\ManyToOne(targetEntity="Kelas", inversedBy="aksesMateri")
    * @ORM\JoinColumn(name="idKelas", referencedColumnName="id")
    */
    protected $idKelas;
    

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
     * Set idKaryawan
     *
     * @param \APositive\Bundle\Entity\Karyawan $idKaryawan
     * @return AksesMateri
     */
    public function setIdKaryawan(\APositive\Bundle\Entity\Karyawan $idKaryawan = null)
    {
        $this->idKaryawan = $idKaryawan;

        return $this;
    }

    /**
     * Get idKaryawan
     *
     * @return \APositive\Bundle\Entity\Karyawan 
     */
    public function getIdKaryawan()
    {
        return $this->idKaryawan;
    }

    /**
     * Set idPelajaran
     *
     * @param \APositive\Bundle\Entity\Pelajaran $idPelajaran
     * @return AksesMateri
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
     * Set idKelas
     *
     * @param \APositive\Bundle\Entity\Kelas $idKelas
     * @return AksesMateri
     */
    public function setIdKelas(\APositive\Bundle\Entity\Kelas $idKelas = null)
    {
        $this->idKelas = $idKelas;

        return $this;
    }

    /**
     * Get idKelas
     *
     * @return \APositive\Bundle\Entity\Kelas 
     */
    public function getIdKelas()
    {
        return $this->idKelas;
    }
}
