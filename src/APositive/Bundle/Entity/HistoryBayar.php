<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="historybayar")
 */
class HistoryBayar{
    protected $id;
    
    protected $tanggal;
    
    protected $gambar;
    
    protected $tanggalNonAktif;
    
    protected $idMember;
    
    protected $idPaket;
}

