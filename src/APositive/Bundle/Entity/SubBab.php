<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="subbab")
 * @ORM\Entity(repositoryClass="Acme\StoreBundle\Entity\SubBabRepository")
 */
class SubBab{
    
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
     * @ORM\Column(type="string")
     */
    protected $link;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $deskripsi;
    
    /**
    * @ORM\ManyToOne(targetEntity="Bab", inversedBy="subbab")
    * @ORM\JoinColumn(name="idBab", referencedColumnName="id")
    */
    protected $idBab;

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
     * @return SubBab
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
     * Set link
     *
     * @param string $link
     * @return SubBab
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set deskripsi
     *
     * @param string $deskripsi
     * @return SubBab
     */
    public function setDeskripsi($deskripsi)
    {
        $this->deskripsi = $deskripsi;

        return $this;
    }

    /**
     * Get deskripsi
     *
     * @return string 
     */
    public function getDeskripsi()
    {
        return $this->deskripsi;
    }

    /**
     * Set idBab
     *
     * @param \APositive\Bundle\Entity\Bab $idBab
     * @return SubBab
     */
    public function setIdBab(\APositive\Bundle\Entity\Bab $idBab = null)
    {
        $this->idBab = $idBab;

        return $this;
    }

    /**
     * Get idBab
     *
     * @return \APositive\Bundle\Entity\Bab 
     */
    public function getIdBab()
    {
        return $this->idBab;
    }
}
