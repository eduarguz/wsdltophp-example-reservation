<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResGlobalInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Reservation Information
 * @subpackage Structs
 */
class ResGlobalInfoType extends AbstractStructBase
{
    /**
     * The BookingInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\BookingInfoRefType
     */
    public $BookingInfo;
    /**
     * The HotelInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\HotelInfoType
     */
    public $HotelInfo;
    /**
     * The StayDateRange
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\StayDateRange
     */
    public $StayDateRange;
    /**
     * The Total
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TotalCharges
     */
    public $Total;
    /**
     * The AdditionalDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\AdditionalDetailsType
     */
    public $AdditionalDetails;
    /**
     * The Fees
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\FeesType
     */
    public $Fees;
    /**
     * The Taxes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\LodgingTaxesType
     */
    public $Taxes;
    /**
     * The CancelPenalties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CancelPenalties
     */
    public $CancelPenalties;
    /**
     * The Guarantee
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\GuaranteeType
     */
    public $Guarantee;
    /**
     * The Commission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\CommissionType
     */
    public $Commission;
    /**
     * The Discounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Discounts
     */
    public $Discounts;
    /**
     * Constructor method for ResGlobalInfoType
     * @uses ResGlobalInfoType::setBookingInfo()
     * @uses ResGlobalInfoType::setHotelInfo()
     * @uses ResGlobalInfoType::setStayDateRange()
     * @uses ResGlobalInfoType::setTotal()
     * @uses ResGlobalInfoType::setAdditionalDetails()
     * @uses ResGlobalInfoType::setFees()
     * @uses ResGlobalInfoType::setTaxes()
     * @uses ResGlobalInfoType::setCancelPenalties()
     * @uses ResGlobalInfoType::setGuarantee()
     * @uses ResGlobalInfoType::setCommission()
     * @uses ResGlobalInfoType::setDiscounts()
     * @param \Sabre\UpdateReservation\StructType\BookingInfoRefType $bookingInfo
     * @param \Sabre\UpdateReservation\StructType\HotelInfoType $hotelInfo
     * @param \Sabre\UpdateReservation\StructType\StayDateRange $stayDateRange
     * @param \Sabre\UpdateReservation\StructType\TotalCharges $total
     * @param \Sabre\UpdateReservation\StructType\AdditionalDetailsType $additionalDetails
     * @param \Sabre\UpdateReservation\StructType\FeesType $fees
     * @param \Sabre\UpdateReservation\StructType\LodgingTaxesType $taxes
     * @param \Sabre\UpdateReservation\StructType\CancelPenalties $cancelPenalties
     * @param \Sabre\UpdateReservation\StructType\GuaranteeType $guarantee
     * @param \Sabre\UpdateReservation\StructType\CommissionType $commission
     * @param \Sabre\UpdateReservation\StructType\Discounts $discounts
     */
    public function __construct(\Sabre\UpdateReservation\StructType\BookingInfoRefType $bookingInfo = null, \Sabre\UpdateReservation\StructType\HotelInfoType $hotelInfo = null, \Sabre\UpdateReservation\StructType\StayDateRange $stayDateRange = null, \Sabre\UpdateReservation\StructType\TotalCharges $total = null, \Sabre\UpdateReservation\StructType\AdditionalDetailsType $additionalDetails = null, \Sabre\UpdateReservation\StructType\FeesType $fees = null, \Sabre\UpdateReservation\StructType\LodgingTaxesType $taxes = null, \Sabre\UpdateReservation\StructType\CancelPenalties $cancelPenalties = null, \Sabre\UpdateReservation\StructType\GuaranteeType $guarantee = null, \Sabre\UpdateReservation\StructType\CommissionType $commission = null, \Sabre\UpdateReservation\StructType\Discounts $discounts = null)
    {
        $this
            ->setBookingInfo($bookingInfo)
            ->setHotelInfo($hotelInfo)
            ->setStayDateRange($stayDateRange)
            ->setTotal($total)
            ->setAdditionalDetails($additionalDetails)
            ->setFees($fees)
            ->setTaxes($taxes)
            ->setCancelPenalties($cancelPenalties)
            ->setGuarantee($guarantee)
            ->setCommission($commission)
            ->setDiscounts($discounts);
    }
    /**
     * Get BookingInfo value
     * @return \Sabre\UpdateReservation\StructType\BookingInfoRefType|null
     */
    public function getBookingInfo()
    {
        return $this->BookingInfo;
    }
    /**
     * Set BookingInfo value
     * @param \Sabre\UpdateReservation\StructType\BookingInfoRefType $bookingInfo
     * @return \Sabre\UpdateReservation\StructType\ResGlobalInfoType
     */
    public function setBookingInfo(\Sabre\UpdateReservation\StructType\BookingInfoRefType $bookingInfo = null)
    {
        $this->BookingInfo = $bookingInfo;
        return $this;
    }
    /**
     * Get HotelInfo value
     * @return \Sabre\UpdateReservation\StructType\HotelInfoType|null
     */
    public function getHotelInfo()
    {
        return $this->HotelInfo;
    }
    /**
     * Set HotelInfo value
     * @param \Sabre\UpdateReservation\StructType\HotelInfoType $hotelInfo
     * @return \Sabre\UpdateReservation\StructType\ResGlobalInfoType
     */
    public function setHotelInfo(\Sabre\UpdateReservation\StructType\HotelInfoType $hotelInfo = null)
    {
        $this->HotelInfo = $hotelInfo;
        return $this;
    }
    /**
     * Get StayDateRange value
     * @return \Sabre\UpdateReservation\StructType\StayDateRange|null
     */
    public function getStayDateRange()
    {
        return $this->StayDateRange;
    }
    /**
     * Set StayDateRange value
     * @param \Sabre\UpdateReservation\StructType\StayDateRange $stayDateRange
     * @return \Sabre\UpdateReservation\StructType\ResGlobalInfoType
     */
    public function setStayDateRange(\Sabre\UpdateReservation\StructType\StayDateRange $stayDateRange = null)
    {
        $this->StayDateRange = $stayDateRange;
        return $this;
    }
    /**
     * Get Total value
     * @return \Sabre\UpdateReservation\StructType\TotalCharges|null
     */
    public function getTotal()
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param \Sabre\UpdateReservation\StructType\TotalCharges $total
     * @return \Sabre\UpdateReservation\StructType\ResGlobalInfoType
     */
    public function setTotal(\Sabre\UpdateReservation\StructType\TotalCharges $total = null)
    {
        $this->Total = $total;
        return $this;
    }
    /**
     * Get AdditionalDetails value
     * @return \Sabre\UpdateReservation\StructType\AdditionalDetailsType|null
     */
    public function getAdditionalDetails()
    {
        return $this->AdditionalDetails;
    }
    /**
     * Set AdditionalDetails value
     * @param \Sabre\UpdateReservation\StructType\AdditionalDetailsType $additionalDetails
     * @return \Sabre\UpdateReservation\StructType\ResGlobalInfoType
     */
    public function setAdditionalDetails(\Sabre\UpdateReservation\StructType\AdditionalDetailsType $additionalDetails = null)
    {
        $this->AdditionalDetails = $additionalDetails;
        return $this;
    }
    /**
     * Get Fees value
     * @return \Sabre\UpdateReservation\StructType\FeesType|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \Sabre\UpdateReservation\StructType\FeesType $fees
     * @return \Sabre\UpdateReservation\StructType\ResGlobalInfoType
     */
    public function setFees(\Sabre\UpdateReservation\StructType\FeesType $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get Taxes value
     * @return \Sabre\UpdateReservation\StructType\LodgingTaxesType|null
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param \Sabre\UpdateReservation\StructType\LodgingTaxesType $taxes
     * @return \Sabre\UpdateReservation\StructType\ResGlobalInfoType
     */
    public function setTaxes(\Sabre\UpdateReservation\StructType\LodgingTaxesType $taxes = null)
    {
        $this->Taxes = $taxes;
        return $this;
    }
    /**
     * Get CancelPenalties value
     * @return \Sabre\UpdateReservation\StructType\CancelPenalties|null
     */
    public function getCancelPenalties()
    {
        return $this->CancelPenalties;
    }
    /**
     * Set CancelPenalties value
     * @param \Sabre\UpdateReservation\StructType\CancelPenalties $cancelPenalties
     * @return \Sabre\UpdateReservation\StructType\ResGlobalInfoType
     */
    public function setCancelPenalties(\Sabre\UpdateReservation\StructType\CancelPenalties $cancelPenalties = null)
    {
        $this->CancelPenalties = $cancelPenalties;
        return $this;
    }
    /**
     * Get Guarantee value
     * @return \Sabre\UpdateReservation\StructType\GuaranteeType|null
     */
    public function getGuarantee()
    {
        return $this->Guarantee;
    }
    /**
     * Set Guarantee value
     * @param \Sabre\UpdateReservation\StructType\GuaranteeType $guarantee
     * @return \Sabre\UpdateReservation\StructType\ResGlobalInfoType
     */
    public function setGuarantee(\Sabre\UpdateReservation\StructType\GuaranteeType $guarantee = null)
    {
        $this->Guarantee = $guarantee;
        return $this;
    }
    /**
     * Get Commission value
     * @return \Sabre\UpdateReservation\StructType\CommissionType|null
     */
    public function getCommission()
    {
        return $this->Commission;
    }
    /**
     * Set Commission value
     * @param \Sabre\UpdateReservation\StructType\CommissionType $commission
     * @return \Sabre\UpdateReservation\StructType\ResGlobalInfoType
     */
    public function setCommission(\Sabre\UpdateReservation\StructType\CommissionType $commission = null)
    {
        $this->Commission = $commission;
        return $this;
    }
    /**
     * Get Discounts value
     * @return \Sabre\UpdateReservation\StructType\Discounts|null
     */
    public function getDiscounts()
    {
        return $this->Discounts;
    }
    /**
     * Set Discounts value
     * @param \Sabre\UpdateReservation\StructType\Discounts $discounts
     * @return \Sabre\UpdateReservation\StructType\ResGlobalInfoType
     */
    public function setDiscounts(\Sabre\UpdateReservation\StructType\Discounts $discounts = null)
    {
        $this->Discounts = $discounts;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ResGlobalInfoType
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
