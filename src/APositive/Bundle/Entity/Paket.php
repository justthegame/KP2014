<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="paket")
 * @ORM\Entity(repositoryClass="Acme\StoreBundle\Entity\PaketRepository")
 */
class Paket{
    
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
     * @ORM\Column(type="integer")
     */
    protected $nominal;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $masaBerlaku;
    
    /**
    * @ORM\OneToMany(targetEntity="HistoryBayar", mappedBy="paket")
    */
    protected $historyBayar;

    public function __construct()
    {
        $this->historyBayar = new ArrayCollection();
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
     * @return Paket
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
     * Set nominal
     *
     * @param integer $nominal
     * @return Paket
     */
    public function setNominal($nominal)
    {
        $this->nominal = $nominal;

        return $this;
    }

    /**
     * Get nominal
     *
     * @return integer 
     */
    public function getNominal()
    {
        return $this->nominal;
    }

    /**
     * Set masaBerlaku
     *
     * @param \DateTime $masaBerlaku
     * @return Paket
     */
    public function setMasaBerlaku($masaBerlaku)
    {
        $this->masaBerlaku = $masaBerlaku;

        return $this;
    }

    /**
     * Get masaBerlaku
     *
     * @return \DateTime 
     */
    public function getMasaBerlaku()
    {
        return $this->masaBerlaku;
    }

    /**
     * Add historyBayar
     *
     * @param \APositive\Bundle\Entity\HistoryBayar $historyBayar
     * @return Paket
     */
    public function addHistoryBayar(\APositive\Bundle\Entity\HistoryBayar $historyBayar)
    {
        $this->historyBayar[] = $historyBayar;

        return $this;
    }

    /**
     * Remove historyBayar
     *
     * @param \APositive\Bundle\Entity\HistoryBayar $historyBayar
     */
    public function removeHistoryBayar(\APositive\Bundle\Entity\HistoryBayar $historyBayar)
    {
        $this->historyBayar->removeElement($historyBayar);
    }

    /**
     * Get historyBayar
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHistoryBayar()
    {
        return $this->historyBayar;
    }
}
