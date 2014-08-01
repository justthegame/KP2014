<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="member")
 */
class Member{
    
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
     * @ORM\Column(type="string", length=50)
     */
    protected $email;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $username;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $password;
}

