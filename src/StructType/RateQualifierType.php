<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RateQualifierType StructType
 * @subpackage Structs
 */
class RateQualifierType extends AbstractStructBase
{
    /**
     * The AccountID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccountID;
    /**
     * The AccountName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AccountName;
    /**
     * The PromotionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PromotionCode;
    /**
     * The SpecialInput
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SpecialInputType[]
     */
    public $SpecialInput;
    /**
     * Constructor method for RateQualifierType
     * @uses RateQualifierType::setAccountID()
     * @uses RateQualifierType::setAccountName()
     * @uses RateQualifierType::setPromotionCode()
     * @uses RateQualifierType::setSpecialInput()
     * @param string $accountID
     * @param string $accountName
     * @param string $promotionCode
     * @param \Sabre\UpdateReservation\StructType\SpecialInputType[] $specialInput
     */
    public function __construct($accountID = null, $accountName = null, $promotionCode = null, array $specialInput = array())
    {
        $this
            ->setAccountID($accountID)
            ->setAccountName($accountName)
            ->setPromotionCode($promotionCode)
            ->setSpecialInput($specialInput);
    }
    /**
     * Get AccountID value
     * @return string|null
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }
    /**
     * Set AccountID value
     * @param string $accountID
     * @return \Sabre\UpdateReservation\StructType\RateQualifierType
     */
    public function setAccountID($accountID = null)
    {
        // validation for constraint: string
        if (!is_null($accountID) && !is_string($accountID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountID)), __LINE__);
        }
        $this->AccountID = $accountID;
        return $this;
    }
    /**
     * Get AccountName value
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->AccountName;
    }
    /**
     * Set AccountName value
     * @param string $accountName
     * @return \Sabre\UpdateReservation\StructType\RateQualifierType
     */
    public function setAccountName($accountName = null)
    {
        // validation for constraint: string
        if (!is_null($accountName) && !is_string($accountName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountName)), __LINE__);
        }
        $this->AccountName = $accountName;
        return $this;
    }
    /**
     * Get PromotionCode value
     * @return string|null
     */
    public function getPromotionCode()
    {
        return $this->PromotionCode;
    }
    /**
     * Set PromotionCode value
     * @param string $promotionCode
     * @return \Sabre\UpdateReservation\StructType\RateQualifierType
     */
    public function setPromotionCode($promotionCode = null)
    {
        // validation for constraint: string
        if (!is_null($promotionCode) && !is_string($promotionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promotionCode)), __LINE__);
        }
        $this->PromotionCode = $promotionCode;
        return $this;
    }
    /**
     * Get SpecialInput value
     * @return \Sabre\UpdateReservation\StructType\SpecialInputType[]|null
     */
    public function getSpecialInput()
    {
        return $this->SpecialInput;
    }
    /**
     * Set SpecialInput value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SpecialInputType[] $specialInput
     * @return \Sabre\UpdateReservation\StructType\RateQualifierType
     */
    public function setSpecialInput(array $specialInput = array())
    {
        foreach ($specialInput as $rateQualifierTypeSpecialInputItem) {
            // validation for constraint: itemType
            if (!$rateQualifierTypeSpecialInputItem instanceof \Sabre\UpdateReservation\StructType\SpecialInputType) {
                throw new \InvalidArgumentException(sprintf('The SpecialInput property can only contain items of \Sabre\UpdateReservation\StructType\SpecialInputType, "%s" given', is_object($rateQualifierTypeSpecialInputItem) ? get_class($rateQualifierTypeSpecialInputItem) : gettype($rateQualifierTypeSpecialInputItem)), __LINE__);
            }
        }
        $this->SpecialInput = $specialInput;
        return $this;
    }
    /**
     * Add item to SpecialInput value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\SpecialInputType $item
     * @return \Sabre\UpdateReservation\StructType\RateQualifierType
     */
    public function addToSpecialInput(\Sabre\UpdateReservation\StructType\SpecialInputType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\SpecialInputType) {
            throw new \InvalidArgumentException(sprintf('The SpecialInput property can only contain items of \Sabre\UpdateReservation\StructType\SpecialInputType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->SpecialInput[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RateQualifierType
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
