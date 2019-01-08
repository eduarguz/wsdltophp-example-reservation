<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TicketOnDemandHistoryType StructType
 * @subpackage Structs
 */
class TicketOnDemandHistoryType extends AbstractStructBase
{
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The ItemId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ItemId;
    /**
     * The ItemText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ItemText;
    /**
     * Constructor method for TicketOnDemandHistoryType
     * @uses TicketOnDemandHistoryType::setHistoryAction()
     * @uses TicketOnDemandHistoryType::setItemId()
     * @uses TicketOnDemandHistoryType::setItemText()
     * @param string $historyAction
     * @param string $itemId
     * @param string $itemText
     */
    public function __construct($historyAction = null, $itemId = null, $itemText = null)
    {
        $this
            ->setHistoryAction($historyAction)
            ->setItemId($itemId)
            ->setItemText($itemText);
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
     * @return \Sabre\UpdateReservation\StructType\TicketOnDemandHistoryType
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
     * Get ItemId value
     * @return string|null
     */
    public function getItemId()
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param string $itemId
     * @return \Sabre\UpdateReservation\StructType\TicketOnDemandHistoryType
     */
    public function setItemId($itemId = null)
    {
        // validation for constraint: string
        if (!is_null($itemId) && !is_string($itemId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemId)), __LINE__);
        }
        $this->ItemId = $itemId;
        return $this;
    }
    /**
     * Get ItemText value
     * @return string|null
     */
    public function getItemText()
    {
        return $this->ItemText;
    }
    /**
     * Set ItemText value
     * @param string $itemText
     * @return \Sabre\UpdateReservation\StructType\TicketOnDemandHistoryType
     */
    public function setItemText($itemText = null)
    {
        // validation for constraint: string
        if (!is_null($itemText) && !is_string($itemText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemText)), __LINE__);
        }
        $this->ItemText = $itemText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TicketOnDemandHistoryType
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
