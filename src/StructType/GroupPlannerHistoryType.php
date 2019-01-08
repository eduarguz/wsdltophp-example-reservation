<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupPlannerHistoryType StructType
 * @subpackage Structs
 */
class GroupPlannerHistoryType extends AbstractStructBase
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The GroupPlannerData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $GroupPlannerData;
    /**
     * Constructor method for GroupPlannerHistoryType
     * @uses GroupPlannerHistoryType::setHistoryAction()
     * @uses GroupPlannerHistoryType::setGroupPlannerData()
     * @param string $historyAction
     * @param string $groupPlannerData
     */
    public function __construct($historyAction = null, $groupPlannerData = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setGroupPlannerData($groupPlannerData);
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
     * @return \Sabre\UpdateReservation\StructType\GroupPlannerHistoryType
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
     * Get GroupPlannerData value
     * @return string|null
     */
    public function getGroupPlannerData()
    {
        return $this->GroupPlannerData;
    }
    /**
     * Set GroupPlannerData value
     * @param string $groupPlannerData
     * @return \Sabre\UpdateReservation\StructType\GroupPlannerHistoryType
     */
    public function setGroupPlannerData($groupPlannerData = null)
    {
        // validation for constraint: string
        if (!is_null($groupPlannerData) && !is_string($groupPlannerData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($groupPlannerData)), __LINE__);
        }
        $this->GroupPlannerData = $groupPlannerData;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\GroupPlannerHistoryType
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
