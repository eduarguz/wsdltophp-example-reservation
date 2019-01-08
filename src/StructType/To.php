<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for To StructType
 * @subpackage Structs
 */
class To extends AbstractStructBase
{
    /**
     * The PartyId
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: tns:PartyId
     * @var \Sabre\UpdateReservation\StructType\PartyId[]
     */
    public $PartyId;
    /**
     * The Role
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - minLength: 1
     * @var string
     */
    public $Role;
    /**
     * Constructor method for To
     * @uses To::setPartyId()
     * @uses To::setRole()
     * @param \Sabre\UpdateReservation\StructType\PartyId[] $partyId
     * @param string $role
     */
    public function __construct(array $partyId = array(), $role = null)
    {
        $this
            ->setPartyId($partyId)
            ->setRole($role);
    }
    /**
     * Get PartyId value
     * @return \Sabre\UpdateReservation\StructType\PartyId[]|null
     */
    public function getPartyId()
    {
        return $this->PartyId;
    }
    /**
     * Set PartyId value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PartyId[] $partyId
     * @return \Sabre\UpdateReservation\StructType\To
     */
    public function setPartyId(array $partyId = array())
    {
        foreach ($partyId as $toPartyIdItem) {
            // validation for constraint: itemType
            if (!$toPartyIdItem instanceof \Sabre\UpdateReservation\StructType\PartyId) {
                throw new \InvalidArgumentException(sprintf('The PartyId property can only contain items of \Sabre\UpdateReservation\StructType\PartyId, "%s" given', is_object($toPartyIdItem) ? get_class($toPartyIdItem) : gettype($toPartyIdItem)), __LINE__);
            }
        }
        $this->PartyId = $partyId;
        return $this;
    }
    /**
     * Add item to PartyId value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PartyId $item
     * @return \Sabre\UpdateReservation\StructType\To
     */
    public function addToPartyId(\Sabre\UpdateReservation\StructType\PartyId $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PartyId) {
            throw new \InvalidArgumentException(sprintf('The PartyId property can only contain items of \Sabre\UpdateReservation\StructType\PartyId, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PartyId[] = $item;
        return $this;
    }
    /**
     * Get Role value
     * @return string|null
     */
    public function getRole()
    {
        return $this->Role;
    }
    /**
     * Set Role value
     * @param string $role
     * @return \Sabre\UpdateReservation\StructType\To
     */
    public function setRole($role = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($role) && strlen($role) < 1) || (is_array($role) && count($role) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($role) && !is_string($role)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($role)), __LINE__);
        }
        $this->Role = $role;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\To
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
