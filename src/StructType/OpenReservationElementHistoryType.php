<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpenReservationElementHistoryType StructType
 * @subpackage Structs
 */
class OpenReservationElementHistoryType extends OpenReservationElementType
{
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
     * The OpenReservationElementId
     * @var string
     */
    public $OpenReservationElementId;
    /**
     * Constructor method for OpenReservationElementHistoryType
     * @uses OpenReservationElementHistoryType::setHistoryAction()
     * @uses OpenReservationElementHistoryType::setHistoryTimestamp()
     * @uses OpenReservationElementHistoryType::setOpenReservationElementId()
     * @param string $historyAction
     * @param string $historyTimestamp
     * @param string $openReservationElementId
     */
    public function __construct($historyAction = null, $historyTimestamp = null, $openReservationElementId = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setHistoryTimestamp($historyTimestamp)
            ->setOpenReservationElementId($openReservationElementId);
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
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementHistoryType
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
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementHistoryType
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
     * Get OpenReservationElementId value
     * @return string|null
     */
    public function getOpenReservationElementId()
    {
        return $this->OpenReservationElementId;
    }
    /**
     * Set OpenReservationElementId value
     * @param string $openReservationElementId
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementHistoryType
     */
    public function setOpenReservationElementId($openReservationElementId = null)
    {
        // validation for constraint: string
        if (!is_null($openReservationElementId) && !is_string($openReservationElementId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($openReservationElementId)), __LINE__);
        }
        $this->OpenReservationElementId = $openReservationElementId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\OpenReservationElementHistoryType
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
