<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="karyawan")
 * @ORM\Entity(repositoryClass="Acme\StoreBundle\Entity\KaryawanRepository")
 */
class Karyawan {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $noKTP;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nama;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $alamat;
    
    /**
     * @ORM\Column(type="date")
     */
    protected $tglLahir;
    
    /**
     * @ORM\Column(type="string",length=20)
     */
    protected $jabatan;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $foto;
    
    /**
    * @ORM\OneToMany(targetEntity="AksesMateri", mappedBy="karyawan")
    */
    protected $aksesMateri;

    public function __construct()
    {
        $this->aksesMateri = new ArrayCollection();
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
     * Set noKTP
     *
     * @param string $noKTP
     * @return Karyawan
     */
    public function setNoKTP($noKTP)
    {
        $this->noKTP = $noKTP;

        return $this;
    }

    /**
     * Get noKTP
     *
     * @return string 
     */
    public function getNoKTP()
    {
        return $this->noKTP;
    }

    /**
     * Set nama
     *
     * @param string $nama
     * @return Karyawan
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
     * Set alamat
     *
     * @param string $alamat
     * @return Karyawan
     */
    public function setAlamat($alamat)
    {
        $this->alamat = $alamat;

        return $this;
    }

    /**
     * Get alamat
     *
     * @return string 
     */
    public function getAlamat()
    {
        return $this->alamat;
    }

    /**
     * Set tglLahir
     *
     * @param \DateTime $tglLahir
     * @return Karyawan
     */
    public function setTglLahir($tglLahir)
    {
        $this->tglLahir = $tglLahir;

        return $this;
    }

    /**
     * Get tglLahir
     *
     * @return \DateTime 
     */
    public function getTglLahir()
    {
        return $this->tglLahir;
    }

    /**
     * Set jabatan
     *
     * @param string $jabatan
     * @return Karyawan
     */
    public function setJabatan($jabatan)
    {
        $this->jabatan = $jabatan;

        return $this;
    }

    /**
     * Get jabatan
     *
     * @return string 
     */
    public function getJabatan()
    {
        return $this->jabatan;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Karyawan
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Add aksesMateri
     *
     * @param \APositive\Bundle\Entity\AksesMateri $aksesMateri
     * @return Karyawan
     */
    public function addAksesMateri(\APositive\Bundle\Entity\AksesMateri $aksesMateri)
    {
        $this->aksesMateri[] = $aksesMateri;

        return $this;
    }

    /**
     * Remove aksesMateri
     *
     * @param \APositive\Bundle\Entity\AksesMateri $aksesMateri
     */
    public function removeAksesMateri(\APositive\Bundle\Entity\AksesMateri $aksesMateri)
    {
        $this->aksesMateri->removeElement($aksesMateri);
    }

    /**
     * Get aksesMateri
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAksesMateri()
    {
        return $this->aksesMateri;
    }
}
