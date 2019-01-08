<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonName StructType
 * @subpackage Structs
 */
class PersonName extends AbstractStructBase
{
    /**
     * The Prefix
     * Meta informations extracted from the WSDL
     * - documentation: Salutation of honorific. (e.g., Mr. Mrs., Ms., Miss, Dr.)
     * - minOccurs: 0
     * - maxLength: 16
     * - minLength: 1
     * @var string
     */
    public $Prefix;
    /**
     * The Given
     * Meta informations extracted from the WSDL
     * - documentation: Given name, first name or names
     * - minOccurs: 0
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $Given;
    /**
     * The Middle
     * Meta informations extracted from the WSDL
     * - documentation: The middle name of the person name
     * - minOccurs: 0
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $Middle;
    /**
     * The Surname
     * Meta informations extracted from the WSDL
     * - documentation: Family name aslo known as last name.
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $Surname;
    /**
     * The Suffix
     * Meta informations extracted from the WSDL
     * - documentation: Hold various name suffixes and letters (e.g. Jr., Sr., III, Ret., Esq.).
     * - minOccurs: 0
     * - maxLength: 16
     * - minLength: 1
     * @var string
     */
    public $Suffix;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The PreferredFirstName
     * Meta informations extracted from the WSDL
     * - documentation: Any preferred names for first name used instead of GivenName
     * - minOccurs: 0
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $PreferredFirstName;
    /**
     * The PreferredSurname
     * Meta informations extracted from the WSDL
     * - documentation: Any preferred names for last names used instead of surname
     * - minOccurs: 0
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $PreferredSurname;
    /**
     * Constructor method for PersonName
     * @uses PersonName::setPrefix()
     * @uses PersonName::setGiven()
     * @uses PersonName::setMiddle()
     * @uses PersonName::setSurname()
     * @uses PersonName::setSuffix()
     * @uses PersonName::setType()
     * @uses PersonName::setPreferredFirstName()
     * @uses PersonName::setPreferredSurname()
     * @param string $prefix
     * @param string $given
     * @param string $middle
     * @param string $surname
     * @param string $suffix
     * @param string $type
     * @param string $preferredFirstName
     * @param string $preferredSurname
     */
    public function __construct($prefix = null, $given = null, $middle = null, $surname = null, $suffix = null, $type = null, $preferredFirstName = null, $preferredSurname = null)
    {
        $this
            ->setPrefix($prefix)
            ->setGiven($given)
            ->setMiddle($middle)
            ->setSurname($surname)
            ->setSuffix($suffix)
            ->setType($type)
            ->setPreferredFirstName($preferredFirstName)
            ->setPreferredSurname($preferredSurname);
    }
    /**
     * Get Prefix value
     * @return string|null
     */
    public function getPrefix()
    {
        return $this->Prefix;
    }
    /**
     * Set Prefix value
     * @param string $prefix
     * @return \Sabre\UpdateReservation\StructType\PersonName
     */
    public function setPrefix($prefix = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($prefix) && strlen($prefix) > 16) || (is_array($prefix) && count($prefix) > 16)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 16 element(s) or a scalar of 16 character(s) at most, "%d" length given', is_scalar($prefix) ? strlen($prefix) : count($prefix)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($prefix) && strlen($prefix) < 1) || (is_array($prefix) && count($prefix) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prefix)), __LINE__);
        }
        $this->Prefix = $prefix;
        return $this;
    }
    /**
     * Get Given value
     * @return string|null
     */
    public function getGiven()
    {
        return $this->Given;
    }
    /**
     * Set Given value
     * @param string $given
     * @return \Sabre\UpdateReservation\StructType\PersonName
     */
    public function setGiven($given = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($given) && strlen($given) > 100) || (is_array($given) && count($given) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($given) ? strlen($given) : count($given)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($given) && strlen($given) < 1) || (is_array($given) && count($given) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($given) && !is_string($given)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($given)), __LINE__);
        }
        $this->Given = $given;
        return $this;
    }
    /**
     * Get Middle value
     * @return string|null
     */
    public function getMiddle()
    {
        return $this->Middle;
    }
    /**
     * Set Middle value
     * @param string $middle
     * @return \Sabre\UpdateReservation\StructType\PersonName
     */
    public function setMiddle($middle = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($middle) && strlen($middle) > 100) || (is_array($middle) && count($middle) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($middle) ? strlen($middle) : count($middle)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($middle) && strlen($middle) < 1) || (is_array($middle) && count($middle) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($middle) && !is_string($middle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($middle)), __LINE__);
        }
        $this->Middle = $middle;
        return $this;
    }
    /**
     * Get Surname value
     * @return string|null
     */
    public function getSurname()
    {
        return $this->Surname;
    }
    /**
     * Set Surname value
     * @param string $surname
     * @return \Sabre\UpdateReservation\StructType\PersonName
     */
    public function setSurname($surname = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($surname) && strlen($surname) > 100) || (is_array($surname) && count($surname) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($surname) ? strlen($surname) : count($surname)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($surname) && strlen($surname) < 1) || (is_array($surname) && count($surname) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($surname) && !is_string($surname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($surname)), __LINE__);
        }
        $this->Surname = $surname;
        return $this;
    }
    /**
     * Get Suffix value
     * @return string|null
     */
    public function getSuffix()
    {
        return $this->Suffix;
    }
    /**
     * Set Suffix value
     * @param string $suffix
     * @return \Sabre\UpdateReservation\StructType\PersonName
     */
    public function setSuffix($suffix = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($suffix) && strlen($suffix) > 16) || (is_array($suffix) && count($suffix) > 16)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 16 element(s) or a scalar of 16 character(s) at most, "%d" length given', is_scalar($suffix) ? strlen($suffix) : count($suffix)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($suffix) && strlen($suffix) < 1) || (is_array($suffix) && count($suffix) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($suffix) && !is_string($suffix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($suffix)), __LINE__);
        }
        $this->Suffix = $suffix;
        return $this;
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
     * @uses \Sabre\UpdateReservation\EnumType\PersonNameType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\PersonNameType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\PersonName
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\PersonNameType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\PersonNameType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get PreferredFirstName value
     * @return string|null
     */
    public function getPreferredFirstName()
    {
        return $this->PreferredFirstName;
    }
    /**
     * Set PreferredFirstName value
     * @param string $preferredFirstName
     * @return \Sabre\UpdateReservation\StructType\PersonName
     */
    public function setPreferredFirstName($preferredFirstName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($preferredFirstName) && strlen($preferredFirstName) > 100) || (is_array($preferredFirstName) && count($preferredFirstName) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($preferredFirstName) ? strlen($preferredFirstName) : count($preferredFirstName)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($preferredFirstName) && strlen($preferredFirstName) < 1) || (is_array($preferredFirstName) && count($preferredFirstName) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($preferredFirstName) && !is_string($preferredFirstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preferredFirstName)), __LINE__);
        }
        $this->PreferredFirstName = $preferredFirstName;
        return $this;
    }
    /**
     * Get PreferredSurname value
     * @return string|null
     */
    public function getPreferredSurname()
    {
        return $this->PreferredSurname;
    }
    /**
     * Set PreferredSurname value
     * @param string $preferredSurname
     * @return \Sabre\UpdateReservation\StructType\PersonName
     */
    public function setPreferredSurname($preferredSurname = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($preferredSurname) && strlen($preferredSurname) > 100) || (is_array($preferredSurname) && count($preferredSurname) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($preferredSurname) ? strlen($preferredSurname) : count($preferredSurname)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($preferredSurname) && strlen($preferredSurname) < 1) || (is_array($preferredSurname) && count($preferredSurname) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($preferredSurname) && !is_string($preferredSurname)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preferredSurname)), __LINE__);
        }
        $this->PreferredSurname = $preferredSurname;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PersonName
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
