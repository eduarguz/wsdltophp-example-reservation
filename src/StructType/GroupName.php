<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroupName StructType
 * @subpackage Structs
 */
class GroupName extends AbstractStructBase
{
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 100
     * - minLength: 1
     * @var string
     */
    public $Name;
    /**
     * The NumberInGroup
     * @var int
     */
    public $NumberInGroup;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - default: CORP
     * @var string
     */
    public $type;
    /**
     * The referenceId
     * @var int
     */
    public $referenceId;
    /**
     * Constructor method for GroupName
     * @uses GroupName::setName()
     * @uses GroupName::setNumberInGroup()
     * @uses GroupName::setType()
     * @uses GroupName::setReferenceId()
     * @param string $name
     * @param int $numberInGroup
     * @param string $type
     * @param int $referenceId
     */
    public function __construct($name = null, $numberInGroup = null, $type = 'CORP', $referenceId = null)
    {
        $this
            ->setName($name)
            ->setNumberInGroup($numberInGroup)
            ->setType($type)
            ->setReferenceId($referenceId);
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
     * @return \Sabre\UpdateReservation\StructType\GroupName
     */
    public function setName($name = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($name) && strlen($name) > 100) || (is_array($name) && count($name) > 100)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 100 element(s) or a scalar of 100 character(s) at most, "%d" length given', is_scalar($name) ? strlen($name) : count($name)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($name) && strlen($name) < 1) || (is_array($name) && count($name) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get NumberInGroup value
     * @return int|null
     */
    public function getNumberInGroup()
    {
        return $this->NumberInGroup;
    }
    /**
     * Set NumberInGroup value
     * @param int $numberInGroup
     * @return \Sabre\UpdateReservation\StructType\GroupName
     */
    public function setNumberInGroup($numberInGroup = null)
    {
        // validation for constraint: int
        if (!is_null($numberInGroup) && !is_numeric($numberInGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberInGroup)), __LINE__);
        }
        $this->NumberInGroup = $numberInGroup;
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
     * @uses \Sabre\UpdateReservation\EnumType\GroupType::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\GroupType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\GroupName
     */
    public function setType($type = 'CORP')
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\GroupType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Sabre\UpdateReservation\EnumType\GroupType::getValidValues())), __LINE__);
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
     * @return \Sabre\UpdateReservation\StructType\GroupName
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
     * @return \Sabre\UpdateReservation\StructType\GroupName
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
