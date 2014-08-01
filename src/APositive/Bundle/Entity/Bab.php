<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bab")
 */
class Bab{
    protected $id;
    
    protected $nama;
    
    protected $idKelas;
    
    protected $idPelajaran;
    
}

