<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OSIType StructType
 * @subpackage Structs
 */
class OSIType extends AbstractStructBase
{
    /**
     * The ValidatingCarrier
     * Meta informations extracted from the WSDL
     * - documentation: IATA two letter code of the validating carrier. Ex."EY"
     * - minOccurs: 0
     * @var string
     */
    public $ValidatingCarrier;
    /**
     * The TypeOfOSI
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TypeOfOSI;
    /**
     * The TicketNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TicketNumber;
    /**
     * Constructor method for OSIType
     * @uses OSIType::setValidatingCarrier()
     * @uses OSIType::setTypeOfOSI()
     * @uses OSIType::setTicketNumber()
     * @param string $validatingCarrier
     * @param string $typeOfOSI
     * @param string $ticketNumber
     */
    public function __construct($validatingCarrier = null, $typeOfOSI = null, $ticketNumber = null)
    {
        $this
            ->setValidatingCarrier($validatingCarrier)
            ->setTypeOfOSI($typeOfOSI)
            ->setTicketNumber($ticketNumber);
    }
    /**
     * Get ValidatingCarrier value
     * @return string|null
     */
    public function getValidatingCarrier()
    {
        return $this->ValidatingCarrier;
    }
    /**
     * Set ValidatingCarrier value
     * @param string $validatingCarrier
     * @return \Sabre\UpdateReservation\StructType\OSIType
     */
    public function setValidatingCarrier($validatingCarrier = null)
    {
        // validation for constraint: string
        if (!is_null($validatingCarrier) && !is_string($validatingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validatingCarrier)), __LINE__);
        }
        $this->ValidatingCarrier = $validatingCarrier;
        return $this;
    }
    /**
     * Get TypeOfOSI value
     * @return string|null
     */
    public function getTypeOfOSI()
    {
        return $this->TypeOfOSI;
    }
    /**
     * Set TypeOfOSI value
     * @param string $typeOfOSI
     * @return \Sabre\UpdateReservation\StructType\OSIType
     */
    public function setTypeOfOSI($typeOfOSI = null)
    {
        // validation for constraint: string
        if (!is_null($typeOfOSI) && !is_string($typeOfOSI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typeOfOSI)), __LINE__);
        }
        $this->TypeOfOSI = $typeOfOSI;
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber()
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Sabre\UpdateReservation\StructType\OSIType
     */
    public function setTicketNumber($ticketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\OSIType
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
