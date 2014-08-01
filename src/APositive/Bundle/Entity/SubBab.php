<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="subbab")
 */
class SubBab{
    protected $id;
    
    protected $nama;
    
    protected $link;
    
    protected $deskripsi;
    
    protected $idBab;
}

