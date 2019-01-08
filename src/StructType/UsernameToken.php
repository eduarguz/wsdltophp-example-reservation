<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UsernameToken StructType
 * @subpackage Structs
 */
class UsernameToken extends AbstractStructBase
{
    /**
     * The Username
     * Meta informations extracted from the WSDL
     * - Prefix: wsse
     * - minOccurs: 0
     * @var string
     */
    public $Username;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - Prefix: wsse
     * - minOccurs: 0
     * @var string
     */
    public $Password;
    /**
     * The NewPassword
     * Meta informations extracted from the WSDL
     * - Prefix: wsse
     * - maxOccurs: 2
     * - minOccurs: 0
     * @var string[]
     */
    public $NewPassword;
    /**
     * The Organization
     * Meta informations extracted from the WSDL
     * - form: unqualified
     * - minOccurs: 0
     * @var string
     */
    public $Organization;
    /**
     * The Domain
     * Meta informations extracted from the WSDL
     * - form: unqualified
     * - minOccurs: 0
     * @var string
     */
    public $Domain;
    /**
     * Constructor method for UsernameToken
     * @uses UsernameToken::setUsername()
     * @uses UsernameToken::setPassword()
     * @uses UsernameToken::setNewPassword()
     * @uses UsernameToken::setOrganization()
     * @uses UsernameToken::setDomain()
     * @param string $username
     * @param string $password
     * @param string[] $newPassword
     * @param string $organization
     * @param string $domain
     */
    public function __construct($username = null, $password = null, array $newPassword = array(), $organization = null, $domain = null)
    {
        $this
            ->setUsername($username)
            ->setPassword($password)
            ->setNewPassword($newPassword)
            ->setOrganization($organization)
            ->setDomain($domain);
    }
    /**
     * Get Username value
     * @return string|null
     */
    public function getUsername()
    {
        return $this->Username;
    }
    /**
     * Set Username value
     * @param string $username
     * @return \Sabre\UpdateReservation\StructType\UsernameToken
     */
    public function setUsername($username = null)
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($username)), __LINE__);
        }
        $this->Username = $username;
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \Sabre\UpdateReservation\StructType\UsernameToken
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
    /**
     * Get NewPassword value
     * @return string[]|null
     */
    public function getNewPassword()
    {
        return $this->NewPassword;
    }
    /**
     * Set NewPassword value
     * @throws \InvalidArgumentException
     * @param string[] $newPassword
     * @return \Sabre\UpdateReservation\StructType\UsernameToken
     */
    public function setNewPassword(array $newPassword = array())
    {
        foreach ($newPassword as $usernameTokenNewPasswordItem) {
            // validation for constraint: itemType
            if (!is_string($usernameTokenNewPasswordItem)) {
                throw new \InvalidArgumentException(sprintf('The NewPassword property can only contain items of string, "%s" given', is_object($usernameTokenNewPasswordItem) ? get_class($usernameTokenNewPasswordItem) : gettype($usernameTokenNewPasswordItem)), __LINE__);
            }
        }
        $this->NewPassword = $newPassword;
        return $this;
    }
    /**
     * Add item to NewPassword value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\UsernameToken
     */
    public function addToNewPassword($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The NewPassword property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NewPassword[] = $item;
        return $this;
    }
    /**
     * Get Organization value
     * @return string|null
     */
    public function getOrganization()
    {
        return $this->Organization;
    }
    /**
     * Set Organization value
     * @param string $organization
     * @return \Sabre\UpdateReservation\StructType\UsernameToken
     */
    public function setOrganization($organization = null)
    {
        // validation for constraint: string
        if (!is_null($organization) && !is_string($organization)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($organization)), __LINE__);
        }
        $this->Organization = $organization;
        return $this;
    }
    /**
     * Get Domain value
     * @return string|null
     */
    public function getDomain()
    {
        return $this->Domain;
    }
    /**
     * Set Domain value
     * @param string $domain
     * @return \Sabre\UpdateReservation\StructType\UsernameToken
     */
    public function setDomain($domain = null)
    {
        // validation for constraint: string
        if (!is_null($domain) && !is_string($domain)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domain)), __LINE__);
        }
        $this->Domain = $domain;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\UsernameToken
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
