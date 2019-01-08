<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerInsightProfileHistoryType StructType
 * @subpackage Structs
 */
class CustomerInsightProfileHistoryType extends AbstractStructBase
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The ProfileTag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProfileTag;
    /**
     * The ProfileID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProfileID;
    /**
     * Constructor method for CustomerInsightProfileHistoryType
     * @uses CustomerInsightProfileHistoryType::setHistoryAction()
     * @uses CustomerInsightProfileHistoryType::setProfileTag()
     * @uses CustomerInsightProfileHistoryType::setProfileID()
     * @param string $historyAction
     * @param string $profileTag
     * @param string $profileID
     */
    public function __construct($historyAction = null, $profileTag = null, $profileID = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setProfileTag($profileTag)
            ->setProfileID($profileID);
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
     * @return \Sabre\UpdateReservation\StructType\CustomerInsightProfileHistoryType
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
     * Get ProfileTag value
     * @return string|null
     */
    public function getProfileTag()
    {
        return $this->ProfileTag;
    }
    /**
     * Set ProfileTag value
     * @param string $profileTag
     * @return \Sabre\UpdateReservation\StructType\CustomerInsightProfileHistoryType
     */
    public function setProfileTag($profileTag = null)
    {
        // validation for constraint: string
        if (!is_null($profileTag) && !is_string($profileTag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profileTag)), __LINE__);
        }
        $this->ProfileTag = $profileTag;
        return $this;
    }
    /**
     * Get ProfileID value
     * @return string|null
     */
    public function getProfileID()
    {
        return $this->ProfileID;
    }
    /**
     * Set ProfileID value
     * @param string $profileID
     * @return \Sabre\UpdateReservation\StructType\CustomerInsightProfileHistoryType
     */
    public function setProfileID($profileID = null)
    {
        // validation for constraint: string
        if (!is_null($profileID) && !is_string($profileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profileID)), __LINE__);
        }
        $this->ProfileID = $profileID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CustomerInsightProfileHistoryType
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
