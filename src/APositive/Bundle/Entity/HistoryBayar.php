<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="historybayar")
 */
class HistoryBayar{
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $tanggal;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $gambar;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $tanggalNonAktif;
    
    /**
    * @ORM\ManyToOne(targetEntity="Member", inversedBy="historybayar")
    * @ORM\JoinColumn(name="idMember", referencedColumnName="id")
    */
    protected $idMember;
    
    /**
    * @ORM\ManyToOne(targetEntity="Paket", inversedBy="historybayar")
    * @ORM\JoinColumn(name="idPaket", referencedColumnName="id")
    */
    protected $idPaket;

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
     * Set tanggal
     *
     * @param \DateTime $tanggal
     * @return HistoryBayar
     */
    public function setTanggal($tanggal)
    {
        $this->tanggal = $tanggal;

        return $this;
    }

    /**
     * Get tanggal
     *
     * @return \DateTime 
     */
    public function getTanggal()
    {
        return $this->tanggal;
    }

    /**
     * Set gambar
     *
     * @param string $gambar
     * @return HistoryBayar
     */
    public function setGambar($gambar)
    {
        $this->gambar = $gambar;

        return $this;
    }

    /**
     * Get gambar
     *
     * @return string 
     */
    public function getGambar()
    {
        return $this->gambar;
    }

    /**
     * Set tanggalNonAktif
     *
     * @param \DateTime $tanggalNonAktif
     * @return HistoryBayar
     */
    public function setTanggalNonAktif($tanggalNonAktif)
    {
        $this->tanggalNonAktif = $tanggalNonAktif;

        return $this;
    }

    /**
     * Get tanggalNonAktif
     *
     * @return \DateTime 
     */
    public function getTanggalNonAktif()
    {
        return $this->tanggalNonAktif;
    }

    /**
     * Set idMember
     *
     * @param \APositive\Bundle\Entity\Member $idMember
     * @return HistoryBayar
     */
    public function setIdMember(\APositive\Bundle\Entity\Member $idMember = null)
    {
        $this->idMember = $idMember;

        return $this;
    }

    /**
     * Get idMember
     *
     * @return \APositive\Bundle\Entity\Member 
     */
    public function getIdMember()
    {
        return $this->idMember;
    }

    /**
     * Set idPaket
     *
     * @param \APositive\Bundle\Entity\Paket $idPaket
     * @return HistoryBayar
     */
    public function setIdPaket(\APositive\Bundle\Entity\Paket $idPaket = null)
    {
        $this->idPaket = $idPaket;

        return $this;
    }

    /**
     * Get idPaket
     *
     * @return \APositive\Bundle\Entity\Paket 
     */
    public function getIdPaket()
    {
        return $this->idPaket;
    }
}
