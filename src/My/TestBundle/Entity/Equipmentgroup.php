<?php

namespace My\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * My\TestBundle\Entity\Equipmentgroup
 */
class Equipmentgroup
{
    /**
     * @var integer $equipmentGroupId
     */
    private $equipmentGroupId;

    /**
     * @var string $hierarchy
     */
    private $hierarchy;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var My\TestBundle\Entity\Authuser
     */
    private $authuser;

    public function __construct()
    {
        $this->authuser = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get equipmentGroupId
     *
     * @return integer 
     */
    public function getEquipmentGroupId()
    {
        return $this->equipmentGroupId;
    }

    /**
     * Set hierarchy
     *
     * @param string $hierarchy
     */
    public function setHierarchy($hierarchy)
    {
        $this->hierarchy = $hierarchy;
    }

    /**
     * Get hierarchy
     *
     * @return string 
     */
    public function getHierarchy()
    {
        return $this->hierarchy;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add authuser
     *
     * @param My\TestBundle\Entity\Authuser $authuser
     */
    public function addAuthuser(\My\TestBundle\Entity\Authuser $authuser)
    {
        $this->authuser[] = $authuser;
    }

    /**
     * Get authuser
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getAuthuser()
    {
        return $this->authuser;
    }
}