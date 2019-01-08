<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalDetailType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Use for free text relating to check-in/check-out, surcharge and other details. Uses OTA ADT Table in Code Attribute
 * @subpackage Structs
 */
class AdditionalDetailType extends AbstractStructBase
{
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Text;
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Positive Integer to denote OTA Codes
     * - minInclusive: 1
     * @var int
     */
    public $Code;
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
     * The GuestCount
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $GuestCount;
    /**
     * The StartDate
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $StartDate;
    /**
     * The EndDate
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $EndDate;
    /**
     * The NumberOfNights
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var int
     */
    public $NumberOfNights;
    /**
     * Constructor method for AdditionalDetailType
     * @uses AdditionalDetailType::setText()
     * @uses AdditionalDetailType::setCode()
     * @uses AdditionalDetailType::setAmount()
     * @uses AdditionalDetailType::setCurrencyCode()
     * @uses AdditionalDetailType::setGuestCount()
     * @uses AdditionalDetailType::setStartDate()
     * @uses AdditionalDetailType::setEndDate()
     * @uses AdditionalDetailType::setNumberOfNights()
     * @param string[] $text
     * @param int $code
     * @param float $amount
     * @param string $currencyCode
     * @param int $guestCount
     * @param string $startDate
     * @param string $endDate
     * @param int $numberOfNights
     */
    public function __construct(array $text = array(), $code = null, $amount = null, $currencyCode = null, $guestCount = null, $startDate = null, $endDate = null, $numberOfNights = null)
    {
        $this
            ->setText($text)
            ->setCode($code)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode)
            ->setGuestCount($guestCount)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setNumberOfNights($numberOfNights);
    }
    /**
     * Get Text value
     * @return string[]|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @throws \InvalidArgumentException
     * @param string[] $text
     * @return \Sabre\UpdateReservation\StructType\AdditionalDetailType
     */
    public function setText(array $text = array())
    {
        foreach ($text as $additionalDetailTypeTextItem) {
            // validation for constraint: itemType
            if (!is_string($additionalDetailTypeTextItem)) {
                throw new \InvalidArgumentException(sprintf('The Text property can only contain items of string, "%s" given', is_object($additionalDetailTypeTextItem) ? get_class($additionalDetailTypeTextItem) : gettype($additionalDetailTypeTextItem)), __LINE__);
            }
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Add item to Text value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\AdditionalDetailType
     */
    public function addToText($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Text property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Text[] = $item;
        return $this;
    }
    /**
     * Get Code value
     * @return int|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Sabre\UpdateReservation\StructType\AdditionalDetailType
     */
    public function setCode($code = null)
    {
        // validation for constraint: minInclusive
        if ($code < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $code), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($code) && !is_numeric($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
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
     * @return \Sabre\UpdateReservation\StructType\AdditionalDetailType
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
     * @return \Sabre\UpdateReservation\StructType\AdditionalDetailType
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
     * Get GuestCount value
     * @return int|null
     */
    public function getGuestCount()
    {
        return $this->GuestCount;
    }
    /**
     * Set GuestCount value
     * @param int $guestCount
     * @return \Sabre\UpdateReservation\StructType\AdditionalDetailType
     */
    public function setGuestCount($guestCount = null)
    {
        // validation for constraint: int
        if (!is_null($guestCount) && !is_numeric($guestCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($guestCount)), __LINE__);
        }
        $this->GuestCount = $guestCount;
        return $this;
    }
    /**
     * Get StartDate value
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }
    /**
     * Set StartDate value
     * @param string $startDate
     * @return \Sabre\UpdateReservation\StructType\AdditionalDetailType
     */
    public function setStartDate($startDate = null)
    {
        // validation for constraint: string
        if (!is_null($startDate) && !is_string($startDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDate)), __LINE__);
        }
        $this->StartDate = $startDate;
        return $this;
    }
    /**
     * Get EndDate value
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }
    /**
     * Set EndDate value
     * @param string $endDate
     * @return \Sabre\UpdateReservation\StructType\AdditionalDetailType
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        $this->EndDate = $endDate;
        return $this;
    }
    /**
     * Get NumberOfNights value
     * @return int|null
     */
    public function getNumberOfNights()
    {
        return $this->NumberOfNights;
    }
    /**
     * Set NumberOfNights value
     * @param int $numberOfNights
     * @return \Sabre\UpdateReservation\StructType\AdditionalDetailType
     */
    public function setNumberOfNights($numberOfNights = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfNights) && !is_numeric($numberOfNights)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfNights)), __LINE__);
        }
        $this->NumberOfNights = $numberOfNights;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AdditionalDetailType
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
