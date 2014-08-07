<?php

namespace APositive\Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="member")
 * @ORM\Entity(repositoryClass="Acme\StoreBundle\Entity\MemberRepository")
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
     * @ORM\Column(unique=TRUE)
     */
    protected $username;
    
    /**
     * @ORM\Column(type="string", length=20)
     */
    protected $password;
    
    /**
    * @ORM\OneToMany(targetEntity="HistoryBayar", mappedBy="member")
    */
    protected $historyBayar;

    public function __construct()
    {
        $this->historyBayar = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nama
     *
     * @param string $nama
     * @return Member
     */
    public function setNama($nama)
    {
        $this->nama = $nama;

        return $this;
    }

    /**
     * Get nama
     *
     * @return string 
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Member
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Member
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Member
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Add historyBayar
     *
     * @param \APositive\Bundle\Entity\HistoryBayar $historyBayar
     * @return Member
     */
    public function addHistoryBayar(\APositive\Bundle\Entity\HistoryBayar $historyBayar)
    {
        $this->historyBayar[] = $historyBayar;

        return $this;
    }

    /**
     * Remove historyBayar
     *
     * @param \APositive\Bundle\Entity\HistoryBayar $historyBayar
     */
    public function removeHistoryBayar(\APositive\Bundle\Entity\HistoryBayar $historyBayar)
    {
        $this->historyBayar->removeElement($historyBayar);
    }

    /**
     * Get historyBayar
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHistoryBayar()
    {
        return $this->historyBayar;
    }
}
