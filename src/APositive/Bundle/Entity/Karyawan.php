<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="karyawan")
 */
class Karyawan {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $noKTP;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nama;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $alamat;
    
    /**
     * @ORM\Column(type="date")
     */
    protected $tglLahir;
    
    /**
     * @ORM\Column(type="string",length=20)
     */
    protected $jabatan;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $foto;

}
