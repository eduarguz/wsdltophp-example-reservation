<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CardHolderInfo.PNRB StructType
 * @subpackage Structs
 */
class CardHolderInfo_PNRB extends AbstractStructBase
{
    /**
     * The AddressLines
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AddressLines_PNRB
     */
    public $AddressLines;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - documentation: "Name" is used to return the credit card holder's name.
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * Constructor method for CardHolderInfo.PNRB
     * @uses CardHolderInfo_PNRB::setAddressLines()
     * @uses CardHolderInfo_PNRB::setName()
     * @param \Sabre\UpdateReservation\StructType\AddressLines_PNRB $addressLines
     * @param string $name
     */
    public function __construct(\Sabre\UpdateReservation\StructType\AddressLines_PNRB $addressLines = null, $name = null)
    {
        $this
            ->setAddressLines($addressLines)
            ->setName($name);
    }
    /**
     * Get AddressLines value
     * @return \Sabre\UpdateReservation\StructType\AddressLines_PNRB|null
     */
    public function getAddressLines()
    {
        return $this->AddressLines;
    }
    /**
     * Set AddressLines value
     * @param \Sabre\UpdateReservation\StructType\AddressLines_PNRB $addressLines
     * @return \Sabre\UpdateReservation\StructType\CardHolderInfo_PNRB
     */
    public function setAddressLines(\Sabre\UpdateReservation\StructType\AddressLines_PNRB $addressLines = null)
    {
        $this->AddressLines = $addressLines;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\CardHolderInfo_PNRB
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CardHolderInfo_PNRB
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
