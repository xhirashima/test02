<?php

namespace My\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * My\TestBundle\Entity\Authuser
 */
class Authuser
{
    /**
     * @var integer $authuserId
     */
    private $authuserId;

    /**
     * @var string $username
     */
    private $username;

    /**
     * @var string $salt
     */
    private $salt;

    /**
     * @var string $password
     */
    private $password;

    /**
     * @var boolean $isActive
     */
    private $isActive;

    /**
     * @var string $mail
     */
    private $mail;

    /**
     * @var My\TestBundle\Entity\Equipmentgroup
     */
    private $equipmentGroup;

    public function __construct()
    {
        $this->equipmentGroup = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get authuserId
     *
     * @return integer 
     */
    public function getAuthuserId()
    {
        return $this->authuserId;
    }

    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
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
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
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
     * Set isActive
     *
     * @param boolean $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set mail
     *
     * @param string $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Add equipmentGroup
     *
     * @param My\TestBundle\Entity\Equipmentgroup $equipmentGroup
     */
    public function addEquipmentgroup(\My\TestBundle\Entity\Equipmentgroup $equipmentGroup)
    {
        $this->equipmentGroup[] = $equipmentGroup;
    }

    /**
     * Get equipmentGroup
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEquipmentGroup()
    {
        return $this->equipmentGroup;
    }
}