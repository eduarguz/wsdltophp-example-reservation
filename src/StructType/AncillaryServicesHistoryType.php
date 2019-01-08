<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryServicesHistoryType StructType
 * @subpackage Structs
 */
class AncillaryServicesHistoryType extends AncillaryServices_PNRB
{
    /**
     * The NameAssociations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NameAssociations
     */
    public $NameAssociations;
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The HistoryTimestamp
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryTimestamp;
    /**
     * Constructor method for AncillaryServicesHistoryType
     * @uses AncillaryServicesHistoryType::setNameAssociations()
     * @uses AncillaryServicesHistoryType::setHistoryAction()
     * @uses AncillaryServicesHistoryType::setHistoryTimestamp()
     * @param \Sabre\UpdateReservation\StructType\NameAssociations $nameAssociations
     * @param string $historyAction
     * @param string $historyTimestamp
     */
    public function __construct(\Sabre\UpdateReservation\StructType\NameAssociations $nameAssociations = null, $historyAction = null, $historyTimestamp = null)
    {
        $this
            ->setNameAssociations($nameAssociations)
            ->setHistoryAction($historyAction)
            ->setHistoryTimestamp($historyTimestamp);
    }
    /**
     * Get NameAssociations value
     * @return \Sabre\UpdateReservation\StructType\NameAssociations|null
     */
    public function getNameAssociations()
    {
        return $this->NameAssociations;
    }
    /**
     * Set NameAssociations value
     * @param \Sabre\UpdateReservation\StructType\NameAssociations $nameAssociations
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesHistoryType
     */
    public function setNameAssociations(\Sabre\UpdateReservation\StructType\NameAssociations $nameAssociations = null)
    {
        $this->NameAssociations = $nameAssociations;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesHistoryType
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
     * Get HistoryTimestamp value
     * @return string|null
     */
    public function getHistoryTimestamp()
    {
        return $this->HistoryTimestamp;
    }
    /**
     * Set HistoryTimestamp value
     * @param string $historyTimestamp
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesHistoryType
     */
    public function setHistoryTimestamp($historyTimestamp = null)
    {
        // validation for constraint: string
        if (!is_null($historyTimestamp) && !is_string($historyTimestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($historyTimestamp)), __LINE__);
        }
        $this->HistoryTimestamp = $historyTimestamp;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryServicesHistoryType
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
