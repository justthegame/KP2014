<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="aksesmateri")
 */
class AksesMateri{
    
    /**
     * @ORM\ManyToOne(targetEntity="Karyawan")
     * @ORM\JoinColumn(name="karyawan_id", referencedColumnName="id")
     **/
    protected $idKaryawan;
    
    /**
     * @ORM\ManyToOne(targetEntity="Pelajaran")
     * @ORM\JoinColumn(name="pelajaran_id", referencedColumnName="id")
     **/
    protected $idPelajaran;
    
    /**
     * @ORM\ManyToOne(targetEntity="Kelas")
     * @ORM\JoinColumn(name="kelas_id", referencedColumnName="id")
     **/
    protected $idKelas;
    
}

