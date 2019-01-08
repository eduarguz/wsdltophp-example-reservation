<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GroundTransportationType StructType
 * @subpackage Structs
 */
class GroundTransportationType extends AbstractStructBase
{
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - minOccurs: 0 | 0
     * - documentation: Need to know the Service Type to e.g. 'A'llowance - indicate registered bag that is part of allowance; 'C'harges; 'F'light Related; 'P'repaid | Need to know the Service Type to e.g. 'A'llowance - indicate registered bag that is part
     * of allowance; 'C'harges; 'F'light Related; 'P'repaid | Need to know the Service Type to e.g. 'A'llowance - indicate registered bag that is part of allowance; 'C'harges; 'F'light Related; 'P'repaid
     * - pattern: [A-Z]
     * @var string
     */
    public $Service;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusCode;
    /**
     * The Vendor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CompanyType
     */
    public $Vendor;
    /**
     * The ServiceProvider
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ServiceProviderType
     */
    public $ServiceProvider;
    /**
     * The StartDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LocationDetailsType
     */
    public $StartDetails;
    /**
     * The StopDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LocationDetailsType[]
     */
    public $StopDetails;
    /**
     * The EndDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LocationDetailsType
     */
    public $EndDetails;
    /**
     * The ExternalReservation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ExternalReservationType
     */
    public $ExternalReservation;
    /**
     * The Restrictions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RestrictionsType
     */
    public $Restrictions;
    /**
     * The POS
     * @var \Sabre\UpdateReservation\StructType\POSType
     */
    public $POS;
    /**
     * The AgentLoyalty
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LoyaltyType[]
     */
    public $AgentLoyalty;
    /**
     * The Passenger
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PassengerType[]
     */
    public $Passenger;
    /**
     * The RateQualifier
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\RateQualifierType[]
     */
    public $RateQualifier;
    /**
     * The Charges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ChargesType
     */
    public $Charges;
    /**
     * Constructor method for GroundTransportationType
     * @uses GroundTransportationType::setService()
     * @uses GroundTransportationType::setStatusCode()
     * @uses GroundTransportationType::setVendor()
     * @uses GroundTransportationType::setServiceProvider()
     * @uses GroundTransportationType::setStartDetails()
     * @uses GroundTransportationType::setStopDetails()
     * @uses GroundTransportationType::setEndDetails()
     * @uses GroundTransportationType::setExternalReservation()
     * @uses GroundTransportationType::setRestrictions()
     * @uses GroundTransportationType::setPOS()
     * @uses GroundTransportationType::setAgentLoyalty()
     * @uses GroundTransportationType::setPassenger()
     * @uses GroundTransportationType::setRateQualifier()
     * @uses GroundTransportationType::setCharges()
     * @param string $service
     * @param string $statusCode
     * @param \Sabre\UpdateReservation\StructType\CompanyType $vendor
     * @param \Sabre\UpdateReservation\StructType\ServiceProviderType $serviceProvider
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType $startDetails
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType[] $stopDetails
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType $endDetails
     * @param \Sabre\UpdateReservation\StructType\ExternalReservationType $externalReservation
     * @param \Sabre\UpdateReservation\StructType\RestrictionsType $restrictions
     * @param \Sabre\UpdateReservation\StructType\POSType $pOS
     * @param \Sabre\UpdateReservation\StructType\LoyaltyType[] $agentLoyalty
     * @param \Sabre\UpdateReservation\StructType\PassengerType[] $passenger
     * @param \Sabre\UpdateReservation\StructType\RateQualifierType[] $rateQualifier
     * @param \Sabre\UpdateReservation\StructType\ChargesType $charges
     */
    public function __construct($service = null, $statusCode = null, \Sabre\UpdateReservation\StructType\CompanyType $vendor = null, \Sabre\UpdateReservation\StructType\ServiceProviderType $serviceProvider = null, \Sabre\UpdateReservation\StructType\LocationDetailsType $startDetails = null, array $stopDetails = array(), \Sabre\UpdateReservation\StructType\LocationDetailsType $endDetails = null, \Sabre\UpdateReservation\StructType\ExternalReservationType $externalReservation = null, \Sabre\UpdateReservation\StructType\RestrictionsType $restrictions = null, \Sabre\UpdateReservation\StructType\POSType $pOS = null, array $agentLoyalty = array(), array $passenger = array(), array $rateQualifier = array(), \Sabre\UpdateReservation\StructType\ChargesType $charges = null)
    {
        $this
            ->setService($service)
            ->setStatusCode($statusCode)
            ->setVendor($vendor)
            ->setServiceProvider($serviceProvider)
            ->setStartDetails($startDetails)
            ->setStopDetails($stopDetails)
            ->setEndDetails($endDetails)
            ->setExternalReservation($externalReservation)
            ->setRestrictions($restrictions)
            ->setPOS($pOS)
            ->setAgentLoyalty($agentLoyalty)
            ->setPassenger($passenger)
            ->setRateQualifier($rateQualifier)
            ->setCharges($charges);
    }
    /**
     * Get Service value
     * @return string
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @param string $service
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function setService($service = null)
    {
        // validation for constraint: pattern
        if (is_scalar($service) && !preg_match('/[A-Z]/', $service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z]", "%s" given', var_export($service, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($service) && !is_string($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($service)), __LINE__);
        }
        $this->Service = $service;
        return $this;
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get Vendor value
     * @return \Sabre\UpdateReservation\StructType\CompanyType|null
     */
    public function getVendor()
    {
        return $this->Vendor;
    }
    /**
     * Set Vendor value
     * @param \Sabre\UpdateReservation\StructType\CompanyType $vendor
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function setVendor(\Sabre\UpdateReservation\StructType\CompanyType $vendor = null)
    {
        $this->Vendor = $vendor;
        return $this;
    }
    /**
     * Get ServiceProvider value
     * @return \Sabre\UpdateReservation\StructType\ServiceProviderType|null
     */
    public function getServiceProvider()
    {
        return $this->ServiceProvider;
    }
    /**
     * Set ServiceProvider value
     * @param \Sabre\UpdateReservation\StructType\ServiceProviderType $serviceProvider
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function setServiceProvider(\Sabre\UpdateReservation\StructType\ServiceProviderType $serviceProvider = null)
    {
        $this->ServiceProvider = $serviceProvider;
        return $this;
    }
    /**
     * Get StartDetails value
     * @return \Sabre\UpdateReservation\StructType\LocationDetailsType|null
     */
    public function getStartDetails()
    {
        return $this->StartDetails;
    }
    /**
     * Set StartDetails value
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType $startDetails
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function setStartDetails(\Sabre\UpdateReservation\StructType\LocationDetailsType $startDetails = null)
    {
        $this->StartDetails = $startDetails;
        return $this;
    }
    /**
     * Get StopDetails value
     * @return \Sabre\UpdateReservation\StructType\LocationDetailsType[]|null
     */
    public function getStopDetails()
    {
        return $this->StopDetails;
    }
    /**
     * Set StopDetails value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType[] $stopDetails
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function setStopDetails(array $stopDetails = array())
    {
        foreach ($stopDetails as $groundTransportationTypeStopDetailsItem) {
            // validation for constraint: itemType
            if (!$groundTransportationTypeStopDetailsItem instanceof \Sabre\UpdateReservation\StructType\LocationDetailsType) {
                throw new \InvalidArgumentException(sprintf('The StopDetails property can only contain items of \Sabre\UpdateReservation\StructType\LocationDetailsType, "%s" given', is_object($groundTransportationTypeStopDetailsItem) ? get_class($groundTransportationTypeStopDetailsItem) : gettype($groundTransportationTypeStopDetailsItem)), __LINE__);
            }
        }
        $this->StopDetails = $stopDetails;
        return $this;
    }
    /**
     * Add item to StopDetails value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType $item
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function addToStopDetails(\Sabre\UpdateReservation\StructType\LocationDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\LocationDetailsType) {
            throw new \InvalidArgumentException(sprintf('The StopDetails property can only contain items of \Sabre\UpdateReservation\StructType\LocationDetailsType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->StopDetails[] = $item;
        return $this;
    }
    /**
     * Get EndDetails value
     * @return \Sabre\UpdateReservation\StructType\LocationDetailsType|null
     */
    public function getEndDetails()
    {
        return $this->EndDetails;
    }
    /**
     * Set EndDetails value
     * @param \Sabre\UpdateReservation\StructType\LocationDetailsType $endDetails
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function setEndDetails(\Sabre\UpdateReservation\StructType\LocationDetailsType $endDetails = null)
    {
        $this->EndDetails = $endDetails;
        return $this;
    }
    /**
     * Get ExternalReservation value
     * @return \Sabre\UpdateReservation\StructType\ExternalReservationType|null
     */
    public function getExternalReservation()
    {
        return $this->ExternalReservation;
    }
    /**
     * Set ExternalReservation value
     * @param \Sabre\UpdateReservation\StructType\ExternalReservationType $externalReservation
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function setExternalReservation(\Sabre\UpdateReservation\StructType\ExternalReservationType $externalReservation = null)
    {
        $this->ExternalReservation = $externalReservation;
        return $this;
    }
    /**
     * Get Restrictions value
     * @return \Sabre\UpdateReservation\StructType\RestrictionsType|null
     */
    public function getRestrictions()
    {
        return $this->Restrictions;
    }
    /**
     * Set Restrictions value
     * @param \Sabre\UpdateReservation\StructType\RestrictionsType $restrictions
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function setRestrictions(\Sabre\UpdateReservation\StructType\RestrictionsType $restrictions = null)
    {
        $this->Restrictions = $restrictions;
        return $this;
    }
    /**
     * Get POS value
     * @return \Sabre\UpdateReservation\StructType\POSType|null
     */
    public function getPOS()
    {
        return $this->POS;
    }
    /**
     * Set POS value
     * @param \Sabre\UpdateReservation\StructType\POSType $pOS
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function setPOS(\Sabre\UpdateReservation\StructType\POSType $pOS = null)
    {
        $this->POS = $pOS;
        return $this;
    }
    /**
     * Get AgentLoyalty value
     * @return \Sabre\UpdateReservation\StructType\LoyaltyType[]|null
     */
    public function getAgentLoyalty()
    {
        return $this->AgentLoyalty;
    }
    /**
     * Set AgentLoyalty value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\LoyaltyType[] $agentLoyalty
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function setAgentLoyalty(array $agentLoyalty = array())
    {
        foreach ($agentLoyalty as $groundTransportationTypeAgentLoyaltyItem) {
            // validation for constraint: itemType
            if (!$groundTransportationTypeAgentLoyaltyItem instanceof \Sabre\UpdateReservation\StructType\LoyaltyType) {
                throw new \InvalidArgumentException(sprintf('The AgentLoyalty property can only contain items of \Sabre\UpdateReservation\StructType\LoyaltyType, "%s" given', is_object($groundTransportationTypeAgentLoyaltyItem) ? get_class($groundTransportationTypeAgentLoyaltyItem) : gettype($groundTransportationTypeAgentLoyaltyItem)), __LINE__);
            }
        }
        $this->AgentLoyalty = $agentLoyalty;
        return $this;
    }
    /**
     * Add item to AgentLoyalty value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\LoyaltyType $item
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function addToAgentLoyalty(\Sabre\UpdateReservation\StructType\LoyaltyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\LoyaltyType) {
            throw new \InvalidArgumentException(sprintf('The AgentLoyalty property can only contain items of \Sabre\UpdateReservation\StructType\LoyaltyType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AgentLoyalty[] = $item;
        return $this;
    }
    /**
     * Get Passenger value
     * @return \Sabre\UpdateReservation\StructType\PassengerType[]|null
     */
    public function getPassenger()
    {
        return $this->Passenger;
    }
    /**
     * Set Passenger value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PassengerType[] $passenger
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function setPassenger(array $passenger = array())
    {
        foreach ($passenger as $groundTransportationTypePassengerItem) {
            // validation for constraint: itemType
            if (!$groundTransportationTypePassengerItem instanceof \Sabre\UpdateReservation\StructType\PassengerType) {
                throw new \InvalidArgumentException(sprintf('The Passenger property can only contain items of \Sabre\UpdateReservation\StructType\PassengerType, "%s" given', is_object($groundTransportationTypePassengerItem) ? get_class($groundTransportationTypePassengerItem) : gettype($groundTransportationTypePassengerItem)), __LINE__);
            }
        }
        $this->Passenger = $passenger;
        return $this;
    }
    /**
     * Add item to Passenger value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\PassengerType $item
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function addToPassenger(\Sabre\UpdateReservation\StructType\PassengerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\PassengerType) {
            throw new \InvalidArgumentException(sprintf('The Passenger property can only contain items of \Sabre\UpdateReservation\StructType\PassengerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Passenger[] = $item;
        return $this;
    }
    /**
     * Get RateQualifier value
     * @return \Sabre\UpdateReservation\StructType\RateQualifierType[]|null
     */
    public function getRateQualifier()
    {
        return $this->RateQualifier;
    }
    /**
     * Set RateQualifier value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RateQualifierType[] $rateQualifier
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function setRateQualifier(array $rateQualifier = array())
    {
        foreach ($rateQualifier as $groundTransportationTypeRateQualifierItem) {
            // validation for constraint: itemType
            if (!$groundTransportationTypeRateQualifierItem instanceof \Sabre\UpdateReservation\StructType\RateQualifierType) {
                throw new \InvalidArgumentException(sprintf('The RateQualifier property can only contain items of \Sabre\UpdateReservation\StructType\RateQualifierType, "%s" given', is_object($groundTransportationTypeRateQualifierItem) ? get_class($groundTransportationTypeRateQualifierItem) : gettype($groundTransportationTypeRateQualifierItem)), __LINE__);
            }
        }
        $this->RateQualifier = $rateQualifier;
        return $this;
    }
    /**
     * Add item to RateQualifier value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\RateQualifierType $item
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function addToRateQualifier(\Sabre\UpdateReservation\StructType\RateQualifierType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\RateQualifierType) {
            throw new \InvalidArgumentException(sprintf('The RateQualifier property can only contain items of \Sabre\UpdateReservation\StructType\RateQualifierType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RateQualifier[] = $item;
        return $this;
    }
    /**
     * Get Charges value
     * @return \Sabre\UpdateReservation\StructType\ChargesType|null
     */
    public function getCharges()
    {
        return $this->Charges;
    }
    /**
     * Set Charges value
     * @param \Sabre\UpdateReservation\StructType\ChargesType $charges
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
     */
    public function setCharges(\Sabre\UpdateReservation\StructType\ChargesType $charges = null)
    {
        $this->Charges = $charges;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\GroundTransportationType
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
