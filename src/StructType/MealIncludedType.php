<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MealIncludedType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Defines which meals are included with this rate program
 * @subpackage Structs
 */
class MealIncludedType extends AbstractStructBase
{
    /**
     * The Breakfast
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $Breakfast;
    /**
     * The Lunch
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $Lunch;
    /**
     * The Dinner
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var bool
     */
    public $Dinner;
    /**
     * The MealPlanIndicator
     * Meta informations extracted from the WSDL
     * - documentation: When true Meal Plan is included.
     * - use: optional
     * @var bool
     */
    public $MealPlanIndicator;
    /**
     * The MealPlanCode
     * Meta informations extracted from the WSDL
     * - documentation: Used to Identify the types of meals included. Refer to Open Travel Code List Meal Plan Type (MPT) list of codes.
     * - use: optional
     * @var string
     */
    public $MealPlanCode;
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
     * Constructor method for MealIncludedType
     * @uses MealIncludedType::setBreakfast()
     * @uses MealIncludedType::setLunch()
     * @uses MealIncludedType::setDinner()
     * @uses MealIncludedType::setMealPlanIndicator()
     * @uses MealIncludedType::setMealPlanCode()
     * @uses MealIncludedType::setGuestCount()
     * @uses MealIncludedType::setStartDate()
     * @uses MealIncludedType::setEndDate()
     * @uses MealIncludedType::setNumberOfNights()
     * @uses MealIncludedType::setAmount()
     * @uses MealIncludedType::setCurrencyCode()
     * @param bool $breakfast
     * @param bool $lunch
     * @param bool $dinner
     * @param bool $mealPlanIndicator
     * @param string $mealPlanCode
     * @param int $guestCount
     * @param string $startDate
     * @param string $endDate
     * @param int $numberOfNights
     * @param float $amount
     * @param string $currencyCode
     */
    public function __construct($breakfast = null, $lunch = null, $dinner = null, $mealPlanIndicator = null, $mealPlanCode = null, $guestCount = null, $startDate = null, $endDate = null, $numberOfNights = null, $amount = null, $currencyCode = null)
    {
        $this
            ->setBreakfast($breakfast)
            ->setLunch($lunch)
            ->setDinner($dinner)
            ->setMealPlanIndicator($mealPlanIndicator)
            ->setMealPlanCode($mealPlanCode)
            ->setGuestCount($guestCount)
            ->setStartDate($startDate)
            ->setEndDate($endDate)
            ->setNumberOfNights($numberOfNights)
            ->setAmount($amount)
            ->setCurrencyCode($currencyCode);
    }
    /**
     * Get Breakfast value
     * @return bool|null
     */
    public function getBreakfast()
    {
        return $this->Breakfast;
    }
    /**
     * Set Breakfast value
     * @param bool $breakfast
     * @return \Sabre\UpdateReservation\StructType\MealIncludedType
     */
    public function setBreakfast($breakfast = null)
    {
        // validation for constraint: boolean
        if (!is_null($breakfast) && !is_bool($breakfast)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($breakfast)), __LINE__);
        }
        $this->Breakfast = $breakfast;
        return $this;
    }
    /**
     * Get Lunch value
     * @return bool|null
     */
    public function getLunch()
    {
        return $this->Lunch;
    }
    /**
     * Set Lunch value
     * @param bool $lunch
     * @return \Sabre\UpdateReservation\StructType\MealIncludedType
     */
    public function setLunch($lunch = null)
    {
        // validation for constraint: boolean
        if (!is_null($lunch) && !is_bool($lunch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($lunch)), __LINE__);
        }
        $this->Lunch = $lunch;
        return $this;
    }
    /**
     * Get Dinner value
     * @return bool|null
     */
    public function getDinner()
    {
        return $this->Dinner;
    }
    /**
     * Set Dinner value
     * @param bool $dinner
     * @return \Sabre\UpdateReservation\StructType\MealIncludedType
     */
    public function setDinner($dinner = null)
    {
        // validation for constraint: boolean
        if (!is_null($dinner) && !is_bool($dinner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($dinner)), __LINE__);
        }
        $this->Dinner = $dinner;
        return $this;
    }
    /**
     * Get MealPlanIndicator value
     * @return bool|null
     */
    public function getMealPlanIndicator()
    {
        return $this->MealPlanIndicator;
    }
    /**
     * Set MealPlanIndicator value
     * @param bool $mealPlanIndicator
     * @return \Sabre\UpdateReservation\StructType\MealIncludedType
     */
    public function setMealPlanIndicator($mealPlanIndicator = null)
    {
        // validation for constraint: boolean
        if (!is_null($mealPlanIndicator) && !is_bool($mealPlanIndicator)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($mealPlanIndicator)), __LINE__);
        }
        $this->MealPlanIndicator = $mealPlanIndicator;
        return $this;
    }
    /**
     * Get MealPlanCode value
     * @return string|null
     */
    public function getMealPlanCode()
    {
        return $this->MealPlanCode;
    }
    /**
     * Set MealPlanCode value
     * @param string $mealPlanCode
     * @return \Sabre\UpdateReservation\StructType\MealIncludedType
     */
    public function setMealPlanCode($mealPlanCode = null)
    {
        // validation for constraint: string
        if (!is_null($mealPlanCode) && !is_string($mealPlanCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mealPlanCode)), __LINE__);
        }
        $this->MealPlanCode = $mealPlanCode;
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
     * @return \Sabre\UpdateReservation\StructType\MealIncludedType
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
     * @return \Sabre\UpdateReservation\StructType\MealIncludedType
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
     * @return \Sabre\UpdateReservation\StructType\MealIncludedType
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
     * @return \Sabre\UpdateReservation\StructType\MealIncludedType
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
     * @return \Sabre\UpdateReservation\StructType\MealIncludedType
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
     * @return \Sabre\UpdateReservation\StructType\MealIncludedType
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\MealIncludedType
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
