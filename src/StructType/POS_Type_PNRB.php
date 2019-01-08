<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for POS_Type.PNRB StructType
 * Meta informations extracted from the WSDL
 * - documentation: Point of Sale (POS) is the details identifying the party or connection channel making the request.
 * @subpackage Structs
 */
class POS_Type_PNRB extends AbstractStructBase
{
    /**
     * The Source
     * Meta informations extracted from the WSDL
     * - documentation: This holds details regarding the requestor. It may be repeated to also accommodate the delivery systems.
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\SourceType_PNRB
     */
    public $Source;
    /**
     * The AirExtras
     * Meta informations extracted from the WSDL
     * - documentation: "AirExtras" is used to indicate whether or not air extra-related information pertains to the particular record.
     * - use: optional
     * @var bool
     */
    public $AirExtras;
    /**
     * The InhibitCode
     * Meta informations extracted from the WSDL
     * - documentation: "InhibitCode" is utilized to return the viewership code associated with the particular record.
     * - use: optional
     * @var string
     */
    public $InhibitCode;
    /**
     * Constructor method for POS_Type.PNRB
     * @uses POS_Type_PNRB::setSource()
     * @uses POS_Type_PNRB::setAirExtras()
     * @uses POS_Type_PNRB::setInhibitCode()
     * @param \Sabre\UpdateReservation\StructType\SourceType_PNRB $source
     * @param bool $airExtras
     * @param string $inhibitCode
     */
    public function __construct(\Sabre\UpdateReservation\StructType\SourceType_PNRB $source = null, $airExtras = null, $inhibitCode = null)
    {
        $this
            ->setSource($source)
            ->setAirExtras($airExtras)
            ->setInhibitCode($inhibitCode);
    }
    /**
     * Get Source value
     * @return \Sabre\UpdateReservation\StructType\SourceType_PNRB|null
     */
    public function getSource()
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param \Sabre\UpdateReservation\StructType\SourceType_PNRB $source
     * @return \Sabre\UpdateReservation\StructType\POS_Type_PNRB
     */
    public function setSource(\Sabre\UpdateReservation\StructType\SourceType_PNRB $source = null)
    {
        $this->Source = $source;
        return $this;
    }
    /**
     * Get AirExtras value
     * @return bool|null
     */
    public function getAirExtras()
    {
        return $this->AirExtras;
    }
    /**
     * Set AirExtras value
     * @param bool $airExtras
     * @return \Sabre\UpdateReservation\StructType\POS_Type_PNRB
     */
    public function setAirExtras($airExtras = null)
    {
        // validation for constraint: boolean
        if (!is_null($airExtras) && !is_bool($airExtras)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($airExtras)), __LINE__);
        }
        $this->AirExtras = $airExtras;
        return $this;
    }
    /**
     * Get InhibitCode value
     * @return string|null
     */
    public function getInhibitCode()
    {
        return $this->InhibitCode;
    }
    /**
     * Set InhibitCode value
     * @param string $inhibitCode
     * @return \Sabre\UpdateReservation\StructType\POS_Type_PNRB
     */
    public function setInhibitCode($inhibitCode = null)
    {
        // validation for constraint: string
        if (!is_null($inhibitCode) && !is_string($inhibitCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inhibitCode)), __LINE__);
        }
        $this->InhibitCode = $inhibitCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\POS_Type_PNRB
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
