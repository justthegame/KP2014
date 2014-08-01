<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="aksesmateri")
 */
class AksesMateri{
    protected $idKaryawan;
    
    protected $idPelajaran;
    
    protected $idKelas;
    
}

