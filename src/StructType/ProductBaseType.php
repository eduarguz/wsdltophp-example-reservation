<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductBaseType StructType
 * @subpackage Structs
 */
class ProductBaseType extends AbstractStructBase
{
    /**
     * The ProductType
     * @var string
     */
    public $ProductType;
    /**
     * The VendorCode
     * @var string
     */
    public $VendorCode;
    /**
     * The StatusCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusCode;
    /**
     * The StartPoint
     * @var string
     */
    public $StartPoint;
    /**
     * The StartDateTime
     * @var string
     */
    public $StartDateTime;
    /**
     * The EndPoint
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EndPoint;
    /**
     * The EndDateTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EndDateTime;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * @var string[]
     */
    public $Text;
    /**
     * The SegmentReference
     * @var int
     */
    public $SegmentReference;
    /**
     * Constructor method for ProductBaseType
     * @uses ProductBaseType::setProductType()
     * @uses ProductBaseType::setVendorCode()
     * @uses ProductBaseType::setStatusCode()
     * @uses ProductBaseType::setStartPoint()
     * @uses ProductBaseType::setStartDateTime()
     * @uses ProductBaseType::setEndPoint()
     * @uses ProductBaseType::setEndDateTime()
     * @uses ProductBaseType::setText()
     * @uses ProductBaseType::setSegmentReference()
     * @param string $productType
     * @param string $vendorCode
     * @param string $statusCode
     * @param string $startPoint
     * @param string $startDateTime
     * @param string $endPoint
     * @param string $endDateTime
     * @param string[] $text
     * @param int $segmentReference
     */
    public function __construct($productType = null, $vendorCode = null, $statusCode = null, $startPoint = null, $startDateTime = null, $endPoint = null, $endDateTime = null, array $text = array(), $segmentReference = null)
    {
        $this
            ->setProductType($productType)
            ->setVendorCode($vendorCode)
            ->setStatusCode($statusCode)
            ->setStartPoint($startPoint)
            ->setStartDateTime($startDateTime)
            ->setEndPoint($endPoint)
            ->setEndDateTime($endDateTime)
            ->setText($text)
            ->setSegmentReference($segmentReference);
    }
    /**
     * Get ProductType value
     * @return string|null
     */
    public function getProductType()
    {
        return $this->ProductType;
    }
    /**
     * Set ProductType value
     * @param string $productType
     * @return \Sabre\UpdateReservation\StructType\ProductBaseType
     */
    public function setProductType($productType = null)
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productType)), __LINE__);
        }
        $this->ProductType = $productType;
        return $this;
    }
    /**
     * Get VendorCode value
     * @return string|null
     */
    public function getVendorCode()
    {
        return $this->VendorCode;
    }
    /**
     * Set VendorCode value
     * @param string $vendorCode
     * @return \Sabre\UpdateReservation\StructType\ProductBaseType
     */
    public function setVendorCode($vendorCode = null)
    {
        // validation for constraint: string
        if (!is_null($vendorCode) && !is_string($vendorCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vendorCode)), __LINE__);
        }
        $this->VendorCode = $vendorCode;
        return $this;
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \Sabre\UpdateReservation\StructType\ProductBaseType
     */
    public function setStatusCode($statusCode = null)
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($statusCode)), __LINE__);
        }
        $this->StatusCode = $statusCode;
        return $this;
    }
    /**
     * Get StartPoint value
     * @return string|null
     */
    public function getStartPoint()
    {
        return $this->StartPoint;
    }
    /**
     * Set StartPoint value
     * @param string $startPoint
     * @return \Sabre\UpdateReservation\StructType\ProductBaseType
     */
    public function setStartPoint($startPoint = null)
    {
        // validation for constraint: string
        if (!is_null($startPoint) && !is_string($startPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startPoint)), __LINE__);
        }
        $this->StartPoint = $startPoint;
        return $this;
    }
    /**
     * Get StartDateTime value
     * @return string|null
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }
    /**
     * Set StartDateTime value
     * @param string $startDateTime
     * @return \Sabre\UpdateReservation\StructType\ProductBaseType
     */
    public function setStartDateTime($startDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($startDateTime)), __LINE__);
        }
        $this->StartDateTime = $startDateTime;
        return $this;
    }
    /**
     * Get EndPoint value
     * @return string|null
     */
    public function getEndPoint()
    {
        return $this->EndPoint;
    }
    /**
     * Set EndPoint value
     * @param string $endPoint
     * @return \Sabre\UpdateReservation\StructType\ProductBaseType
     */
    public function setEndPoint($endPoint = null)
    {
        // validation for constraint: string
        if (!is_null($endPoint) && !is_string($endPoint)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endPoint)), __LINE__);
        }
        $this->EndPoint = $endPoint;
        return $this;
    }
    /**
     * Get EndDateTime value
     * @return string|null
     */
    public function getEndDateTime()
    {
        return $this->EndDateTime;
    }
    /**
     * Set EndDateTime value
     * @param string $endDateTime
     * @return \Sabre\UpdateReservation\StructType\ProductBaseType
     */
    public function setEndDateTime($endDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($endDateTime) && !is_string($endDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDateTime)), __LINE__);
        }
        $this->EndDateTime = $endDateTime;
        return $this;
    }
    /**
     * Get Text value
     * @return string[]|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @throws \InvalidArgumentException
     * @param string[] $text
     * @return \Sabre\UpdateReservation\StructType\ProductBaseType
     */
    public function setText(array $text = array())
    {
        foreach ($text as $productBaseTypeTextItem) {
            // validation for constraint: itemType
            if (!is_string($productBaseTypeTextItem)) {
                throw new \InvalidArgumentException(sprintf('The Text property can only contain items of string, "%s" given', is_object($productBaseTypeTextItem) ? get_class($productBaseTypeTextItem) : gettype($productBaseTypeTextItem)), __LINE__);
            }
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Add item to Text value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Sabre\UpdateReservation\StructType\ProductBaseType
     */
    public function addToText($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Text property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Text[] = $item;
        return $this;
    }
    /**
     * Get SegmentReference value
     * @return int|null
     */
    public function getSegmentReference()
    {
        return $this->SegmentReference;
    }
    /**
     * Set SegmentReference value
     * @param int $segmentReference
     * @return \Sabre\UpdateReservation\StructType\ProductBaseType
     */
    public function setSegmentReference($segmentReference = null)
    {
        // validation for constraint: int
        if (!is_null($segmentReference) && !is_numeric($segmentReference)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($segmentReference)), __LINE__);
        }
        $this->SegmentReference = $segmentReference;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ProductBaseType
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
