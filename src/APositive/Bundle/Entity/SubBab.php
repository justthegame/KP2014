<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="subbab")
 */
class SubBab{
    
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
     * @ORM\Column(type="string")
     */
    protected $link;
    
    /**
     * @ORM\Column(type="text")
     */
    protected $deskripsi;
    
    /**
     * @ORM\ManyToOne(targetEntity="Bab")
     * @ORM\JoinColumn(name="id_bab", referencedColumnName="id")
     **/
    protected $idBab;
}

