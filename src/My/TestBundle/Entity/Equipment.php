<?php

namespace My\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * My\TestBundle\Entity\Equipment
 */
class Equipment
{
    /**
     * @var integer $equipmentId
     */
    private $equipmentId;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var My\TestBundle\Entity\Equipmentgroup
     */
    private $equipmentGroup;


    /**
     * Get equipmentId
     *
     * @return integer 
     */
    public function getEquipmentId()
    {
        return $this->equipmentId;
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
     * Set equipmentGroup
     *
     * @param My\TestBundle\Entity\Equipmentgroup $equipmentGroup
     */
    public function setEquipmentGroup(\My\TestBundle\Entity\Equipmentgroup $equipmentGroup)
    {
        $this->equipmentGroup = $equipmentGroup;
    }

    /**
     * Get equipmentGroup
     *
     * @return My\TestBundle\Entity\Equipmentgroup 
     */
    public function getEquipmentGroup()
    {
        return $this->equipmentGroup;
    }
}