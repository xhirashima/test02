<?php

namespace My\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * My\TestBundle\Entity\Rental
 */
class Rental
{
    /**
     * @var integer $rentalId
     */
    private $rentalId;

    /**
     * @var datetime $planstartday
     */
    private $planstartday;

    /**
     * @var datetime $planendday
     */
    private $planendday;

    /**
     * @var datetime $decisionstartday
     */
    private $decisionstartday;

    /**
     * @var datetime $decisionendday
     */
    private $decisionendday;

    /**
     * @var My\TestBundle\Entity\Authuser
     */
    private $tuseuserAuthuser;

    /**
     * @var My\TestBundle\Entity\Equipment
     */
    private $equipment;


    /**
     * Get rentalId
     *
     * @return integer 
     */
    public function getRentalId()
    {
        return $this->rentalId;
    }

    /**
     * Set planstartday
     *
     * @param datetime $planstartday
     */
    public function setPlanstartday($planstartday)
    {
        $this->planstartday = $planstartday;
    }

    /**
     * Get planstartday
     *
     * @return datetime 
     */
    public function getPlanstartday()
    {
        return $this->planstartday;
    }

    /**
     * Set planendday
     *
     * @param datetime $planendday
     */
    public function setPlanendday($planendday)
    {
        $this->planendday = $planendday;
    }

    /**
     * Get planendday
     *
     * @return datetime 
     */
    public function getPlanendday()
    {
        return $this->planendday;
    }

    /**
     * Set decisionstartday
     *
     * @param datetime $decisionstartday
     */
    public function setDecisionstartday($decisionstartday)
    {
        $this->decisionstartday = $decisionstartday;
    }

    /**
     * Get decisionstartday
     *
     * @return datetime 
     */
    public function getDecisionstartday()
    {
        return $this->decisionstartday;
    }

    /**
     * Set decisionendday
     *
     * @param datetime $decisionendday
     */
    public function setDecisionendday($decisionendday)
    {
        $this->decisionendday = $decisionendday;
    }

    /**
     * Get decisionendday
     *
     * @return datetime 
     */
    public function getDecisionendday()
    {
        return $this->decisionendday;
    }

    /**
     * Set tuseuserAuthuser
     *
     * @param My\TestBundle\Entity\Authuser $tuseuserAuthuser
     */
    public function setTuseuserAuthuser(\My\TestBundle\Entity\Authuser $tuseuserAuthuser)
    {
        $this->tuseuserAuthuser = $tuseuserAuthuser;
    }

    /**
     * Get tuseuserAuthuser
     *
     * @return My\TestBundle\Entity\Authuser 
     */
    public function getTuseuserAuthuser()
    {
        return $this->tuseuserAuthuser;
    }

    /**
     * Set equipment
     *
     * @param My\TestBundle\Entity\Equipment $equipment
     */
    public function setEquipment(\My\TestBundle\Entity\Equipment $equipment)
    {
        $this->equipment = $equipment;
    }

    /**
     * Get equipment
     *
     * @return My\TestBundle\Entity\Equipment 
     */
    public function getEquipment()
    {
        return $this->equipment;
    }
}