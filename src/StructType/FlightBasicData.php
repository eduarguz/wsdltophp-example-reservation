<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FlightBasicData StructType
 * @subpackage Structs
 */
class FlightBasicData extends AbstractStructBase
{
    /**
     * The CarrierCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CarrierCode;
    /**
     * The FlightNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Identifies a flight number (1 to 4 numbers followed by optional uppercase A - Z, which specifies an operational suffix. Value may also be the enumerated or OPEN or ARNK. ARNK means Arrival Unknown. An OPEN air segment indicates the
     * cities in the flight and the class of service for ticketing purposes but no flight number. Leading zeros (0) are ignored. Note, Iberia uses leading 0 in flight numbers (ex: 0900 is different than 900). | Identifies a flight number (1 to 4 numbers
     * followed by optional uppercase A - Z, which specifies an operational suffix. Value may also be the enumerated or OPEN or ARNK. ARNK means Arrival Unknown. An OPEN air segment indicates the cities in the flight and the class of service for ticketing
     * purposes but no flight number. Leading zeros (0) are ignored. Note, Iberia uses leading 0 in flight numbers (ex: 0900 is different than 900).
     * - union: _flightNumberPattern | _flightNumberLiterals
     * @var string
     */
    public $FlightNumber;
    /**
     * The DateOfTravel
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DateOfTravel;
    /**
     * The BoardPoint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BoardPoint;
    /**
     * The OffPoint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OffPoint;
    /**
     * The ClassOfService
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClassOfService;
    /**
     * Constructor method for FlightBasicData
     * @uses FlightBasicData::setCarrierCode()
     * @uses FlightBasicData::setFlightNumber()
     * @uses FlightBasicData::setDateOfTravel()
     * @uses FlightBasicData::setBoardPoint()
     * @uses FlightBasicData::setOffPoint()
     * @uses FlightBasicData::setClassOfService()
     * @param string $carrierCode
     * @param string $flightNumber
     * @param string $dateOfTravel
     * @param string $boardPoint
     * @param string $offPoint
     * @param string $classOfService
     */
    public function __construct($carrierCode = null, $flightNumber = null, $dateOfTravel = null, $boardPoint = null, $offPoint = null, $classOfService = null)
    {
        $this
            ->setCarrierCode($carrierCode)
            ->setFlightNumber($flightNumber)
            ->setDateOfTravel($dateOfTravel)
            ->setBoardPoint($boardPoint)
            ->setOffPoint($offPoint)
            ->setClassOfService($classOfService);
    }
    /**
     * Get CarrierCode value
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @param string $carrierCode
     * @return \Sabre\UpdateReservation\StructType\FlightBasicData
     */
    public function setCarrierCode($carrierCode = null)
    {
        // validation for constraint: string
        if (!is_null($carrierCode) && !is_string($carrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($carrierCode)), __LINE__);
        }
        $this->CarrierCode = $carrierCode;
        return $this;
    }
    /**
     * Get FlightNumber value
     * @return string|null
     */
    public function getFlightNumber()
    {
        return $this->FlightNumber;
    }
    /**
     * Set FlightNumber value
     * @param string $flightNumber
     * @return \Sabre\UpdateReservation\StructType\FlightBasicData
     */
    public function setFlightNumber($flightNumber = null)
    {
        // validation for constraint: pattern
        if (is_scalar($flightNumber) && !preg_match('/[0-9]{1,4}[A-Z]?/', $flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,4}[A-Z]?", "%s" given', var_export($flightNumber, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($flightNumber) && !is_string($flightNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flightNumber)), __LINE__);
        }
        $this->FlightNumber = $flightNumber;
        return $this;
    }
    /**
     * Get DateOfTravel value
     * @return string|null
     */
    public function getDateOfTravel()
    {
        return $this->DateOfTravel;
    }
    /**
     * Set DateOfTravel value
     * @param string $dateOfTravel
     * @return \Sabre\UpdateReservation\StructType\FlightBasicData
     */
    public function setDateOfTravel($dateOfTravel = null)
    {
        // validation for constraint: string
        if (!is_null($dateOfTravel) && !is_string($dateOfTravel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($dateOfTravel)), __LINE__);
        }
        $this->DateOfTravel = $dateOfTravel;
        return $this;
    }
    /**
     * Get BoardPoint value
     * @return string|null
     */
    public function getBoardPoint()
    {
        return $this->BoardPoint;
    }
    /**
     * Set BoardPoint value
     * @param string $boardPoint
     * @return \Sabre\UpdateReservation\StructType\FlightBasicData
     */
    public function setBoardPoint($boardPoint = null)
    {
        // validation for constraint: string
        if (!is_null($boardPoint) && !is_string($boardPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($boardPoint)), __LINE__);
        }
        $this->BoardPoint = $boardPoint;
        return $this;
    }
    /**
     * Get OffPoint value
     * @return string|null
     */
    public function getOffPoint()
    {
        return $this->OffPoint;
    }
    /**
     * Set OffPoint value
     * @param string $offPoint
     * @return \Sabre\UpdateReservation\StructType\FlightBasicData
     */
    public function setOffPoint($offPoint = null)
    {
        // validation for constraint: string
        if (!is_null($offPoint) && !is_string($offPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offPoint)), __LINE__);
        }
        $this->OffPoint = $offPoint;
        return $this;
    }
    /**
     * Get ClassOfService value
     * @return string|null
     */
    public function getClassOfService()
    {
        return $this->ClassOfService;
    }
    /**
     * Set ClassOfService value
     * @param string $classOfService
     * @return \Sabre\UpdateReservation\StructType\FlightBasicData
     */
    public function setClassOfService($classOfService = null)
    {
        // validation for constraint: string
        if (!is_null($classOfService) && !is_string($classOfService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($classOfService)), __LINE__);
        }
        $this->ClassOfService = $classOfService;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\FlightBasicData
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
