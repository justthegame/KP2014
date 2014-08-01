<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="aksesmateri")
 */
class AksesMateri{
    
    /**
     * @ManyToOne(targetEntity="Karyawan")
     * @JoinColumn(name="id_karyawan", referencedColumnName="id")
     **/
    protected $idKaryawan;
    
    /**
     * @ManyToOne(targetEntity="Pelajaran")
     * @JoinColumn(name="id_pelajaran", referencedColumnName="id")
     **/
    protected $idPelajaran;
    
    /**
     * @ManyToOne(targetEntity="Kelas")
     * @JoinColumn(name="id_kelas", referencedColumnName="id")
     **/
    protected $idKelas;
    
}

