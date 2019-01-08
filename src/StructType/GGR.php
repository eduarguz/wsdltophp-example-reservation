<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GGR StructType
 * @subpackage Structs
 */
class GGR extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The WarrantCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $WarrantCode;
    /**
     * The DebtorCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $DebtorCode;
    /**
     * The ObjectCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $ObjectCode;
    /**
     * Constructor method for GGR
     * @uses GGR::setType()
     * @uses GGR::setWarrantCode()
     * @uses GGR::setDebtorCode()
     * @uses GGR::setObjectCode()
     * @param string $type
     * @param string $warrantCode
     * @param string $debtorCode
     * @param string $objectCode
     */
    public function __construct($type = null, $warrantCode = null, $debtorCode = null, $objectCode = null)
    {
        $this
            ->setType($type)
            ->setWarrantCode($warrantCode)
            ->setDebtorCode($debtorCode)
            ->setObjectCode($objectCode);
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
     * @return \Sabre\UpdateReservation\StructType\GGR
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
     * Get WarrantCode value
     * @return string|null
     */
    public function getWarrantCode()
    {
        return $this->WarrantCode;
    }
    /**
     * Set WarrantCode value
     * @param string $warrantCode
     * @return \Sabre\UpdateReservation\StructType\GGR
     */
    public function setWarrantCode($warrantCode = null)
    {
        // validation for constraint: string
        if (!is_null($warrantCode) && !is_string($warrantCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($warrantCode)), __LINE__);
        }
        $this->WarrantCode = $warrantCode;
        return $this;
    }
    /**
     * Get DebtorCode value
     * @return string|null
     */
    public function getDebtorCode()
    {
        return $this->DebtorCode;
    }
    /**
     * Set DebtorCode value
     * @param string $debtorCode
     * @return \Sabre\UpdateReservation\StructType\GGR
     */
    public function setDebtorCode($debtorCode = null)
    {
        // validation for constraint: string
        if (!is_null($debtorCode) && !is_string($debtorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($debtorCode)), __LINE__);
        }
        $this->DebtorCode = $debtorCode;
        return $this;
    }
    /**
     * Get ObjectCode value
     * @return string|null
     */
    public function getObjectCode()
    {
        return $this->ObjectCode;
    }
    /**
     * Set ObjectCode value
     * @param string $objectCode
     * @return \Sabre\UpdateReservation\StructType\GGR
     */
    public function setObjectCode($objectCode = null)
    {
        // validation for constraint: string
        if (!is_null($objectCode) && !is_string($objectCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($objectCode)), __LINE__);
        }
        $this->ObjectCode = $objectCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\GGR
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
