<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressHistoryType StructType
 * @subpackage Structs
 */
class AddressHistoryType extends AddressLine_PNRB
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The AddressLineType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AddressLineType;
    /**
     * Constructor method for AddressHistoryType
     * @uses AddressHistoryType::setHistoryAction()
     * @uses AddressHistoryType::setAddressLineType()
     * @param string $historyAction
     * @param string $addressLineType
     */
    public function __construct($historyAction = null, $addressLineType = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setAddressLineType($addressLineType);
    }
    /**
     * Get HistoryAction value
     * @return string|null
     */
    public function getHistoryAction()
    {
        return $this->HistoryAction;
    }
    /**
     * Set HistoryAction value
     * @param string $historyAction
     * @return \Sabre\UpdateReservation\StructType\AddressHistoryType
     */
    public function setHistoryAction($historyAction = null)
    {
        // validation for constraint: string
        if (!is_null($historyAction) && !is_string($historyAction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($historyAction)), __LINE__);
        }
        $this->HistoryAction = $historyAction;
        return $this;
    }
    /**
     * Get AddressLineType value
     * @return string|null
     */
    public function getAddressLineType()
    {
        return $this->AddressLineType;
    }
    /**
     * Set AddressLineType value
     * @param string $addressLineType
     * @return \Sabre\UpdateReservation\StructType\AddressHistoryType
     */
    public function setAddressLineType($addressLineType = null)
    {
        // validation for constraint: string
        if (!is_null($addressLineType) && !is_string($addressLineType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressLineType)), __LINE__);
        }
        $this->AddressLineType = $addressLineType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AddressHistoryType
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
