<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MiscTicketingHistoryType StructType
 * @subpackage Structs
 */
class MiscTicketingHistoryType extends AbstractStructBase
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The MiscTicketData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $MiscTicketData;
    /**
     * The IsCreditCardData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCreditCardData;
    /**
     * Constructor method for MiscTicketingHistoryType
     * @uses MiscTicketingHistoryType::setHistoryAction()
     * @uses MiscTicketingHistoryType::setMiscTicketData()
     * @uses MiscTicketingHistoryType::setIsCreditCardData()
     * @param string $historyAction
     * @param string $miscTicketData
     * @param bool $isCreditCardData
     */
    public function __construct($historyAction = null, $miscTicketData = null, $isCreditCardData = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setMiscTicketData($miscTicketData)
            ->setIsCreditCardData($isCreditCardData);
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
     * @return \Sabre\UpdateReservation\StructType\MiscTicketingHistoryType
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
     * Get MiscTicketData value
     * @return string|null
     */
    public function getMiscTicketData()
    {
        return $this->MiscTicketData;
    }
    /**
     * Set MiscTicketData value
     * @param string $miscTicketData
     * @return \Sabre\UpdateReservation\StructType\MiscTicketingHistoryType
     */
    public function setMiscTicketData($miscTicketData = null)
    {
        // validation for constraint: string
        if (!is_null($miscTicketData) && !is_string($miscTicketData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($miscTicketData)), __LINE__);
        }
        $this->MiscTicketData = $miscTicketData;
        return $this;
    }
    /**
     * Get IsCreditCardData value
     * @return bool|null
     */
    public function getIsCreditCardData()
    {
        return $this->IsCreditCardData;
    }
    /**
     * Set IsCreditCardData value
     * @param bool $isCreditCardData
     * @return \Sabre\UpdateReservation\StructType\MiscTicketingHistoryType
     */
    public function setIsCreditCardData($isCreditCardData = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCreditCardData) && !is_bool($isCreditCardData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCreditCardData)), __LINE__);
        }
        $this->IsCreditCardData = $isCreditCardData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\MiscTicketingHistoryType
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
