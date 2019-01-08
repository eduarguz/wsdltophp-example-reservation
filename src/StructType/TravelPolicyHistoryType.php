<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelPolicyHistoryType StructType
 * @subpackage Structs
 */
class TravelPolicyHistoryType extends AbstractStructBase
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The TravelPolicyData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TravelPolicyData;
    /**
     * Constructor method for TravelPolicyHistoryType
     * @uses TravelPolicyHistoryType::setHistoryAction()
     * @uses TravelPolicyHistoryType::setTravelPolicyData()
     * @param string $historyAction
     * @param string $travelPolicyData
     */
    public function __construct($historyAction = null, $travelPolicyData = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setTravelPolicyData($travelPolicyData);
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
     * @return \Sabre\UpdateReservation\StructType\TravelPolicyHistoryType
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
     * Get TravelPolicyData value
     * @return string|null
     */
    public function getTravelPolicyData()
    {
        return $this->TravelPolicyData;
    }
    /**
     * Set TravelPolicyData value
     * @param string $travelPolicyData
     * @return \Sabre\UpdateReservation\StructType\TravelPolicyHistoryType
     */
    public function setTravelPolicyData($travelPolicyData = null)
    {
        // validation for constraint: string
        if (!is_null($travelPolicyData) && !is_string($travelPolicyData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($travelPolicyData)), __LINE__);
        }
        $this->TravelPolicyData = $travelPolicyData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TravelPolicyHistoryType
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
