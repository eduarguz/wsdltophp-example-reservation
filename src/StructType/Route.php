<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Route StructType
 * @subpackage Structs
 */
class Route extends AbstractStructBase
{
    /**
     * The Direction
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Direction;
    /**
     * The OperatingCarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an optional uppercase letter. | Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an
     * optional uppercase letter.
     * - pattern: [A-Z0-9\*]{2}[A-Z]?
     * @var string
     */
    public $OperatingCarrierCode;
    /**
     * The MarketingCarrierCode
     * Meta informations extracted from the WSDL
     * - documentation: Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an optional uppercase letter. | Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an
     * optional uppercase letter.
     * - pattern: [A-Z0-9\*]{2}[A-Z]?
     * @var string
     */
    public $MarketingCarrierCode;
    /**
     * The BoardPoint
     * @var string
     */
    public $BoardPoint;
    /**
     * The OffPoint
     * @var string
     */
    public $OffPoint;
    /**
     * The EMDNumber
     * @var string
     */
    public $EMDNumber;
    /**
     * The EMDCoupon
     * @var string
     */
    public $EMDCoupon;
    /**
     * Constructor method for Route
     * @uses Route::setDirection()
     * @uses Route::setOperatingCarrierCode()
     * @uses Route::setMarketingCarrierCode()
     * @uses Route::setBoardPoint()
     * @uses Route::setOffPoint()
     * @uses Route::setEMDNumber()
     * @uses Route::setEMDCoupon()
     * @param string $direction
     * @param string $operatingCarrierCode
     * @param string $marketingCarrierCode
     * @param string $boardPoint
     * @param string $offPoint
     * @param string $eMDNumber
     * @param string $eMDCoupon
     */
    public function __construct($direction = null, $operatingCarrierCode = null, $marketingCarrierCode = null, $boardPoint = null, $offPoint = null, $eMDNumber = null, $eMDCoupon = null)
    {
        $this
            ->setDirection($direction)
            ->setOperatingCarrierCode($operatingCarrierCode)
            ->setMarketingCarrierCode($marketingCarrierCode)
            ->setBoardPoint($boardPoint)
            ->setOffPoint($offPoint)
            ->setEMDNumber($eMDNumber)
            ->setEMDCoupon($eMDCoupon);
    }
    /**
     * Get Direction value
     * @return string
     */
    public function getDirection()
    {
        return $this->Direction;
    }
    /**
     * Set Direction value
     * @param string $direction
     * @return \Sabre\UpdateReservation\StructType\Route
     */
    public function setDirection($direction = null)
    {
        // validation for constraint: string
        if (!is_null($direction) && !is_string($direction)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($direction)), __LINE__);
        }
        $this->Direction = $direction;
        return $this;
    }
    /**
     * Get OperatingCarrierCode value
     * @return string|null
     */
    public function getOperatingCarrierCode()
    {
        return $this->OperatingCarrierCode;
    }
    /**
     * Set OperatingCarrierCode value
     * @param string $operatingCarrierCode
     * @return \Sabre\UpdateReservation\StructType\Route
     */
    public function setOperatingCarrierCode($operatingCarrierCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($operatingCarrierCode) && !preg_match('/[A-Z0-9\\*]{2}[A-Z]?/', $operatingCarrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9\*]{2}[A-Z]?", "%s" given', var_export($operatingCarrierCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($operatingCarrierCode) && !is_string($operatingCarrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($operatingCarrierCode)), __LINE__);
        }
        $this->OperatingCarrierCode = $operatingCarrierCode;
        return $this;
    }
    /**
     * Get MarketingCarrierCode value
     * @return string|null
     */
    public function getMarketingCarrierCode()
    {
        return $this->MarketingCarrierCode;
    }
    /**
     * Set MarketingCarrierCode value
     * @param string $marketingCarrierCode
     * @return \Sabre\UpdateReservation\StructType\Route
     */
    public function setMarketingCarrierCode($marketingCarrierCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($marketingCarrierCode) && !preg_match('/[A-Z0-9\\*]{2}[A-Z]?/', $marketingCarrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9\*]{2}[A-Z]?", "%s" given', var_export($marketingCarrierCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($marketingCarrierCode) && !is_string($marketingCarrierCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($marketingCarrierCode)), __LINE__);
        }
        $this->MarketingCarrierCode = $marketingCarrierCode;
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
     * @return \Sabre\UpdateReservation\StructType\Route
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
     * @return \Sabre\UpdateReservation\StructType\Route
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
     * Get EMDNumber value
     * @return string|null
     */
    public function getEMDNumber()
    {
        return $this->EMDNumber;
    }
    /**
     * Set EMDNumber value
     * @param string $eMDNumber
     * @return \Sabre\UpdateReservation\StructType\Route
     */
    public function setEMDNumber($eMDNumber = null)
    {
        // validation for constraint: string
        if (!is_null($eMDNumber) && !is_string($eMDNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMDNumber)), __LINE__);
        }
        $this->EMDNumber = $eMDNumber;
        return $this;
    }
    /**
     * Get EMDCoupon value
     * @return string|null
     */
    public function getEMDCoupon()
    {
        return $this->EMDCoupon;
    }
    /**
     * Set EMDCoupon value
     * @param string $eMDCoupon
     * @return \Sabre\UpdateReservation\StructType\Route
     */
    public function setEMDCoupon($eMDCoupon = null)
    {
        // validation for constraint: string
        if (!is_null($eMDCoupon) && !is_string($eMDCoupon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMDCoupon)), __LINE__);
        }
        $this->EMDCoupon = $eMDCoupon;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Route
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
