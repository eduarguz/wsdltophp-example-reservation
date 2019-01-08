<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Discount StructType
 * Meta informations extracted from the WSDL
 * - documentation: Describes Discount in room rate
 * @subpackage Structs
 */
class Discount extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Code;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Name;
    /**
     * The Amount
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for currency Amount
     * - fractionDigits: 2
     * @var float
     */
    public $Amount;
    /**
     * The CurrencyCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Currency Code
     * - maxLength: 3
     * @var string
     */
    public $CurrencyCode;
    /**
     * The DiscountDescription
     * Meta informations extracted from the WSDL
     * - documentation: Discount description
     * - minOccurs: 0
     * @var string
     */
    public $DiscountDescription;
    /**
     * The amount
     * Meta informations extracted from the WSDL
     * - documentation: Discount amount
     * @var float
     */
    public $amount;
    /**
     * The currencyCode
     * Meta informations extracted from the WSDL
     * - documentation: Currency code
     * @var string
     */
    public $currencyCode;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - documentation: Discount type
     * @var string
     */
    public $type;
    /**
     * The category
     * @var string
     */
    public $category;
    /**
     * The promoType
     * @var string
     */
    public $promoType;
    /**
     * The promoCode
     * @var string
     */
    public $promoCode;
    /**
     * Constructor method for Discount
     * @uses Discount::setCode()
     * @uses Discount::setName()
     * @uses Discount::setAmount()
     * @uses Discount::setCurrencyCode()
     * @uses Discount::setDiscountDescription()
     * @uses Discount::setAmount_1()
     * @uses Discount::setCurrencyCode_1()
     * @uses Discount::setType()
     * @uses Discount::setCategory()
     * @uses Discount::setPromoType()
     * @uses Discount::setPromoCode()
     * @param string $code
     * @param string $name
     * @param float $amount
     * @param string $currencyCode
     * @param string $discountDescription
     * @param float $amount
     * @param string $currencyCode
     * @param string $type
     * @param string $category
     * @param string $promoType
     * @param string $promoCode
     */
    public function __construct($code = null, $name = null, $amount = null, $currencyCode = null, $discountDescription = null, $amount_1 = null, $currencyCode_1 = null, $type = null, $category = null, $promoType = null, $promoCode = null)
    {
        $this
            ->setCode($code)
            ->setName($name)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode)
            ->setDiscountDescription($discountDescription)
            ->setAmount_1($amount_1)
            ->setCurrencyCode_1($currencyCode_1)
            ->setType($type)
            ->setCategory($category)
            ->setPromoType($promoType)
            ->setPromoCode($promoCode);
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
     * @return \Sabre\UpdateReservation\StructType\Discount
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
     * @return \Sabre\UpdateReservation\StructType\Discount
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
     * Get Amount value
     * @return float|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Sabre\UpdateReservation\StructType\Discount
     */
    public function setAmount($amount = null)
    {
        // validation for constraint: fractionDigits
        if (is_float($amount) && strlen(substr($amount, strpos($amount, '.') + 1)) !== 2) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 2 fraction digits, "%d" given', strlen(substr($amount, strpos($amount, '.') + 1))), __LINE__);
        }
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Sabre\UpdateReservation\StructType\Discount
     */
    public function setCurrencyCode($currencyCode = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($currencyCode) && strlen($currencyCode) > 3) || (is_array($currencyCode) && count($currencyCode) > 3)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 3 element(s) or a scalar of 3 character(s) at most, "%d" length given', is_scalar($currencyCode) ? strlen($currencyCode) : count($currencyCode)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($currencyCode) && !is_string($currencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode)), __LINE__);
        }
        $this->CurrencyCode = $currencyCode;
        return $this;
    }
    /**
     * Get DiscountDescription value
     * @return string|null
     */
    public function getDiscountDescription()
    {
        return $this->DiscountDescription;
    }
    /**
     * Set DiscountDescription value
     * @param string $discountDescription
     * @return \Sabre\UpdateReservation\StructType\Discount
     */
    public function setDiscountDescription($discountDescription = null)
    {
        // validation for constraint: string
        if (!is_null($discountDescription) && !is_string($discountDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($discountDescription)), __LINE__);
        }
        $this->DiscountDescription = $discountDescription;
        return $this;
    }
    /**
     * Get Amount value
     * @return float|null
     */
    public function getAmount_1()
    {
        return $this->amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \Sabre\UpdateReservation\StructType\Discount
     */
    public function setAmount_1($amount_1 = null)
    {
        $this->amount = $amount_1;
        return $this;
    }
    /**
     * Get CurrencyCode value
     * @return string|null
     */
    public function getCurrencyCode_1()
    {
        return $this->currencyCode;
    }
    /**
     * Set CurrencyCode value
     * @param string $currencyCode
     * @return \Sabre\UpdateReservation\StructType\Discount
     */
    public function setCurrencyCode_1($currencyCode_1 = null)
    {
        // validation for constraint: string
        if (!is_null($currencyCode_1) && !is_string($currencyCode_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($currencyCode_1)), __LINE__);
        }
        $this->currencyCode = $currencyCode_1;
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\Discount
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Sabre\UpdateReservation\StructType\Discount
     */
    public function setCategory($category = null)
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($category)), __LINE__);
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get promoType value
     * @return string|null
     */
    public function getPromoType()
    {
        return $this->promoType;
    }
    /**
     * Set promoType value
     * @param string $promoType
     * @return \Sabre\UpdateReservation\StructType\Discount
     */
    public function setPromoType($promoType = null)
    {
        // validation for constraint: string
        if (!is_null($promoType) && !is_string($promoType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promoType)), __LINE__);
        }
        $this->promoType = $promoType;
        return $this;
    }
    /**
     * Get promoCode value
     * @return string|null
     */
    public function getPromoCode()
    {
        return $this->promoCode;
    }
    /**
     * Set promoCode value
     * @param string $promoCode
     * @return \Sabre\UpdateReservation\StructType\Discount
     */
    public function setPromoCode($promoCode = null)
    {
        // validation for constraint: string
        if (!is_null($promoCode) && !is_string($promoCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promoCode)), __LINE__);
        }
        $this->promoCode = $promoCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Discount
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
