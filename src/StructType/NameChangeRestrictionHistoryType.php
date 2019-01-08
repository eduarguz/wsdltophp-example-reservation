<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameChangeRestrictionHistoryType StructType
 * @subpackage Structs
 */
class NameChangeRestrictionHistoryType extends AbstractStructBase
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The RestrictionData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RestrictionData;
    /**
     * Constructor method for NameChangeRestrictionHistoryType
     * @uses NameChangeRestrictionHistoryType::setHistoryAction()
     * @uses NameChangeRestrictionHistoryType::setRestrictionData()
     * @param string $historyAction
     * @param string $restrictionData
     */
    public function __construct($historyAction = null, $restrictionData = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setRestrictionData($restrictionData);
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
     * @return \Sabre\UpdateReservation\StructType\NameChangeRestrictionHistoryType
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
     * Get RestrictionData value
     * @return string|null
     */
    public function getRestrictionData()
    {
        return $this->RestrictionData;
    }
    /**
     * Set RestrictionData value
     * @param string $restrictionData
     * @return \Sabre\UpdateReservation\StructType\NameChangeRestrictionHistoryType
     */
    public function setRestrictionData($restrictionData = null)
    {
        // validation for constraint: string
        if (!is_null($restrictionData) && !is_string($restrictionData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($restrictionData)), __LINE__);
        }
        $this->RestrictionData = $restrictionData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\NameChangeRestrictionHistoryType
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
