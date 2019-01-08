<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RentalRate.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information on the rates associated with this vehicle. Rate information can include the distance and the base rental cost, along with information on the various factors that may influence this rate.
 * @subpackage Structs
 */
class RentalRate_PNRB extends AbstractStructBase
{
    /**
     * The RateCode
     * Meta informations extracted from the WSDL
     * - documentation: rate code for the car
     * - minOccurs: 0
     * @var string
     */
    public $RateCode;
    /**
     * The RateGuaranteedQuoted
     * Meta informations extracted from the WSDL
     * - documentation: is rate guaranteed
     * - minOccurs: 0
     * @var string
     */
    public $RateGuaranteedQuoted;
    /**
     * The RateChanged
     * Meta informations extracted from the WSDL
     * - documentation: has rate changed
     * - minOccurs: 0
     * @var string
     */
    public $RateChanged;
    /**
     * The ExtraMileageCharge
     * Meta informations extracted from the WSDL
     * - documentation: amount of extra mileage charge
     * - minOccurs: 0
     * @var float
     */
    public $ExtraMileageCharge;
    /**
     * The MileageCurrencyCode
     * Meta informations extracted from the WSDL
     * - documentation: currency code for extra mileage charge
     * - minOccurs: 0
     * @var string
     */
    public $MileageCurrencyCode;
    /**
     * The MileageDecimalPlaces
     * Meta informations extracted from the WSDL
     * - documentation: number of decimal points in extra mileage charge
     * - minOccurs: 0
     * @var int
     */
    public $MileageDecimalPlaces;
    /**
     * The MileageKilometersCode
     * Meta informations extracted from the WSDL
     * - documentation: is extra "mileage" quoted in kilometers
     * - minOccurs: 0
     * @var string
     */
    public $MileageKilometersCode;
    /**
     * The VehicleCharges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB
     */
    public $VehicleCharges;
    /**
     * The RateQualifierCode
     * Meta informations extracted from the WSDL
     * - documentation: Indicates the type of rates applicable to the customer, along with any discount number or promotional codes that affect the quoted rate. | The RateQualifierCoreType complex type defines the rate information that is common to all
     * transactions. Such information may include rate codes, rate type, promotional codes, etc. This information may be used to determine the rate that is made available.
     * - minOccurs: 0
     * @var string
     */
    public $RateQualifierCode;
    /**
     * The BillingNumber
     * Meta informations extracted from the WSDL
     * - documentation: The RateQualifierCoreType complex type defines the rate information that is common to all transactions. Such information may include rate codes, rate type, promotional codes, etc. This information may be used to determine the rate
     * that is made available. prepaid billing number
     * - minOccurs: 0
     * @var string
     */
    public $BillingNumber;
    /**
     * The BillingReference
     * Meta informations extracted from the WSDL
     * - documentation: agency billing reference number
     * - minOccurs: 0
     * @var string
     */
    public $BillingReference;
    /**
     * The PromotionalCoupon
     * Meta informations extracted from the WSDL
     * - documentation: promotional coupon number
     * - minOccurs: 0
     * @var string
     */
    public $PromotionalCoupon;
    /**
     * Constructor method for RentalRate.PNRB
     * @uses RentalRate_PNRB::setRateCode()
     * @uses RentalRate_PNRB::setRateGuaranteedQuoted()
     * @uses RentalRate_PNRB::setRateChanged()
     * @uses RentalRate_PNRB::setExtraMileageCharge()
     * @uses RentalRate_PNRB::setMileageCurrencyCode()
     * @uses RentalRate_PNRB::setMileageDecimalPlaces()
     * @uses RentalRate_PNRB::setMileageKilometersCode()
     * @uses RentalRate_PNRB::setVehicleCharges()
     * @uses RentalRate_PNRB::setRateQualifierCode()
     * @uses RentalRate_PNRB::setBillingNumber()
     * @uses RentalRate_PNRB::setBillingReference()
     * @uses RentalRate_PNRB::setPromotionalCoupon()
     * @param string $rateCode
     * @param string $rateGuaranteedQuoted
     * @param string $rateChanged
     * @param float $extraMileageCharge
     * @param string $mileageCurrencyCode
     * @param int $mileageDecimalPlaces
     * @param string $mileageKilometersCode
     * @param \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB $vehicleCharges
     * @param string $rateQualifierCode
     * @param string $billingNumber
     * @param string $billingReference
     * @param string $promotionalCoupon
     */
    public function __construct($rateCode = null, $rateGuaranteedQuoted = null, $rateChanged = null, $extraMileageCharge = null, $mileageCurrencyCode = null, $mileageDecimalPlaces = null, $mileageKilometersCode = null, \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB $vehicleCharges = null, $rateQualifierCode = null, $billingNumber = null, $billingReference = null, $promotionalCoupon = null)
    {
        $this
            ->setRateCode($rateCode)
            ->setRateGuaranteedQuoted($rateGuaranteedQuoted)
            ->setRateChanged($rateChanged)
            ->setExtraMileageCharge($extraMileageCharge)
            ->setMileageCurrencyCode($mileageCurrencyCode)
            ->setMileageDecimalPlaces($mileageDecimalPlaces)
            ->setMileageKilometersCode($mileageKilometersCode)
            ->setVehicleCharges($vehicleCharges)
            ->setRateQualifierCode($rateQualifierCode)
            ->setBillingNumber($billingNumber)
            ->setBillingReference($billingReference)
            ->setPromotionalCoupon($promotionalCoupon);
    }
    /**
     * Get RateCode value
     * @return string|null
     */
    public function getRateCode()
    {
        return $this->RateCode;
    }
    /**
     * Set RateCode value
     * @param string $rateCode
     * @return \Sabre\UpdateReservation\StructType\RentalRate_PNRB
     */
    public function setRateCode($rateCode = null)
    {
        // validation for constraint: string
        if (!is_null($rateCode) && !is_string($rateCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateCode)), __LINE__);
        }
        $this->RateCode = $rateCode;
        return $this;
    }
    /**
     * Get RateGuaranteedQuoted value
     * @return string|null
     */
    public function getRateGuaranteedQuoted()
    {
        return $this->RateGuaranteedQuoted;
    }
    /**
     * Set RateGuaranteedQuoted value
     * @param string $rateGuaranteedQuoted
     * @return \Sabre\UpdateReservation\StructType\RentalRate_PNRB
     */
    public function setRateGuaranteedQuoted($rateGuaranteedQuoted = null)
    {
        // validation for constraint: string
        if (!is_null($rateGuaranteedQuoted) && !is_string($rateGuaranteedQuoted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateGuaranteedQuoted)), __LINE__);
        }
        $this->RateGuaranteedQuoted = $rateGuaranteedQuoted;
        return $this;
    }
    /**
     * Get RateChanged value
     * @return string|null
     */
    public function getRateChanged()
    {
        return $this->RateChanged;
    }
    /**
     * Set RateChanged value
     * @param string $rateChanged
     * @return \Sabre\UpdateReservation\StructType\RentalRate_PNRB
     */
    public function setRateChanged($rateChanged = null)
    {
        // validation for constraint: string
        if (!is_null($rateChanged) && !is_string($rateChanged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateChanged)), __LINE__);
        }
        $this->RateChanged = $rateChanged;
        return $this;
    }
    /**
     * Get ExtraMileageCharge value
     * @return float|null
     */
    public function getExtraMileageCharge()
    {
        return $this->ExtraMileageCharge;
    }
    /**
     * Set ExtraMileageCharge value
     * @param float $extraMileageCharge
     * @return \Sabre\UpdateReservation\StructType\RentalRate_PNRB
     */
    public function setExtraMileageCharge($extraMileageCharge = null)
    {
        $this->ExtraMileageCharge = $extraMileageCharge;
        return $this;
    }
    /**
     * Get MileageCurrencyCode value
     * @return string|null
     */
    public function getMileageCurrencyCode()
    {
        return $this->MileageCurrencyCode;
    }
    /**
     * Set MileageCurrencyCode value
     * @param string $mileageCurrencyCode
     * @return \Sabre\UpdateReservation\StructType\RentalRate_PNRB
     */
    public function setMileageCurrencyCode($mileageCurrencyCode = null)
    {
        // validation for constraint: string
        if (!is_null($mileageCurrencyCode) && !is_string($mileageCurrencyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mileageCurrencyCode)), __LINE__);
        }
        $this->MileageCurrencyCode = $mileageCurrencyCode;
        return $this;
    }
    /**
     * Get MileageDecimalPlaces value
     * @return int|null
     */
    public function getMileageDecimalPlaces()
    {
        return $this->MileageDecimalPlaces;
    }
    /**
     * Set MileageDecimalPlaces value
     * @param int $mileageDecimalPlaces
     * @return \Sabre\UpdateReservation\StructType\RentalRate_PNRB
     */
    public function setMileageDecimalPlaces($mileageDecimalPlaces = null)
    {
        // validation for constraint: int
        if (!is_null($mileageDecimalPlaces) && !is_numeric($mileageDecimalPlaces)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($mileageDecimalPlaces)), __LINE__);
        }
        $this->MileageDecimalPlaces = $mileageDecimalPlaces;
        return $this;
    }
    /**
     * Get MileageKilometersCode value
     * @return string|null
     */
    public function getMileageKilometersCode()
    {
        return $this->MileageKilometersCode;
    }
    /**
     * Set MileageKilometersCode value
     * @param string $mileageKilometersCode
     * @return \Sabre\UpdateReservation\StructType\RentalRate_PNRB
     */
    public function setMileageKilometersCode($mileageKilometersCode = null)
    {
        // validation for constraint: string
        if (!is_null($mileageKilometersCode) && !is_string($mileageKilometersCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mileageKilometersCode)), __LINE__);
        }
        $this->MileageKilometersCode = $mileageKilometersCode;
        return $this;
    }
    /**
     * Get VehicleCharges value
     * @return \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB|null
     */
    public function getVehicleCharges()
    {
        return $this->VehicleCharges;
    }
    /**
     * Set VehicleCharges value
     * @param \Sabre\UpdateReservation\StructType\VehicleCharges_PNRB $vehicleCharges
     * @return \Sabre\UpdateReservation\StructType\RentalRate_PNRB
     */
    public function setVehicleCharges(\Sabre\UpdateReservation\StructType\VehicleCharges_PNRB $vehicleCharges = null)
    {
        $this->VehicleCharges = $vehicleCharges;
        return $this;
    }
    /**
     * Get RateQualifierCode value
     * @return string|null
     */
    public function getRateQualifierCode()
    {
        return $this->RateQualifierCode;
    }
    /**
     * Set RateQualifierCode value
     * @param string $rateQualifierCode
     * @return \Sabre\UpdateReservation\StructType\RentalRate_PNRB
     */
    public function setRateQualifierCode($rateQualifierCode = null)
    {
        // validation for constraint: string
        if (!is_null($rateQualifierCode) && !is_string($rateQualifierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rateQualifierCode)), __LINE__);
        }
        $this->RateQualifierCode = $rateQualifierCode;
        return $this;
    }
    /**
     * Get BillingNumber value
     * @return string|null
     */
    public function getBillingNumber()
    {
        return $this->BillingNumber;
    }
    /**
     * Set BillingNumber value
     * @param string $billingNumber
     * @return \Sabre\UpdateReservation\StructType\RentalRate_PNRB
     */
    public function setBillingNumber($billingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($billingNumber) && !is_string($billingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingNumber)), __LINE__);
        }
        $this->BillingNumber = $billingNumber;
        return $this;
    }
    /**
     * Get BillingReference value
     * @return string|null
     */
    public function getBillingReference()
    {
        return $this->BillingReference;
    }
    /**
     * Set BillingReference value
     * @param string $billingReference
     * @return \Sabre\UpdateReservation\StructType\RentalRate_PNRB
     */
    public function setBillingReference($billingReference = null)
    {
        // validation for constraint: string
        if (!is_null($billingReference) && !is_string($billingReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($billingReference)), __LINE__);
        }
        $this->BillingReference = $billingReference;
        return $this;
    }
    /**
     * Get PromotionalCoupon value
     * @return string|null
     */
    public function getPromotionalCoupon()
    {
        return $this->PromotionalCoupon;
    }
    /**
     * Set PromotionalCoupon value
     * @param string $promotionalCoupon
     * @return \Sabre\UpdateReservation\StructType\RentalRate_PNRB
     */
    public function setPromotionalCoupon($promotionalCoupon = null)
    {
        // validation for constraint: string
        if (!is_null($promotionalCoupon) && !is_string($promotionalCoupon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promotionalCoupon)), __LINE__);
        }
        $this->PromotionalCoupon = $promotionalCoupon;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RentalRate_PNRB
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
