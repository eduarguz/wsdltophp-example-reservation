<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FactHistoryType StructType
 * @subpackage Structs
 */
class FactHistoryType extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The ActionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ActionId;
    /**
     * The ActionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ActionCode;
    /**
     * The NumberInParty
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NumberInParty;
    /**
     * The TicketNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TicketNumber;
    /**
     * The FreeText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FreeText;
    /**
     * The FullText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FullText;
    /**
     * The FactType
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $FactType;
    /**
     * Constructor method for FactHistoryType
     * @uses FactHistoryType::setType()
     * @uses FactHistoryType::setHistoryAction()
     * @uses FactHistoryType::setCode()
     * @uses FactHistoryType::setActionId()
     * @uses FactHistoryType::setActionCode()
     * @uses FactHistoryType::setNumberInParty()
     * @uses FactHistoryType::setTicketNumber()
     * @uses FactHistoryType::setFreeText()
     * @uses FactHistoryType::setFullText()
     * @uses FactHistoryType::setFactType()
     * @param string $type
     * @param string $historyAction
     * @param string $code
     * @param string $actionId
     * @param string $actionCode
     * @param string $numberInParty
     * @param string $ticketNumber
     * @param string $freeText
     * @param string $fullText
     * @param string $factType
     */
    public function __construct($type = null, $historyAction = null, $code = null, $actionId = null, $actionCode = null, $numberInParty = null, $ticketNumber = null, $freeText = null, $fullText = null, $factType = null)
    {
        $this
            ->setType($type)
            ->setHistoryAction($historyAction)
            ->setCode($code)
            ->setActionId($actionId)
            ->setActionCode($actionCode)
            ->setNumberInParty($numberInParty)
            ->setTicketNumber($ticketNumber)
            ->setFreeText($freeText)
            ->setFullText($fullText)
            ->setFactType($factType);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\FactHistoryType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
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
     * @return \Sabre\UpdateReservation\StructType\FactHistoryType
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
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Sabre\UpdateReservation\StructType\FactHistoryType
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get ActionId value
     * @return string|null
     */
    public function getActionId()
    {
        return $this->ActionId;
    }
    /**
     * Set ActionId value
     * @param string $actionId
     * @return \Sabre\UpdateReservation\StructType\FactHistoryType
     */
    public function setActionId($actionId = null)
    {
        // validation for constraint: string
        if (!is_null($actionId) && !is_string($actionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionId)), __LINE__);
        }
        $this->ActionId = $actionId;
        return $this;
    }
    /**
     * Get ActionCode value
     * @return string|null
     */
    public function getActionCode()
    {
        return $this->ActionCode;
    }
    /**
     * Set ActionCode value
     * @param string $actionCode
     * @return \Sabre\UpdateReservation\StructType\FactHistoryType
     */
    public function setActionCode($actionCode = null)
    {
        // validation for constraint: string
        if (!is_null($actionCode) && !is_string($actionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actionCode)), __LINE__);
        }
        $this->ActionCode = $actionCode;
        return $this;
    }
    /**
     * Get NumberInParty value
     * @return string|null
     */
    public function getNumberInParty()
    {
        return $this->NumberInParty;
    }
    /**
     * Set NumberInParty value
     * @param string $numberInParty
     * @return \Sabre\UpdateReservation\StructType\FactHistoryType
     */
    public function setNumberInParty($numberInParty = null)
    {
        // validation for constraint: string
        if (!is_null($numberInParty) && !is_string($numberInParty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($numberInParty)), __LINE__);
        }
        $this->NumberInParty = $numberInParty;
        return $this;
    }
    /**
     * Get TicketNumber value
     * @return string|null
     */
    public function getTicketNumber()
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Sabre\UpdateReservation\StructType\FactHistoryType
     */
    public function setTicketNumber($ticketNumber = null)
    {
        // validation for constraint: string
        if (!is_null($ticketNumber) && !is_string($ticketNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ticketNumber)), __LINE__);
        }
        $this->TicketNumber = $ticketNumber;
        return $this;
    }
    /**
     * Get FreeText value
     * @return string|null
     */
    public function getFreeText()
    {
        return $this->FreeText;
    }
    /**
     * Set FreeText value
     * @param string $freeText
     * @return \Sabre\UpdateReservation\StructType\FactHistoryType
     */
    public function setFreeText($freeText = null)
    {
        // validation for constraint: string
        if (!is_null($freeText) && !is_string($freeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeText)), __LINE__);
        }
        $this->FreeText = $freeText;
        return $this;
    }
    /**
     * Get FullText value
     * @return string|null
     */
    public function getFullText()
    {
        return $this->FullText;
    }
    /**
     * Set FullText value
     * @param string $fullText
     * @return \Sabre\UpdateReservation\StructType\FactHistoryType
     */
    public function setFullText($fullText = null)
    {
        // validation for constraint: string
        if (!is_null($fullText) && !is_string($fullText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fullText)), __LINE__);
        }
        $this->FullText = $fullText;
        return $this;
    }
    /**
     * Get FactType value
     * @return string|null
     */
    public function getFactType()
    {
        return $this->FactType;
    }
    /**
     * Set FactType value
     * @param string $factType
     * @return \Sabre\UpdateReservation\StructType\FactHistoryType
     */
    public function setFactType($factType = null)
    {
        // validation for constraint: string
        if (!is_null($factType) && !is_string($factType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($factType)), __LINE__);
        }
        $this->FactType = $factType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FactHistoryType
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
