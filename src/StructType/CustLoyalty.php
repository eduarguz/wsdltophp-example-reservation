<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustLoyalty StructType
 * @subpackage Structs
 */
class CustLoyalty extends AbstractStructBase
{
    /**
     * The programID
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $programID;
    /**
     * The membershipId
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $membershipId;
    /**
     * The membershipID
     * Meta informations extracted from the WSDL
     * - documentation: "membershipID" is used to return the frequent flyer number associated with the vehicle reservation if applicable.
     * - use: optional
     * @var string
     */
    public $membershipID;
    /**
     * Constructor method for CustLoyalty
     * @uses CustLoyalty::setProgramID()
     * @uses CustLoyalty::setMembershipId()
     * @uses CustLoyalty::setMembershipID_1()
     * @param string $programID
     * @param string $membershipId
     * @param string $membershipID
     */
    public function __construct($programID = null, $membershipId = null, $membershipID_1 = null)
    {
        $this
            ->setProgramID($programID)
            ->setMembershipId($membershipId)
            ->setMembershipID_1($membershipID_1);
    }
    /**
     * Get programID value
     * @return string
     */
    public function getProgramID()
    {
        return $this->programID;
    }
    /**
     * Set programID value
     * @param string $programID
     * @return \Sabre\UpdateReservation\StructType\CustLoyalty
     */
    public function setProgramID($programID = null)
    {
        // validation for constraint: string
        if (!is_null($programID) && !is_string($programID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($programID)), __LINE__);
        }
        $this->programID = $programID;
        return $this;
    }
    /**
     * Get membershipId value
     * @return string
     */
    public function getMembershipId()
    {
        return $this->membershipId;
    }
    /**
     * Set membershipId value
     * @param string $membershipId
     * @return \Sabre\UpdateReservation\StructType\CustLoyalty
     */
    public function setMembershipId($membershipId = null)
    {
        // validation for constraint: string
        if (!is_null($membershipId) && !is_string($membershipId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($membershipId)), __LINE__);
        }
        $this->membershipId = $membershipId;
        return $this;
    }
    /**
     * Get membershipID value
     * @return string|null
     */
    public function getMembershipID_1()
    {
        return $this->membershipID;
    }
    /**
     * Set membershipID value
     * @param string $membershipID
     * @return \Sabre\UpdateReservation\StructType\CustLoyalty
     */
    public function setMembershipID_1($membershipID_1 = null)
    {
        // validation for constraint: string
        if (!is_null($membershipID_1) && !is_string($membershipID_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($membershipID_1)), __LINE__);
        }
        $this->membershipID = $membershipID_1;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\CustLoyalty
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
