<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LodgingBookingSearchRef StructType
 * Meta informations extracted from the WSDL
 * - documentation: Basic Element for representing Basic booking reference search Criteria
 * @subpackage Structs
 */
class LodgingBookingSearchRef extends AbstractStructBase
{
    /**
     * The InfoSource
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $InfoSource;
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Email;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $LastName;
    /**
     * The CreationDate
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CreationDate;
    /**
     * The StayStartDate
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $StayStartDate;
    /**
     * The StayEndDate
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $StayEndDate;
    /**
     * Constructor method for LodgingBookingSearchRef
     * @uses LodgingBookingSearchRef::setInfoSource()
     * @uses LodgingBookingSearchRef::setEmail()
     * @uses LodgingBookingSearchRef::setLastName()
     * @uses LodgingBookingSearchRef::setCreationDate()
     * @uses LodgingBookingSearchRef::setStayStartDate()
     * @uses LodgingBookingSearchRef::setStayEndDate()
     * @param string $infoSource
     * @param string $email
     * @param string $lastName
     * @param string $creationDate
     * @param string $stayStartDate
     * @param string $stayEndDate
     */
    public function __construct($infoSource = null, $email = null, $lastName = null, $creationDate = null, $stayStartDate = null, $stayEndDate = null)
    {
        $this
            ->setInfoSource($infoSource)
            ->setEmail($email)
            ->setLastName($lastName)
            ->setCreationDate($creationDate)
            ->setStayStartDate($stayStartDate)
            ->setStayEndDate($stayEndDate);
    }
    /**
     * Get InfoSource value
     * @return string
     */
    public function getInfoSource()
    {
        return $this->InfoSource;
    }
    /**
     * Set InfoSource value
     * @param string $infoSource
     * @return \Sabre\UpdateReservation\StructType\LodgingBookingSearchRef
     */
    public function setInfoSource($infoSource = null)
    {
        // validation for constraint: string
        if (!is_null($infoSource) && !is_string($infoSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($infoSource)), __LINE__);
        }
        $this->InfoSource = $infoSource;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \Sabre\UpdateReservation\StructType\LodgingBookingSearchRef
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
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
     * @return \Sabre\UpdateReservation\StructType\LodgingBookingSearchRef
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
     * Get CreationDate value
     * @return string|null
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }
    /**
     * Set CreationDate value
     * @param string $creationDate
     * @return \Sabre\UpdateReservation\StructType\LodgingBookingSearchRef
     */
    public function setCreationDate($creationDate = null)
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($creationDate)), __LINE__);
        }
        $this->CreationDate = $creationDate;
        return $this;
    }
    /**
     * Get StayStartDate value
     * @return string|null
     */
    public function getStayStartDate()
    {
        return $this->StayStartDate;
    }
    /**
     * Set StayStartDate value
     * @param string $stayStartDate
     * @return \Sabre\UpdateReservation\StructType\LodgingBookingSearchRef
     */
    public function setStayStartDate($stayStartDate = null)
    {
        // validation for constraint: string
        if (!is_null($stayStartDate) && !is_string($stayStartDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stayStartDate)), __LINE__);
        }
        $this->StayStartDate = $stayStartDate;
        return $this;
    }
    /**
     * Get StayEndDate value
     * @return string|null
     */
    public function getStayEndDate()
    {
        return $this->StayEndDate;
    }
    /**
     * Set StayEndDate value
     * @param string $stayEndDate
     * @return \Sabre\UpdateReservation\StructType\LodgingBookingSearchRef
     */
    public function setStayEndDate($stayEndDate = null)
    {
        // validation for constraint: string
        if (!is_null($stayEndDate) && !is_string($stayEndDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($stayEndDate)), __LINE__);
        }
        $this->StayEndDate = $stayEndDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\LodgingBookingSearchRef
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
