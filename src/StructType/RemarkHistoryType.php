<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemarkHistoryType StructType
 * @subpackage Structs
 */
class RemarkHistoryType extends AbstractStructBase
{
    /**
     * The Action
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Action;
    /**
     * The HistoryAction
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $HistoryAction;
    /**
     * The RemarkType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RemarkType;
    /**
     * The RemarkActionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RemarkActionCode;
    /**
     * The RemarkText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RemarkText;
    /**
     * Constructor method for RemarkHistoryType
     * @uses RemarkHistoryType::setAction()
     * @uses RemarkHistoryType::setHistoryAction()
     * @uses RemarkHistoryType::setRemarkType()
     * @uses RemarkHistoryType::setRemarkActionCode()
     * @uses RemarkHistoryType::setRemarkText()
     * @param string $action
     * @param string $historyAction
     * @param int $remarkType
     * @param string $remarkActionCode
     * @param string $remarkText
     */
    public function __construct($action = null, $historyAction = null, $remarkType = null, $remarkActionCode = null, $remarkText = null)
    {
        $this
            ->setAction($action)
            ->setHistoryAction($historyAction)
            ->setRemarkType($remarkType)
            ->setRemarkActionCode($remarkActionCode)
            ->setRemarkText($remarkText);
    }
    /**
     * Get Action value
     * @return string|null
     */
    public function getAction()
    {
        return $this->Action;
    }
    /**
     * Set Action value
     * @param string $action
     * @return \Sabre\UpdateReservation\StructType\RemarkHistoryType
     */
    public function setAction($action = null)
    {
        // validation for constraint: string
        if (!is_null($action) && !is_string($action)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($action)), __LINE__);
        }
        $this->Action = $action;
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
     * @return \Sabre\UpdateReservation\StructType\RemarkHistoryType
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
     * Get RemarkType value
     * @return int|null
     */
    public function getRemarkType()
    {
        return $this->RemarkType;
    }
    /**
     * Set RemarkType value
     * @param int $remarkType
     * @return \Sabre\UpdateReservation\StructType\RemarkHistoryType
     */
    public function setRemarkType($remarkType = null)
    {
        // validation for constraint: int
        if (!is_null($remarkType) && !is_numeric($remarkType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($remarkType)), __LINE__);
        }
        $this->RemarkType = $remarkType;
        return $this;
    }
    /**
     * Get RemarkActionCode value
     * @return string|null
     */
    public function getRemarkActionCode()
    {
        return $this->RemarkActionCode;
    }
    /**
     * Set RemarkActionCode value
     * @param string $remarkActionCode
     * @return \Sabre\UpdateReservation\StructType\RemarkHistoryType
     */
    public function setRemarkActionCode($remarkActionCode = null)
    {
        // validation for constraint: string
        if (!is_null($remarkActionCode) && !is_string($remarkActionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remarkActionCode)), __LINE__);
        }
        $this->RemarkActionCode = $remarkActionCode;
        return $this;
    }
    /**
     * Get RemarkText value
     * @return string|null
     */
    public function getRemarkText()
    {
        return $this->RemarkText;
    }
    /**
     * Set RemarkText value
     * @param string $remarkText
     * @return \Sabre\UpdateReservation\StructType\RemarkHistoryType
     */
    public function setRemarkText($remarkText = null)
    {
        // validation for constraint: string
        if (!is_null($remarkText) && !is_string($remarkText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($remarkText)), __LINE__);
        }
        $this->RemarkText = $remarkText;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RemarkHistoryType
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
