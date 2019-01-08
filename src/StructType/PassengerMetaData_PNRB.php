<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PassengerMetaData.PNRB StructType
 * @subpackage Structs
 */
class PassengerMetaData_PNRB extends AbstractStructBase
{
    /**
     * The Gender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Gender;
    /**
     * The DateOfBirth
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DateOfBirth;
    /**
     * Constructor method for PassengerMetaData.PNRB
     * @uses PassengerMetaData_PNRB::setGender()
     * @uses PassengerMetaData_PNRB::setDateOfBirth()
     * @param string $gender
     * @param string $dateOfBirth
     */
    public function __construct($gender = null, $dateOfBirth = null)
    {
        $this
            ->setGender($gender)
            ->setDateOfBirth($dateOfBirth);
    }
    /**
     * Get Gender value
     * @return string|null
     */
    public function getGender()
    {
        return $this->Gender;
    }
    /**
     * Set Gender value
     * @param string $gender
     * @return \Sabre\UpdateReservation\StructType\PassengerMetaData_PNRB
     */
    public function setGender($gender = null)
    {
        // validation for constraint: string
        if (!is_null($gender) && !is_string($gender)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($gender)), __LINE__);
        }
        $this->Gender = $gender;
        return $this;
    }
    /**
     * Get DateOfBirth value
     * @return string|null
     */
    public function getDateOfBirth()
    {
        return $this->DateOfBirth;
    }
    /**
     * Set DateOfBirth value
     * @param string $dateOfBirth
     * @return \Sabre\UpdateReservation\StructType\PassengerMetaData_PNRB
     */
    public function setDateOfBirth($dateOfBirth = null)
    {
        // validation for constraint: string
        if (!is_null($dateOfBirth) && !is_string($dateOfBirth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateOfBirth)), __LINE__);
        }
        $this->DateOfBirth = $dateOfBirth;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PassengerMetaData_PNRB
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
