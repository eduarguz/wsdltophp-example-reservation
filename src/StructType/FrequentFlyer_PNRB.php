<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FrequentFlyer.PNRB StructType
 * @subpackage Structs
 */
class FrequentFlyer_PNRB extends Loyalty_PNRB
{
    /**
     * The TravelingCarrierCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\TravelingCarrierCodes_PNRB
     */
    public $TravelingCarrierCodes;
    /**
     * The PartnershipAirlineCodes
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PartnershipAirlineCodes
     */
    public $PartnershipAirlineCodes;
    /**
     * The RPH
     * Meta informations extracted from the WSDL
     * - documentation: The Reference Place Holder (RPH) is an index code used to identify an instance in a collection of like items (e.g. used to assign individual passengers or clients to particular itinerary items).
     * - use: optional
     * @var string
     */
    public $RPH;
    /**
     * The NameNumber
     * Meta informations extracted from the WSDL
     * - documentation: "NameNumber" is used to associate the particular frequent flyer number to a particular passenger within the record.
     * - use: optional
     * @var string
     */
    public $NameNumber;
    /**
     * Constructor method for FrequentFlyer.PNRB
     * @uses FrequentFlyer_PNRB::setTravelingCarrierCodes()
     * @uses FrequentFlyer_PNRB::setPartnershipAirlineCodes()
     * @uses FrequentFlyer_PNRB::setRPH()
     * @uses FrequentFlyer_PNRB::setNameNumber()
     * @param \Sabre\UpdateReservation\StructType\TravelingCarrierCodes_PNRB $travelingCarrierCodes
     * @param \Sabre\UpdateReservation\StructType\PartnershipAirlineCodes $partnershipAirlineCodes
     * @param string $rPH
     * @param string $nameNumber
     */
    public function __construct(\Sabre\UpdateReservation\StructType\TravelingCarrierCodes_PNRB $travelingCarrierCodes = null, \Sabre\UpdateReservation\StructType\PartnershipAirlineCodes $partnershipAirlineCodes = null, $rPH = null, $nameNumber = null)
    {
        $this
            ->setTravelingCarrierCodes($travelingCarrierCodes)
            ->setPartnershipAirlineCodes($partnershipAirlineCodes)
            ->setRPH($rPH)
            ->setNameNumber($nameNumber);
    }
    /**
     * Get TravelingCarrierCodes value
     * @return \Sabre\UpdateReservation\StructType\TravelingCarrierCodes_PNRB|null
     */
    public function getTravelingCarrierCodes()
    {
        return $this->TravelingCarrierCodes;
    }
    /**
     * Set TravelingCarrierCodes value
     * @param \Sabre\UpdateReservation\StructType\TravelingCarrierCodes_PNRB $travelingCarrierCodes
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer_PNRB
     */
    public function setTravelingCarrierCodes(\Sabre\UpdateReservation\StructType\TravelingCarrierCodes_PNRB $travelingCarrierCodes = null)
    {
        $this->TravelingCarrierCodes = $travelingCarrierCodes;
        return $this;
    }
    /**
     * Get PartnershipAirlineCodes value
     * @return \Sabre\UpdateReservation\StructType\PartnershipAirlineCodes|null
     */
    public function getPartnershipAirlineCodes()
    {
        return $this->PartnershipAirlineCodes;
    }
    /**
     * Set PartnershipAirlineCodes value
     * @param \Sabre\UpdateReservation\StructType\PartnershipAirlineCodes $partnershipAirlineCodes
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer_PNRB
     */
    public function setPartnershipAirlineCodes(\Sabre\UpdateReservation\StructType\PartnershipAirlineCodes $partnershipAirlineCodes = null)
    {
        $this->PartnershipAirlineCodes = $partnershipAirlineCodes;
        return $this;
    }
    /**
     * Get RPH value
     * @return string|null
     */
    public function getRPH()
    {
        return $this->RPH;
    }
    /**
     * Set RPH value
     * @param string $rPH
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer_PNRB
     */
    public function setRPH($rPH = null)
    {
        // validation for constraint: string
        if (!is_null($rPH) && !is_string($rPH)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($rPH)), __LINE__);
        }
        $this->RPH = $rPH;
        return $this;
    }
    /**
     * Get NameNumber value
     * @return string|null
     */
    public function getNameNumber()
    {
        return $this->NameNumber;
    }
    /**
     * Set NameNumber value
     * @param string $nameNumber
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer_PNRB
     */
    public function setNameNumber($nameNumber = null)
    {
        // validation for constraint: string
        if (!is_null($nameNumber) && !is_string($nameNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameNumber)), __LINE__);
        }
        $this->NameNumber = $nameNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FrequentFlyer_PNRB
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
