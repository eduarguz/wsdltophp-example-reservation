<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Recipient StructType
 * Meta informations extracted from the WSDL
 * - documentation: A person or institution that receives or is awarded with e.g. voucher, money, etc.
 * @subpackage Structs
 */
class Recipient extends AbstractStructBase
{
    /**
     * The Guest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Guest
     */
    public $Guest;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * Constructor method for Recipient
     * @uses Recipient::setGuest()
     * @uses Recipient::setName()
     * @param \Sabre\UpdateReservation\StructType\Guest $guest
     * @param string $name
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Guest $guest = null, $name = null)
    {
        $this
            ->setGuest($guest)
            ->setName($name);
    }
    /**
     * Get Guest value
     * @return \Sabre\UpdateReservation\StructType\Guest|null
     */
    public function getGuest()
    {
        return $this->Guest;
    }
    /**
     * Set Guest value
     * @param \Sabre\UpdateReservation\StructType\Guest $guest
     * @return \Sabre\UpdateReservation\StructType\Recipient
     */
    public function setGuest(\Sabre\UpdateReservation\StructType\Guest $guest = null)
    {
        $this->Guest = $guest;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\Recipient
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Recipient
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
