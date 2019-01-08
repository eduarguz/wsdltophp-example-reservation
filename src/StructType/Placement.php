<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Placement StructType
 * @subpackage Structs
 */
class Placement extends AbstractStructBase
{
    /**
     * The Coach
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Sabre\UpdateReservation\StructType\Coach[]
     */
    public $Coach;
    /**
     * The Detail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Detail;
    /**
     * The code
     * @var string
     */
    public $code;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * Constructor method for Placement
     * @uses Placement::setCoach()
     * @uses Placement::setDetail()
     * @uses Placement::setCode()
     * @uses Placement::setType()
     * @param \Sabre\UpdateReservation\StructType\Coach[] $coach
     * @param string[] $detail
     * @param string $code
     * @param string $type
     */
    public function __construct(array $coach = array(), array $detail = array(), $code = null, $type = null)
    {
        $this
            ->setCoach($coach)
            ->setDetail($detail)
            ->setCode($code)
            ->setType($type);
    }
    /**
     * Get Coach value
     * @return \Sabre\UpdateReservation\StructType\Coach[]|null
     */
    public function getCoach()
    {
        return $this->Coach;
    }
    /**
     * Set Coach value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Coach[] $coach
     * @return \Sabre\UpdateReservation\StructType\Placement
     */
    public function setCoach(array $coach = array())
    {
        foreach ($coach as $placementCoachItem) {
            // validation for constraint: itemType
            if (!$placementCoachItem instanceof \Sabre\UpdateReservation\StructType\Coach) {
                throw new \InvalidArgumentException(sprintf('The Coach property can only contain items of \Sabre\UpdateReservation\StructType\Coach, "%s" given', is_object($placementCoachItem) ? get_class($placementCoachItem) : gettype($placementCoachItem)), __LINE__);
            }
        }
        $this->Coach = $coach;
        return $this;
    }
    /**
     * Add item to Coach value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Coach $item
     * @return \Sabre\UpdateReservation\StructType\Placement
     */
    public function addToCoach(\Sabre\UpdateReservation\StructType\Coach $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Coach) {
            throw new \InvalidArgumentException(sprintf('The Coach property can only contain items of \Sabre\UpdateReservation\StructType\Coach, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Coach[] = $item;
        return $this;
    }
    /**
     * Get Detail value
     * @return string[]|null
     */
    public function getDetail()
    {
        return $this->Detail;
    }
    /**
     * Set Detail value
     * @throws \InvalidArgumentException
     * @param string[] $detail
     * @return \Sabre\UpdateReservation\StructType\Placement
     */
    public function setDetail(array $detail = array())
    {
        foreach ($detail as $placementDetailItem) {
            // validation for constraint: itemType
            if (!is_string($placementDetailItem)) {
                throw new \InvalidArgumentException(sprintf('The Detail property can only contain items of string, "%s" given', is_object($placementDetailItem) ? get_class($placementDetailItem) : gettype($placementDetailItem)), __LINE__);
            }
        }
        $this->Detail = $detail;
        return $this;
    }
    /**
     * Add item to Detail value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\Placement
     */
    public function addToDetail($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Detail property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Detail[] = $item;
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\Placement
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->code = $code;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\Placement
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Placement
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
