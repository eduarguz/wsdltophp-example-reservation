<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerTypeQuantityType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Specifies a PTC (Passenger Type Code) and the associated number of PTC's - for use in specifying passenger lists.
 * @subpackage Structs
 */
class PassengerTypeQuantityType extends TravelerCountType
{
    /**
     * The BirthDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\BirthDateType
     */
    public $BirthDate;
    /**
     * The Age
     * Meta informations extracted from the WSDL
     * - documentation: Exchange-specific
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AgeType
     */
    public $Age;
    /**
     * The State
     * Meta informations extracted from the WSDL
     * - documentation: Exchange-specific
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\StateType
     */
    public $State;
    /**
     * The TotalNumber
     * Meta informations extracted from the WSDL
     * - documentation: Exchange-specific
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TotalNumberType
     */
    public $TotalNumber;
    /**
     * The changeable
     * Meta informations extracted from the WSDL
     * - default: true
     * @var bool
     */
    public $changeable;
    /**
     * The index
     * Meta informations extracted from the WSDL
     * - documentation: Allows to identify which one of requested passengers this solution relates to.
     * @var int
     */
    public $index;
    /**
     * The requestedPassengerIndex
     * Meta informations extracted from the WSDL
     * - documentation: Allows to identify which one of requested passenger groups from Exchange request this solution relates to.
     * @var int
     */
    public $requestedPassengerIndex;
    /**
     * Constructor method for PassengerTypeQuantityType
     * @uses PassengerTypeQuantityType::setBirthDate()
     * @uses PassengerTypeQuantityType::setAge()
     * @uses PassengerTypeQuantityType::setState()
     * @uses PassengerTypeQuantityType::setTotalNumber()
     * @uses PassengerTypeQuantityType::setChangeable()
     * @uses PassengerTypeQuantityType::setIndex()
     * @uses PassengerTypeQuantityType::setRequestedPassengerIndex()
     * @param \Sabre\UpdateReservation\StructType\BirthDateType $birthDate
     * @param \Sabre\UpdateReservation\StructType\AgeType $age
     * @param \Sabre\UpdateReservation\StructType\StateType $state
     * @param \Sabre\UpdateReservation\StructType\TotalNumberType $totalNumber
     * @param bool $changeable
     * @param int $index
     * @param int $requestedPassengerIndex
     */
    public function __construct(\Sabre\UpdateReservation\StructType\BirthDateType $birthDate = null, \Sabre\UpdateReservation\StructType\AgeType $age = null, \Sabre\UpdateReservation\StructType\StateType $state = null, \Sabre\UpdateReservation\StructType\TotalNumberType $totalNumber = null, $changeable = true, $index = null, $requestedPassengerIndex = null)
    {
        $this
            ->setBirthDate($birthDate)
            ->setAge($age)
            ->setState($state)
            ->setTotalNumber($totalNumber)
            ->setChangeable($changeable)
            ->setIndex($index)
            ->setRequestedPassengerIndex($requestedPassengerIndex);
    }
    /**
     * Get BirthDate value
     * @return \Sabre\UpdateReservation\StructType\BirthDateType|null
     */
    public function getBirthDate()
    {
        return $this->BirthDate;
    }
    /**
     * Set BirthDate value
     * @param \Sabre\UpdateReservation\StructType\BirthDateType $birthDate
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType
     */
    public function setBirthDate(\Sabre\UpdateReservation\StructType\BirthDateType $birthDate = null)
    {
        $this->BirthDate = $birthDate;
        return $this;
    }
    /**
     * Get Age value
     * @return \Sabre\UpdateReservation\StructType\AgeType|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @param \Sabre\UpdateReservation\StructType\AgeType $age
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType
     */
    public function setAge(\Sabre\UpdateReservation\StructType\AgeType $age = null)
    {
        $this->Age = $age;
        return $this;
    }
    /**
     * Get State value
     * @return \Sabre\UpdateReservation\StructType\StateType|null
     */
    public function getState()
    {
        return $this->State;
    }
    /**
     * Set State value
     * @param \Sabre\UpdateReservation\StructType\StateType $state
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType
     */
    public function setState(\Sabre\UpdateReservation\StructType\StateType $state = null)
    {
        $this->State = $state;
        return $this;
    }
    /**
     * Get TotalNumber value
     * @return \Sabre\UpdateReservation\StructType\TotalNumberType|null
     */
    public function getTotalNumber()
    {
        return $this->TotalNumber;
    }
    /**
     * Set TotalNumber value
     * @param \Sabre\UpdateReservation\StructType\TotalNumberType $totalNumber
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType
     */
    public function setTotalNumber(\Sabre\UpdateReservation\StructType\TotalNumberType $totalNumber = null)
    {
        $this->TotalNumber = $totalNumber;
        return $this;
    }
    /**
     * Get changeable value
     * @return bool|null
     */
    public function getChangeable()
    {
        return $this->changeable;
    }
    /**
     * Set changeable value
     * @param bool $changeable
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType
     */
    public function setChangeable($changeable = true)
    {
        // validation for constraint: boolean
        if (!is_null($changeable) && !is_bool($changeable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($changeable)), __LINE__);
        }
        $this->changeable = $changeable;
        return $this;
    }
    /**
     * Get index value
     * @return int|null
     */
    public function getIndex()
    {
        return $this->index;
    }
    /**
     * Set index value
     * @param int $index
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType
     */
    public function setIndex($index = null)
    {
        // validation for constraint: int
        if (!is_null($index) && !is_numeric($index)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($index)), __LINE__);
        }
        $this->index = $index;
        return $this;
    }
    /**
     * Get requestedPassengerIndex value
     * @return int|null
     */
    public function getRequestedPassengerIndex()
    {
        return $this->requestedPassengerIndex;
    }
    /**
     * Set requestedPassengerIndex value
     * @param int $requestedPassengerIndex
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType
     */
    public function setRequestedPassengerIndex($requestedPassengerIndex = null)
    {
        // validation for constraint: int
        if (!is_null($requestedPassengerIndex) && !is_numeric($requestedPassengerIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($requestedPassengerIndex)), __LINE__);
        }
        $this->requestedPassengerIndex = $requestedPassengerIndex;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PassengerTypeQuantityType
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
