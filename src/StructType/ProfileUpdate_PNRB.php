<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileUpdate.PNRB StructType
 * @subpackage Structs
 */
class ProfileUpdate_PNRB extends AbstractStructBase
{
    /**
     * The NameAssociationList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB
     */
    public $NameAssociationList;
    /**
     * The ProfileID
     * @var string
     */
    public $ProfileID;
    /**
     * The ProfileType
     * @var string
     */
    public $ProfileType;
    /**
     * The PolicyId
     * @var string
     */
    public $PolicyId;
    /**
     * The PreferenceId
     * @var string
     */
    public $PreferenceId;
    /**
     * The PolicyRemovalReason
     * @var string
     */
    public $PolicyRemovalReason;
    /**
     * The OwningAgency
     * Meta informations extracted from the WSDL
     * - pattern: [A-Z0-9]{4}
     * @var string
     */
    public $OwningAgency;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - pattern: [0-9]{1,10}
     * @var string
     */
    public $id;
    /**
     * The op
     * Meta informations extracted from the WSDL
     * - documentation: C = Create, U = Update, D = Delete
     * @var string
     */
    public $op;
    /**
     * Constructor method for ProfileUpdate.PNRB
     * @uses ProfileUpdate_PNRB::setNameAssociationList()
     * @uses ProfileUpdate_PNRB::setProfileID()
     * @uses ProfileUpdate_PNRB::setProfileType()
     * @uses ProfileUpdate_PNRB::setPolicyId()
     * @uses ProfileUpdate_PNRB::setPreferenceId()
     * @uses ProfileUpdate_PNRB::setPolicyRemovalReason()
     * @uses ProfileUpdate_PNRB::setOwningAgency()
     * @uses ProfileUpdate_PNRB::setId()
     * @uses ProfileUpdate_PNRB::setOp()
     * @param \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList
     * @param string $profileID
     * @param string $profileType
     * @param string $policyId
     * @param string $preferenceId
     * @param string $policyRemovalReason
     * @param string $owningAgency
     * @param string $id
     * @param string $op
     */
    public function __construct(\Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList = null, $profileID = null, $profileType = null, $policyId = null, $preferenceId = null, $policyRemovalReason = null, $owningAgency = null, $id = null, $op = null)
    {
        $this
            ->setNameAssociationList($nameAssociationList)
            ->setProfileID($profileID)
            ->setProfileType($profileType)
            ->setPolicyId($policyId)
            ->setPreferenceId($preferenceId)
            ->setPolicyRemovalReason($policyRemovalReason)
            ->setOwningAgency($owningAgency)
            ->setId($id)
            ->setOp($op);
    }
    /**
     * Get NameAssociationList value
     * @return \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB|null
     */
    public function getNameAssociationList()
    {
        return $this->NameAssociationList;
    }
    /**
     * Set NameAssociationList value
     * @param \Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList
     * @return \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB
     */
    public function setNameAssociationList(\Sabre\UpdateReservation\StructType\NameAssociationList_PNRB $nameAssociationList = null)
    {
        $this->NameAssociationList = $nameAssociationList;
        return $this;
    }
    /**
     * Get ProfileID value
     * @return string|null
     */
    public function getProfileID()
    {
        return $this->ProfileID;
    }
    /**
     * Set ProfileID value
     * @param string $profileID
     * @return \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB
     */
    public function setProfileID($profileID = null)
    {
        // validation for constraint: string
        if (!is_null($profileID) && !is_string($profileID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profileID)), __LINE__);
        }
        $this->ProfileID = $profileID;
        return $this;
    }
    /**
     * Get ProfileType value
     * @return string|null
     */
    public function getProfileType()
    {
        return $this->ProfileType;
    }
    /**
     * Set ProfileType value
     * @param string $profileType
     * @return \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB
     */
    public function setProfileType($profileType = null)
    {
        // validation for constraint: string
        if (!is_null($profileType) && !is_string($profileType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($profileType)), __LINE__);
        }
        $this->ProfileType = $profileType;
        return $this;
    }
    /**
     * Get PolicyId value
     * @return string|null
     */
    public function getPolicyId()
    {
        return $this->PolicyId;
    }
    /**
     * Set PolicyId value
     * @param string $policyId
     * @return \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB
     */
    public function setPolicyId($policyId = null)
    {
        // validation for constraint: string
        if (!is_null($policyId) && !is_string($policyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyId)), __LINE__);
        }
        $this->PolicyId = $policyId;
        return $this;
    }
    /**
     * Get PreferenceId value
     * @return string|null
     */
    public function getPreferenceId()
    {
        return $this->PreferenceId;
    }
    /**
     * Set PreferenceId value
     * @param string $preferenceId
     * @return \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB
     */
    public function setPreferenceId($preferenceId = null)
    {
        // validation for constraint: string
        if (!is_null($preferenceId) && !is_string($preferenceId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($preferenceId)), __LINE__);
        }
        $this->PreferenceId = $preferenceId;
        return $this;
    }
    /**
     * Get PolicyRemovalReason value
     * @return string|null
     */
    public function getPolicyRemovalReason()
    {
        return $this->PolicyRemovalReason;
    }
    /**
     * Set PolicyRemovalReason value
     * @param string $policyRemovalReason
     * @return \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB
     */
    public function setPolicyRemovalReason($policyRemovalReason = null)
    {
        // validation for constraint: string
        if (!is_null($policyRemovalReason) && !is_string($policyRemovalReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyRemovalReason)), __LINE__);
        }
        $this->PolicyRemovalReason = $policyRemovalReason;
        return $this;
    }
    /**
     * Get OwningAgency value
     * @return string|null
     */
    public function getOwningAgency()
    {
        return $this->OwningAgency;
    }
    /**
     * Set OwningAgency value
     * @param string $owningAgency
     * @return \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB
     */
    public function setOwningAgency($owningAgency = null)
    {
        // validation for constraint: pattern
        if (is_scalar($owningAgency) && !preg_match('/[A-Z0-9]{4}/', $owningAgency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9]{4}", "%s" given', var_export($owningAgency, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($owningAgency) && !is_string($owningAgency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($owningAgency)), __LINE__);
        }
        $this->OwningAgency = $owningAgency;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB
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
        $this->id = $id;
        return $this;
    }
    /**
     * Get op value
     * @return string|null
     */
    public function getOp()
    {
        return $this->op;
    }
    /**
     * Set op value
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $op
     * @return \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB
     */
    public function setOp($op = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\OperationType_PNRB::valueIsValid($op)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $op, implode(', ', \Sabre\UpdateReservation\EnumType\OperationType_PNRB::getValidValues())), __LINE__);
        }
        $this->op = $op;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ProfileUpdate_PNRB
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
