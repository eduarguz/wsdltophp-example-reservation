<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareDescription StructType
 * @subpackage Structs
 */
class FareDescription extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Code;
    /**
     * The Detail
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Detail_1[]
     */
    public $Detail;
    /**
     * The Condition
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Condition[]
     */
    public $Condition;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Fees
     */
    public $Fees;
    /**
     * Constructor method for FareDescription
     * @uses FareDescription::setName()
     * @uses FareDescription::setCode()
     * @uses FareDescription::setDetail()
     * @uses FareDescription::setCondition()
     * @uses FareDescription::setFees()
     * @param string $name
     * @param string $code
     * @param \Sabre\UpdateReservation\StructType\Detail_1[] $detail
     * @param \Sabre\UpdateReservation\StructType\Condition[] $condition
     * @param \Sabre\UpdateReservation\StructType\Fees $fees
     */
    public function __construct($name = null, $code = null, array $detail = array(), array $condition = array(), \Sabre\UpdateReservation\StructType\Fees $fees = null)
    {
        $this
            ->setName($name)
            ->setCode($code)
            ->setDetail($detail)
            ->setCondition($condition)
            ->setFees($fees);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\FareDescription
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
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
     * @return \Sabre\UpdateReservation\StructType\FareDescription
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
     * Get Detail value
     * @return \Sabre\UpdateReservation\StructType\Detail_1[]|null
     */
    public function getDetail()
    {
        return $this->Detail;
    }
    /**
     * Set Detail value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Detail_1[] $detail
     * @return \Sabre\UpdateReservation\StructType\FareDescription
     */
    public function setDetail(array $detail = array())
    {
        foreach ($detail as $fareDescriptionDetailItem) {
            // validation for constraint: itemType
            if (!$fareDescriptionDetailItem instanceof \Sabre\UpdateReservation\StructType\Detail_1) {
                throw new \InvalidArgumentException(sprintf('The Detail property can only contain items of \Sabre\UpdateReservation\StructType\Detail_1, "%s" given', is_object($fareDescriptionDetailItem) ? get_class($fareDescriptionDetailItem) : gettype($fareDescriptionDetailItem)), __LINE__);
            }
        }
        $this->Detail = $detail;
        return $this;
    }
    /**
     * Add item to Detail value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Detail_1 $item
     * @return \Sabre\UpdateReservation\StructType\FareDescription
     */
    public function addToDetail(\Sabre\UpdateReservation\StructType\Detail_1 $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Detail_1) {
            throw new \InvalidArgumentException(sprintf('The Detail property can only contain items of \Sabre\UpdateReservation\StructType\Detail_1, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Detail[] = $item;
        return $this;
    }
    /**
     * Get Condition value
     * @return \Sabre\UpdateReservation\StructType\Condition[]|null
     */
    public function getCondition()
    {
        return $this->Condition;
    }
    /**
     * Set Condition value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Condition[] $condition
     * @return \Sabre\UpdateReservation\StructType\FareDescription
     */
    public function setCondition(array $condition = array())
    {
        foreach ($condition as $fareDescriptionConditionItem) {
            // validation for constraint: itemType
            if (!$fareDescriptionConditionItem instanceof \Sabre\UpdateReservation\StructType\Condition) {
                throw new \InvalidArgumentException(sprintf('The Condition property can only contain items of \Sabre\UpdateReservation\StructType\Condition, "%s" given', is_object($fareDescriptionConditionItem) ? get_class($fareDescriptionConditionItem) : gettype($fareDescriptionConditionItem)), __LINE__);
            }
        }
        $this->Condition = $condition;
        return $this;
    }
    /**
     * Add item to Condition value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Condition $item
     * @return \Sabre\UpdateReservation\StructType\FareDescription
     */
    public function addToCondition(\Sabre\UpdateReservation\StructType\Condition $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Condition) {
            throw new \InvalidArgumentException(sprintf('The Condition property can only contain items of \Sabre\UpdateReservation\StructType\Condition, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Condition[] = $item;
        return $this;
    }
    /**
     * Get Fees value
     * @return \Sabre\UpdateReservation\StructType\Fees|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \Sabre\UpdateReservation\StructType\Fees $fees
     * @return \Sabre\UpdateReservation\StructType\FareDescription
     */
    public function setFees(\Sabre\UpdateReservation\StructType\Fees $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FareDescription
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
