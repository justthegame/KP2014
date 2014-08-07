<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bab")
 */
class Bab{
    
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
     * @ORM\ManyToOne(targetEntity="Kelas")
     * @ORM\JoinColumn(name="id_kelas", referencedColumnName="id")
     **/
    protected $idKelas;
    
    /**
     * @ORM\ManyToOne(targetEntity="Pelajaran")
     * @ORM\JoinColumn(name="id_pelajaran", referencedColumnName="id")
     **/
    protected $idPelajaran;
    
}

