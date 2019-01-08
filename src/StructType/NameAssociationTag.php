<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NameAssociationTag StructType
 * @subpackage Structs
 */
class NameAssociationTag extends AbstractStructBase
{
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastName;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FirstName;
    /**
     * The Prefix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Prefix;
    /**
     * The NameRefNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $NameRefNumber;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $Id;
    /**
     * The ReferenceId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ReferenceId;
    /**
     * Constructor method for NameAssociationTag
     * @uses NameAssociationTag::setLastName()
     * @uses NameAssociationTag::setFirstName()
     * @uses NameAssociationTag::setPrefix()
     * @uses NameAssociationTag::setNameRefNumber()
     * @uses NameAssociationTag::setId()
     * @uses NameAssociationTag::setReferenceId()
     * @param string $lastName
     * @param string $firstName
     * @param string $prefix
     * @param string $nameRefNumber
     * @param string $id
     * @param int $referenceId
     */
    public function __construct($lastName = null, $firstName = null, $prefix = null, $nameRefNumber = null, $id = null, $referenceId = null)
    {
        $this
            ->setLastName($lastName)
            ->setFirstName($firstName)
            ->setPrefix($prefix)
            ->setNameRefNumber($nameRefNumber)
            ->setId($id)
            ->setReferenceId($referenceId);
    }
    /**
     * Get LastName value
     * @return string|null
     */
    public function getLastName()
    {
        return $this->LastName;
    }
    /**
     * Set LastName value
     * @param string $lastName
     * @return \Sabre\UpdateReservation\StructType\NameAssociationTag
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        $this->LastName = $lastName;
        return $this;
    }
    /**
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \Sabre\UpdateReservation\StructType\NameAssociationTag
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
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
     * @return \Sabre\UpdateReservation\StructType\NameAssociationTag
     */
    public function setPrefix($prefix = null)
    {
        // validation for constraint: string
        if (!is_null($prefix) && !is_string($prefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($prefix)), __LINE__);
        }
        $this->Prefix = $prefix;
        return $this;
    }
    /**
     * Get NameRefNumber value
     * @return string|null
     */
    public function getNameRefNumber()
    {
        return $this->NameRefNumber;
    }
    /**
     * Set NameRefNumber value
     * @param string $nameRefNumber
     * @return \Sabre\UpdateReservation\StructType\NameAssociationTag
     */
    public function setNameRefNumber($nameRefNumber = null)
    {
        // validation for constraint: string
        if (!is_null($nameRefNumber) && !is_string($nameRefNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameRefNumber)), __LINE__);
        }
        $this->NameRefNumber = $nameRefNumber;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\NameAssociationTag
     */
    public function setId($id = null)
    {
        // validation for constraint: pattern
        if (is_scalar($id) && !preg_match('/[0-9]{1,10}/', $id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,10}", "%s" given', var_export($id, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get ReferenceId value
     * @return int|null
     */
    public function getReferenceId()
    {
        return $this->ReferenceId;
    }
    /**
     * Set ReferenceId value
     * @param int $referenceId
     * @return \Sabre\UpdateReservation\StructType\NameAssociationTag
     */
    public function setReferenceId($referenceId = null)
    {
        // validation for constraint: int
        if (!is_null($referenceId) && !is_numeric($referenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($referenceId)), __LINE__);
        }
        $this->ReferenceId = $referenceId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\NameAssociationTag
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
