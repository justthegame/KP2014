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
     * @ManyToOne(targetEntity="Member")
     * @JoinColumn(name="id_member", referencedColumnName="id")
     **/
    protected $idMember;
    
    /**
     * @ManyToOne(targetEntity="Paket")
     * @JoinColumn(name="id_paket", referencedColumnName="id")
     **/
    protected $idPaket;
}

