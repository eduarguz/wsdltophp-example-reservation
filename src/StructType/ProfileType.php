<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProfileType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Profile Type like TVL, CRP eyc
 * - minOccurs: 0
 * - type: xsd:string
 * @subpackage Structs
 */
class ProfileType extends AbstractStructBase
{
    /**
     * The ID
     * @var string
     */
    public $ID;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Type of Profile, it will be having full name like TAGENCY, TAGENCT etc
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Source;
    /**
     * The ShortType
     * Meta informations extracted from the WSDL
     * - documentation: Type of Profile, same as above but in short, it will be having name like AGY, AGT etc
     * - minOccurs: 0
     * @var string
     */
    public $ShortType;
    /**
     * The PolicyId
     * Meta informations extracted from the WSDL
     * - documentation: PolicyId of the profile
     * - minOccurs: 0
     * @var string
     */
    public $PolicyId;
    /**
     * The PreferenceId
     * Meta informations extracted from the WSDL
     * - documentation: PreferenceId of the profile
     * - minOccurs: 0
     * @var string
     */
    public $PreferenceId;
    /**
     * The PolicyRemovalReason
     * Meta informations extracted from the WSDL
     * - documentation: Reason for removing the reason
     * - minOccurs: 0
     * @var string
     */
    public $PolicyRemovalReason;
    /**
     * The OwningAgency
     * Meta informations extracted from the WSDL
     * - documentation: Name of the PCC where this profile is stored
     * - minOccurs: 0
     * @var string
     */
    public $OwningAgency;
    /**
     * Constructor method for ProfileType
     * @uses ProfileType::setID()
     * @uses ProfileType::setType()
     * @uses ProfileType::setSource()
     * @uses ProfileType::setShortType()
     * @uses ProfileType::setPolicyId()
     * @uses ProfileType::setPreferenceId()
     * @uses ProfileType::setPolicyRemovalReason()
     * @uses ProfileType::setOwningAgency()
     * @param string $iD
     * @param string $type
     * @param string $source
     * @param string $shortType
     * @param string $policyId
     * @param string $preferenceId
     * @param string $policyRemovalReason
     * @param string $owningAgency
     */
    public function __construct($iD = null, $type = null, $source = null, $shortType = null, $policyId = null, $preferenceId = null, $policyRemovalReason = null, $owningAgency = null)
    {
        $this
            ->setID($iD)
            ->setType($type)
            ->setSource($source)
            ->setShortType($shortType)
            ->setPolicyId($policyId)
            ->setPreferenceId($preferenceId)
            ->setPolicyRemovalReason($policyRemovalReason)
            ->setOwningAgency($owningAgency);
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \Sabre\UpdateReservation\StructType\ProfileType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
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
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\ProfileType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $source
     * @return \Sabre\UpdateReservation\StructType\ProfileType
     */
    public function setSource($source = null)
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($source)), __LINE__);
        }
        $this->Source = $source;
        return $this;
    }
    /**
     * Get ShortType value
     * @return string|null
     */
    public function getShortType()
    {
        return $this->ShortType;
    }
    /**
     * Set ShortType value
     * @param string $shortType
     * @return \Sabre\UpdateReservation\StructType\ProfileType
     */
    public function setShortType($shortType = null)
    {
        // validation for constraint: string
        if (!is_null($shortType) && !is_string($shortType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortType)), __LINE__);
        }
        $this->ShortType = $shortType;
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
     * @return \Sabre\UpdateReservation\StructType\ProfileType
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
     * @return \Sabre\UpdateReservation\StructType\ProfileType
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
     * @return \Sabre\UpdateReservation\StructType\ProfileType
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
     * @return \Sabre\UpdateReservation\StructType\ProfileType
     */
    public function setOwningAgency($owningAgency = null)
    {
        // validation for constraint: string
        if (!is_null($owningAgency) && !is_string($owningAgency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($owningAgency)), __LINE__);
        }
        $this->OwningAgency = $owningAgency;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ProfileType
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
