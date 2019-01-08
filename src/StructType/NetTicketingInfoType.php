<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NetTicketingInfoType StructType
 * @subpackage Structs
 */
class NetTicketingInfoType extends AbstractStructBase
{
    /**
     * The NetFareDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FareDetailsType
     */
    public $NetFareDetails;
    /**
     * The SellingFareDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FareDetailsType
     */
    public $SellingFareDetails;
    /**
     * The AccountCode
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $AccountCode;
    /**
     * The CorporateId
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $CorporateId;
    /**
     * Constructor method for NetTicketingInfoType
     * @uses NetTicketingInfoType::setNetFareDetails()
     * @uses NetTicketingInfoType::setSellingFareDetails()
     * @uses NetTicketingInfoType::setAccountCode()
     * @uses NetTicketingInfoType::setCorporateId()
     * @param \Sabre\UpdateReservation\StructType\FareDetailsType $netFareDetails
     * @param \Sabre\UpdateReservation\StructType\FareDetailsType $sellingFareDetails
     * @param string $accountCode
     * @param string $corporateId
     */
    public function __construct(\Sabre\UpdateReservation\StructType\FareDetailsType $netFareDetails = null, \Sabre\UpdateReservation\StructType\FareDetailsType $sellingFareDetails = null, $accountCode = null, $corporateId = null)
    {
        $this
            ->setNetFareDetails($netFareDetails)
            ->setSellingFareDetails($sellingFareDetails)
            ->setAccountCode($accountCode)
            ->setCorporateId($corporateId);
    }
    /**
     * Get NetFareDetails value
     * @return \Sabre\UpdateReservation\StructType\FareDetailsType|null
     */
    public function getNetFareDetails()
    {
        return $this->NetFareDetails;
    }
    /**
     * Set NetFareDetails value
     * @param \Sabre\UpdateReservation\StructType\FareDetailsType $netFareDetails
     * @return \Sabre\UpdateReservation\StructType\NetTicketingInfoType
     */
    public function setNetFareDetails(\Sabre\UpdateReservation\StructType\FareDetailsType $netFareDetails = null)
    {
        $this->NetFareDetails = $netFareDetails;
        return $this;
    }
    /**
     * Get SellingFareDetails value
     * @return \Sabre\UpdateReservation\StructType\FareDetailsType|null
     */
    public function getSellingFareDetails()
    {
        return $this->SellingFareDetails;
    }
    /**
     * Set SellingFareDetails value
     * @param \Sabre\UpdateReservation\StructType\FareDetailsType $sellingFareDetails
     * @return \Sabre\UpdateReservation\StructType\NetTicketingInfoType
     */
    public function setSellingFareDetails(\Sabre\UpdateReservation\StructType\FareDetailsType $sellingFareDetails = null)
    {
        $this->SellingFareDetails = $sellingFareDetails;
        return $this;
    }
    /**
     * Get AccountCode value
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->AccountCode;
    }
    /**
     * Set AccountCode value
     * @param string $accountCode
     * @return \Sabre\UpdateReservation\StructType\NetTicketingInfoType
     */
    public function setAccountCode($accountCode = null)
    {
        // validation for constraint: string
        if (!is_null($accountCode) && !is_string($accountCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($accountCode)), __LINE__);
        }
        $this->AccountCode = $accountCode;
        return $this;
    }
    /**
     * Get CorporateId value
     * @return string|null
     */
    public function getCorporateId()
    {
        return $this->CorporateId;
    }
    /**
     * Set CorporateId value
     * @param string $corporateId
     * @return \Sabre\UpdateReservation\StructType\NetTicketingInfoType
     */
    public function setCorporateId($corporateId = null)
    {
        // validation for constraint: string
        if (!is_null($corporateId) && !is_string($corporateId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($corporateId)), __LINE__);
        }
        $this->CorporateId = $corporateId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\NetTicketingInfoType
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
