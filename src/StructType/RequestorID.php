<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RequestorID StructType
 * Meta informations extracted from the WSDL
 * - documentation: IATA ID is mandatory for GDS Booking
 * @subpackage Structs
 */
class RequestorID extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: OTA Table UIT : Value 5 for travel agency | Positive Integer to denote OTA Codes
     * - use: optional
     * - minInclusive: 1
     * @var int
     */
    public $Type;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - documentation: Agency IATA ID
     * - use: optional
     * @var string
     */
    public $Id;
    /**
     * The IdContext
     * Meta informations extracted from the WSDL
     * - documentation: Value : IATA
     * - use: optional
     * @var string
     */
    public $IdContext;
    /**
     * Constructor method for RequestorID
     * @uses RequestorID::setType()
     * @uses RequestorID::setId()
     * @uses RequestorID::setIdContext()
     * @param int $type
     * @param string $id
     * @param string $idContext
     */
    public function __construct($type = null, $id = null, $idContext = null)
    {
        $this
            ->setType($type)
            ->setId($id)
            ->setIdContext($idContext);
    }
    /**
     * Get Type value
     * @return int|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param int $type
     * @return \Sabre\UpdateReservation\StructType\RequestorID
     */
    public function setType($type = null)
    {
        // validation for constraint: minInclusive
        if ($type < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $type), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($type) && !is_numeric($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\RequestorID
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get IdContext value
     * @return string|null
     */
    public function getIdContext()
    {
        return $this->IdContext;
    }
    /**
     * Set IdContext value
     * @param string $idContext
     * @return \Sabre\UpdateReservation\StructType\RequestorID
     */
    public function setIdContext($idContext = null)
    {
        // validation for constraint: string
        if (!is_null($idContext) && !is_string($idContext)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($idContext)), __LINE__);
        }
        $this->IdContext = $idContext;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\RequestorID
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
