<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservation.PNRB StructType
 * @subpackage Structs
 */
class GetReservation_PNRB extends AbstractStructBase
{
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Version;
    /**
     * The UniqueID
     * Meta informations extracted from the WSDL
     * - documentation: Unique reservation ID
     * - minOccurs: 0
     * @var string
     */
    public $UniqueID;
    /**
     * The CreateDate
     * Meta informations extracted from the WSDL
     * - documentation: Only Required if Past Date Reservations Requested
     * - minOccurs: 0
     * @var string
     */
    public $CreateDate;
    /**
     * Constructor method for getReservation.PNRB
     * @uses GetReservation_PNRB::setVersion()
     * @uses GetReservation_PNRB::setUniqueID()
     * @uses GetReservation_PNRB::setCreateDate()
     * @param string $version
     * @param string $uniqueID
     * @param string $createDate
     */
    public function __construct($version = null, $uniqueID = null, $createDate = null)
    {
        $this
            ->setVersion($version)
            ->setUniqueID($uniqueID)
            ->setCreateDate($createDate);
    }
    /**
     * Get Version value
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $version
     * @return \Sabre\UpdateReservation\StructType\GetReservation_PNRB
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Get UniqueID value
     * @return string|null
     */
    public function getUniqueID()
    {
        return $this->UniqueID;
    }
    /**
     * Set UniqueID value
     * @param string $uniqueID
     * @return \Sabre\UpdateReservation\StructType\GetReservation_PNRB
     */
    public function setUniqueID($uniqueID = null)
    {
        // validation for constraint: string
        if (!is_null($uniqueID) && !is_string($uniqueID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uniqueID)), __LINE__);
        }
        $this->UniqueID = $uniqueID;
        return $this;
    }
    /**
     * Get CreateDate value
     * @return string|null
     */
    public function getCreateDate()
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \Sabre\UpdateReservation\StructType\GetReservation_PNRB
     */
    public function setCreateDate($createDate = null)
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createDate)), __LINE__);
        }
        $this->CreateDate = $createDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\GetReservation_PNRB
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
