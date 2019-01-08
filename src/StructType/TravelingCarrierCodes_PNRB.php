<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TravelingCarrierCodes.PNRB StructType
 * @subpackage Structs
 */
class TravelingCarrierCodes_PNRB extends AbstractStructBase
{
    /**
     * The TravelingCarrierCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var string[]
     */
    public $TravelingCarrierCode;
    /**
     * Constructor method for TravelingCarrierCodes.PNRB
     * @uses TravelingCarrierCodes_PNRB::setTravelingCarrierCode()
     * @param string[] $travelingCarrierCode
     */
    public function __construct(array $travelingCarrierCode = array())
    {
        $this
            ->setTravelingCarrierCode($travelingCarrierCode);
    }
    /**
     * Get TravelingCarrierCode value
     * @return string[]|null
     */
    public function getTravelingCarrierCode()
    {
        return $this->TravelingCarrierCode;
    }
    /**
     * Set TravelingCarrierCode value
     * @throws \InvalidArgumentException
     * @param string[] $travelingCarrierCode
     * @return \Sabre\UpdateReservation\StructType\TravelingCarrierCodes_PNRB
     */
    public function setTravelingCarrierCode(array $travelingCarrierCode = array())
    {
        foreach ($travelingCarrierCode as $travelingCarrierCodes_PNRBTravelingCarrierCodeItem) {
            // validation for constraint: itemType
            if (!is_string($travelingCarrierCodes_PNRBTravelingCarrierCodeItem)) {
                throw new \InvalidArgumentException(sprintf('The TravelingCarrierCode property can only contain items of string, "%s" given', is_object($travelingCarrierCodes_PNRBTravelingCarrierCodeItem) ? get_class($travelingCarrierCodes_PNRBTravelingCarrierCodeItem) : gettype($travelingCarrierCodes_PNRBTravelingCarrierCodeItem)), __LINE__);
            }
        }
        $this->TravelingCarrierCode = $travelingCarrierCode;
        return $this;
    }
    /**
     * Add item to TravelingCarrierCode value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\TravelingCarrierCodes_PNRB
     */
    public function addToTravelingCarrierCode($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The TravelingCarrierCode property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->TravelingCarrierCode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\TravelingCarrierCodes_PNRB
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
