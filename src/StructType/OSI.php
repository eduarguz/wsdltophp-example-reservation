<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OSI StructType
 * @subpackage Structs
 */
class OSI extends AbstractStructBase
{
    /**
     * The OSIMessage
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\OSIType[]
     */
    public $OSIMessage;
    /**
     * Constructor method for OSI
     * @uses OSI::setOSIMessage()
     * @param \Sabre\UpdateReservation\StructType\OSIType[] $oSIMessage
     */
    public function __construct(array $oSIMessage = array())
    {
        $this
            ->setOSIMessage($oSIMessage);
    }
    /**
     * Get OSIMessage value
     * @return \Sabre\UpdateReservation\StructType\OSIType[]|null
     */
    public function getOSIMessage()
    {
        return $this->OSIMessage;
    }
    /**
     * Set OSIMessage value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\OSIType[] $oSIMessage
     * @return \Sabre\UpdateReservation\StructType\OSI
     */
    public function setOSIMessage(array $oSIMessage = array())
    {
        foreach ($oSIMessage as $oSIOSIMessageItem) {
            // validation for constraint: itemType
            if (!$oSIOSIMessageItem instanceof \Sabre\UpdateReservation\StructType\OSIType) {
                throw new \InvalidArgumentException(sprintf('The OSIMessage property can only contain items of \Sabre\UpdateReservation\StructType\OSIType, "%s" given', is_object($oSIOSIMessageItem) ? get_class($oSIOSIMessageItem) : gettype($oSIOSIMessageItem)), __LINE__);
            }
        }
        $this->OSIMessage = $oSIMessage;
        return $this;
    }
    /**
     * Add item to OSIMessage value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\OSIType $item
     * @return \Sabre\UpdateReservation\StructType\OSI
     */
    public function addToOSIMessage(\Sabre\UpdateReservation\StructType\OSIType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\OSIType) {
            throw new \InvalidArgumentException(sprintf('The OSIMessage property can only contain items of \Sabre\UpdateReservation\StructType\OSIType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->OSIMessage[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\OSI
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
