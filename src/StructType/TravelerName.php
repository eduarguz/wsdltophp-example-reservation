<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelerName StructType
 * @subpackage Structs
 */
class TravelerName extends AbstractStructBase
{
    /**
     * The Given
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $Given;
    /**
     * The Surname
     * Meta informations extracted from the WSDL
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $Surname;
    /**
     * The Prefix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 16
     * - minLength: 1
     * @var string
     */
    public $Prefix;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - default: ADT
     * @var string
     */
    public $type;
    /**
     * The referenceId
     * @var int
     */
    public $referenceId;
    /**
     * Constructor method for TravelerName
     * @uses TravelerName::setGiven()
     * @uses TravelerName::setSurname()
     * @uses TravelerName::setPrefix()
     * @uses TravelerName::setType()
     * @uses TravelerName::setReferenceId()
     * @param string $given
     * @param string $surname
     * @param string $prefix
     * @param string $type
     * @param int $referenceId
     */
    public function __construct($given = null, $surname = null, $prefix = null, $type = 'ADT', $referenceId = null)
    {
        $this
            ->setGiven($given)
            ->setSurname($surname)
            ->setPrefix($prefix)
            ->setType($type)
            ->setReferenceId($referenceId);
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
     * @return \Sabre\UpdateReservation\StructType\TravelerName
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
     * @return \Sabre\UpdateReservation\StructType\TravelerName
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
     * @return \Sabre\UpdateReservation\StructType\TravelerName
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
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \Sabre\UpdateReservation\EnumType\TravelerType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\TravelerType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\TravelerName
     */
    public function setType($type = 'ADT')
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\TravelerType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\TravelerType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
    /**
     * Get referenceId value
     * @return int|null
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }
    /**
     * Set referenceId value
     * @param int $referenceId
     * @return \Sabre\UpdateReservation\StructType\TravelerName
     */
    public function setReferenceId($referenceId = null)
    {
        // validation for constraint: int
        if (!is_null($referenceId) && !is_numeric($referenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($referenceId)), __LINE__);
        }
        $this->referenceId = $referenceId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TravelerName
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
