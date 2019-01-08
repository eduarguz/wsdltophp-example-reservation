<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SocialMediaContactType StructType
 * @subpackage Structs
 */
class SocialMediaContactType extends AbstractStructBase
{
    /**
     * The FacebookID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FacebookID;
    /**
     * The TwitterID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TwitterID;
    /**
     * Constructor method for SocialMediaContactType
     * @uses SocialMediaContactType::setFacebookID()
     * @uses SocialMediaContactType::setTwitterID()
     * @param string $facebookID
     * @param string $twitterID
     */
    public function __construct($facebookID = null, $twitterID = null)
    {
        $this
            ->setFacebookID($facebookID)
            ->setTwitterID($twitterID);
    }
    /**
     * Get FacebookID value
     * @return string|null
     */
    public function getFacebookID()
    {
        return $this->FacebookID;
    }
    /**
     * Set FacebookID value
     * @param string $facebookID
     * @return \Sabre\UpdateReservation\StructType\SocialMediaContactType
     */
    public function setFacebookID($facebookID = null)
    {
        // validation for constraint: string
        if (!is_null($facebookID) && !is_string($facebookID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($facebookID)), __LINE__);
        }
        $this->FacebookID = $facebookID;
        return $this;
    }
    /**
     * Get TwitterID value
     * @return string|null
     */
    public function getTwitterID()
    {
        return $this->TwitterID;
    }
    /**
     * Set TwitterID value
     * @param string $twitterID
     * @return \Sabre\UpdateReservation\StructType\SocialMediaContactType
     */
    public function setTwitterID($twitterID = null)
    {
        // validation for constraint: string
        if (!is_null($twitterID) && !is_string($twitterID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($twitterID)), __LINE__);
        }
        $this->TwitterID = $twitterID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SocialMediaContactType
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
