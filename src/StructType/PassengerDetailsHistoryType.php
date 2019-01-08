<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerDetailsHistoryType StructType
 * @subpackage Structs
 */
class PassengerDetailsHistoryType extends AbstractStructBase
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The NameID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NameID;
    /**
     * The PassengerDetailType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PassengerDetailType;
    /**
     * The CancelledName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CancelledName;
    /**
     * The PassengerDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerDetails
     */
    public $PassengerDetails;
    /**
     * Constructor method for PassengerDetailsHistoryType
     * @uses PassengerDetailsHistoryType::setHistoryAction()
     * @uses PassengerDetailsHistoryType::setNameID()
     * @uses PassengerDetailsHistoryType::setPassengerDetailType()
     * @uses PassengerDetailsHistoryType::setCancelledName()
     * @uses PassengerDetailsHistoryType::setPassengerDetails()
     * @param string $historyAction
     * @param string $nameID
     * @param string $passengerDetailType
     * @param string $cancelledName
     * @param \Sabre\UpdateReservation\StructType\PassengerDetails $passengerDetails
     */
    public function __construct($historyAction = null, $nameID = null, $passengerDetailType = null, $cancelledName = null, \Sabre\UpdateReservation\StructType\PassengerDetails $passengerDetails = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setNameID($nameID)
            ->setPassengerDetailType($passengerDetailType)
            ->setCancelledName($cancelledName)
            ->setPassengerDetails($passengerDetails);
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
     * @return \Sabre\UpdateReservation\StructType\PassengerDetailsHistoryType
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
     * Get NameID value
     * @return string|null
     */
    public function getNameID()
    {
        return $this->NameID;
    }
    /**
     * Set NameID value
     * @param string $nameID
     * @return \Sabre\UpdateReservation\StructType\PassengerDetailsHistoryType
     */
    public function setNameID($nameID = null)
    {
        // validation for constraint: string
        if (!is_null($nameID) && !is_string($nameID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameID)), __LINE__);
        }
        $this->NameID = $nameID;
        return $this;
    }
    /**
     * Get PassengerDetailType value
     * @return string|null
     */
    public function getPassengerDetailType()
    {
        return $this->PassengerDetailType;
    }
    /**
     * Set PassengerDetailType value
     * @param string $passengerDetailType
     * @return \Sabre\UpdateReservation\StructType\PassengerDetailsHistoryType
     */
    public function setPassengerDetailType($passengerDetailType = null)
    {
        // validation for constraint: string
        if (!is_null($passengerDetailType) && !is_string($passengerDetailType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($passengerDetailType)), __LINE__);
        }
        $this->PassengerDetailType = $passengerDetailType;
        return $this;
    }
    /**
     * Get CancelledName value
     * @return string|null
     */
    public function getCancelledName()
    {
        return $this->CancelledName;
    }
    /**
     * Set CancelledName value
     * @param string $cancelledName
     * @return \Sabre\UpdateReservation\StructType\PassengerDetailsHistoryType
     */
    public function setCancelledName($cancelledName = null)
    {
        // validation for constraint: string
        if (!is_null($cancelledName) && !is_string($cancelledName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cancelledName)), __LINE__);
        }
        $this->CancelledName = $cancelledName;
        return $this;
    }
    /**
     * Get PassengerDetails value
     * @return \Sabre\UpdateReservation\StructType\PassengerDetails|null
     */
    public function getPassengerDetails()
    {
        return $this->PassengerDetails;
    }
    /**
     * Set PassengerDetails value
     * @param \Sabre\UpdateReservation\StructType\PassengerDetails $passengerDetails
     * @return \Sabre\UpdateReservation\StructType\PassengerDetailsHistoryType
     */
    public function setPassengerDetails(\Sabre\UpdateReservation\StructType\PassengerDetails $passengerDetails = null)
    {
        $this->PassengerDetails = $passengerDetails;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PassengerDetailsHistoryType
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
