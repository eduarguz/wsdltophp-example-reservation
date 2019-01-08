<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasicRoom StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represent a Basic Room Which Can be used in Request/Response
 * @subpackage Structs
 */
class BasicRoom extends AbstractStructBase
{
    /**
     * The NonSmoking
     * Meta informations extracted from the WSDL
     * - default: false
     * - use: optional
     * @var bool
     */
    public $NonSmoking;
    /**
     * The BedTypeCode
     * Meta informations extracted from the WSDL
     * - documentation: OTA Type Codes , Uses BED Table | Positive Integer to denote OTA Codes
     * - use: optional
     * - minInclusive: 1
     * @var int
     */
    public $BedTypeCode;
    /**
     * The AccessibilityInformation
     * Meta informations extracted from the WSDL
     * - documentation: OTA Types Code, Uses PHY table | Positive Integer to denote OTA Codes
     * - use: optional
     * - minInclusive: 1
     * @var int
     */
    public $AccessibilityInformation;
    /**
     * The RoomIndex
     * Meta informations extracted from the WSDL
     * - use: optional
     * - documentation: Used for room/guest indexes
     * - minInclusive: 1
     * @var int
     */
    public $RoomIndex;
    /**
     * Constructor method for BasicRoom
     * @uses BasicRoom::setNonSmoking()
     * @uses BasicRoom::setBedTypeCode()
     * @uses BasicRoom::setAccessibilityInformation()
     * @uses BasicRoom::setRoomIndex()
     * @param bool $nonSmoking
     * @param int $bedTypeCode
     * @param int $accessibilityInformation
     * @param int $roomIndex
     */
    public function __construct($nonSmoking = false, $bedTypeCode = null, $accessibilityInformation = null, $roomIndex = null)
    {
        $this
            ->setNonSmoking($nonSmoking)
            ->setBedTypeCode($bedTypeCode)
            ->setAccessibilityInformation($accessibilityInformation)
            ->setRoomIndex($roomIndex);
    }
    /**
     * Get NonSmoking value
     * @return bool|null
     */
    public function getNonSmoking()
    {
        return $this->NonSmoking;
    }
    /**
     * Set NonSmoking value
     * @param bool $nonSmoking
     * @return \Sabre\UpdateReservation\StructType\BasicRoom
     */
    public function setNonSmoking($nonSmoking = false)
    {
        // validation for constraint: boolean
        if (!is_null($nonSmoking) && !is_bool($nonSmoking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($nonSmoking)), __LINE__);
        }
        $this->NonSmoking = $nonSmoking;
        return $this;
    }
    /**
     * Get BedTypeCode value
     * @return int|null
     */
    public function getBedTypeCode()
    {
        return $this->BedTypeCode;
    }
    /**
     * Set BedTypeCode value
     * @param int $bedTypeCode
     * @return \Sabre\UpdateReservation\StructType\BasicRoom
     */
    public function setBedTypeCode($bedTypeCode = null)
    {
        // validation for constraint: minInclusive
        if ($bedTypeCode < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $bedTypeCode), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($bedTypeCode) && !is_numeric($bedTypeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($bedTypeCode)), __LINE__);
        }
        $this->BedTypeCode = $bedTypeCode;
        return $this;
    }
    /**
     * Get AccessibilityInformation value
     * @return int|null
     */
    public function getAccessibilityInformation()
    {
        return $this->AccessibilityInformation;
    }
    /**
     * Set AccessibilityInformation value
     * @param int $accessibilityInformation
     * @return \Sabre\UpdateReservation\StructType\BasicRoom
     */
    public function setAccessibilityInformation($accessibilityInformation = null)
    {
        // validation for constraint: minInclusive
        if ($accessibilityInformation < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $accessibilityInformation), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($accessibilityInformation) && !is_numeric($accessibilityInformation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($accessibilityInformation)), __LINE__);
        }
        $this->AccessibilityInformation = $accessibilityInformation;
        return $this;
    }
    /**
     * Get RoomIndex value
     * @return int|null
     */
    public function getRoomIndex()
    {
        return $this->RoomIndex;
    }
    /**
     * Set RoomIndex value
     * @param int $roomIndex
     * @return \Sabre\UpdateReservation\StructType\BasicRoom
     */
    public function setRoomIndex($roomIndex = null)
    {
        // validation for constraint: minInclusive
        if ($roomIndex < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 1, "%s" given', $roomIndex), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($roomIndex) && !is_numeric($roomIndex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($roomIndex)), __LINE__);
        }
        $this->RoomIndex = $roomIndex;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\BasicRoom
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
