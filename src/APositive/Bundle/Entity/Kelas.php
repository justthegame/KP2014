<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="kelas")
 * @ORM\Entity(repositoryClass="Acme\StoreBundle\Entity\KelasRepository")
 */
class Kelas{
    
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
    * @ORM\OneToMany(targetEntity="AksesMateri", mappedBy="kelas")
    */
    protected $aksesMateri;
    
    /**
    * @ORM\OneToMany(targetEntity="Bab", mappedBy="kelas")
    */
    protected $bab;
    
    public function __construct()
    {
        $this->aksesMateri = new ArrayCollection();
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
     * @return Kelas
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
     * Add aksesMateri
     *
     * @param \APositive\Bundle\Entity\AksesMateri $aksesMateri
     * @return Kelas
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

    /**
     * Add bab
     *
     * @param \APositive\Bundle\Entity\Bab $bab
     * @return Kelas
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
