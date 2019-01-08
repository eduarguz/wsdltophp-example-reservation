<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Promotion StructType
 * @subpackage Structs
 */
class Promotion extends AccountingTransactionAmountWithRule
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - maxOccurs: 50
     * - minOccurs: 0
     * @var string[]
     */
    public $Code;
    /**
     * The type
     * @var string
     */
    public $type;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Percentage
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $Percentage;
    /**
     * The OfferName
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $OfferName;
    /**
     * Constructor method for Promotion
     * @uses Promotion::setCode()
     * @uses Promotion::setType()
     * @uses Promotion::setType_1()
     * @uses Promotion::setPercentage()
     * @uses Promotion::setOfferName()
     * @param string[] $code
     * @param string $type
     * @param string $type
     * @param float $percentage
     * @param string $offerName
     */
    public function __construct(array $code = array(), $type = null, $type_1 = null, $percentage = null, $offerName = null)
    {
        $this
            ->setCode($code)
            ->setType($type)
            ->setType_1($type_1)
            ->setPercentage($percentage)
            ->setOfferName($offerName);
    }
    /**
     * Get Code value
     * @return string[]|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @throws \InvalidArgumentException
     * @param string[] $code
     * @return \Sabre\UpdateReservation\StructType\Promotion
     */
    public function setCode(array $code = array())
    {
        foreach ($code as $promotionCodeItem) {
            // validation for constraint: itemType
            if (!is_string($promotionCodeItem)) {
                throw new \InvalidArgumentException(sprintf('The Code property can only contain items of string, "%s" given', is_object($promotionCodeItem) ? get_class($promotionCodeItem) : gettype($promotionCodeItem)), __LINE__);
            }
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Add item to Code value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\Promotion
     */
    public function addToCode($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Code property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Code[] = $item;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\Promotion
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\PromotionEnumtype::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\PromotionEnumtype::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType_1()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\Promotion
     */
    public function setType_1($type_1 = null)
    {
        // validation for constraint: string
        if (!is_null($type_1) && !is_string($type_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type_1)), __LINE__);
        }
        $this->Type = $type_1;
        return $this;
    }
    /**
     * Get Percentage value
     * @return float|null
     */
    public function getPercentage()
    {
        return $this->Percentage;
    }
    /**
     * Set Percentage value
     * @param float $percentage
     * @return \Sabre\UpdateReservation\StructType\Promotion
     */
    public function setPercentage($percentage = null)
    {
        $this->Percentage = $percentage;
        return $this;
    }
    /**
     * Get OfferName value
     * @return string|null
     */
    public function getOfferName()
    {
        return $this->OfferName;
    }
    /**
     * Set OfferName value
     * @param string $offerName
     * @return \Sabre\UpdateReservation\StructType\Promotion
     */
    public function setOfferName($offerName = null)
    {
        // validation for constraint: string
        if (!is_null($offerName) && !is_string($offerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerName)), __LINE__);
        }
        $this->OfferName = $offerName;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Promotion
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
