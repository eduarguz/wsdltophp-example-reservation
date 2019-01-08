<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Security StructType
 * Meta informations extracted from the WSDL
 * - Prefix: wsse
 * @subpackage Structs
 */
class Security extends AbstractStructBase
{
    /**
     * The UsernameToken
     * Meta informations extracted from the WSDL
     * - Prefix: wsse
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\UsernameToken
     */
    public $UsernameToken;
    /**
     * The SabreAth
     * Meta informations extracted from the WSDL
     * - Prefix: wsse
     * - minOccurs: 0
     * @var string
     */
    public $SabreAth;
    /**
     * The BinarySecurityToken
     * Meta informations extracted from the WSDL
     * - Prefix: wsse
     * - minOccurs: 0
     * @var string
     */
    public $BinarySecurityToken;
    /**
     * Constructor method for Security
     * @uses Security::setUsernameToken()
     * @uses Security::setSabreAth()
     * @uses Security::setBinarySecurityToken()
     * @param \Sabre\UpdateReservation\StructType\UsernameToken $usernameToken
     * @param string $sabreAth
     * @param string $binarySecurityToken
     */
    public function __construct(\Sabre\UpdateReservation\StructType\UsernameToken $usernameToken = null, $sabreAth = null, $binarySecurityToken = null)
    {
        $this
            ->setUsernameToken($usernameToken)
            ->setSabreAth($sabreAth)
            ->setBinarySecurityToken($binarySecurityToken);
    }
    /**
     * Get UsernameToken value
     * @return \Sabre\UpdateReservation\StructType\UsernameToken|null
     */
    public function getUsernameToken()
    {
        return $this->UsernameToken;
    }
    /**
     * Set UsernameToken value
     * @param \Sabre\UpdateReservation\StructType\UsernameToken $usernameToken
     * @return \Sabre\UpdateReservation\StructType\Security
     */
    public function setUsernameToken(\Sabre\UpdateReservation\StructType\UsernameToken $usernameToken = null)
    {
        $this->UsernameToken = $usernameToken;
        return $this;
    }
    /**
     * Get SabreAth value
     * @return string|null
     */
    public function getSabreAth()
    {
        return $this->SabreAth;
    }
    /**
     * Set SabreAth value
     * @param string $sabreAth
     * @return \Sabre\UpdateReservation\StructType\Security
     */
    public function setSabreAth($sabreAth = null)
    {
        // validation for constraint: string
        if (!is_null($sabreAth) && !is_string($sabreAth)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sabreAth)), __LINE__);
        }
        $this->SabreAth = $sabreAth;
        return $this;
    }
    /**
     * Get BinarySecurityToken value
     * @return string|null
     */
    public function getBinarySecurityToken()
    {
        return $this->BinarySecurityToken;
    }
    /**
     * Set BinarySecurityToken value
     * @param string $binarySecurityToken
     * @return \Sabre\UpdateReservation\StructType\Security
     */
    public function setBinarySecurityToken($binarySecurityToken = null)
    {
        // validation for constraint: string
        if (!is_null($binarySecurityToken) && !is_string($binarySecurityToken)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($binarySecurityToken)), __LINE__);
        }
        $this->BinarySecurityToken = $binarySecurityToken;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Security
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
