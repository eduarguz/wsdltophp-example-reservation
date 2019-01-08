<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AncillaryPriceQuoteData StructType
 * Meta informations extracted from the WSDL
 * - minOccurs: 0
 * - type: AncillaryPriceQuoteData
 * @subpackage Structs
 */
class AncillaryPriceQuoteData extends AbstractStructBase
{
    /**
     * The PriceQuoteId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PriceQuoteId;
    /**
     * The ProductFeeNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ProductFeeNumber;
    /**
     * The ExpirationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExpirationDate;
    /**
     * The LrecAssociation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LrecAssociation;
    /**
     * The PriceQuoteIdCompressed
     * @var bool
     */
    public $PriceQuoteIdCompressed;
    /**
     * Constructor method for AncillaryPriceQuoteData
     * @uses AncillaryPriceQuoteData::setPriceQuoteId()
     * @uses AncillaryPriceQuoteData::setProductFeeNumber()
     * @uses AncillaryPriceQuoteData::setExpirationDate()
     * @uses AncillaryPriceQuoteData::setLrecAssociation()
     * @uses AncillaryPriceQuoteData::setPriceQuoteIdCompressed()
     * @param string $priceQuoteId
     * @param string $productFeeNumber
     * @param string $expirationDate
     * @param int $lrecAssociation
     * @param bool $priceQuoteIdCompressed
     */
    public function __construct($priceQuoteId = null, $productFeeNumber = null, $expirationDate = null, $lrecAssociation = null, $priceQuoteIdCompressed = null)
    {
        $this
            ->setPriceQuoteId($priceQuoteId)
            ->setProductFeeNumber($productFeeNumber)
            ->setExpirationDate($expirationDate)
            ->setLrecAssociation($lrecAssociation)
            ->setPriceQuoteIdCompressed($priceQuoteIdCompressed);
    }
    /**
     * Get PriceQuoteId value
     * @return string|null
     */
    public function getPriceQuoteId()
    {
        return $this->PriceQuoteId;
    }
    /**
     * Set PriceQuoteId value
     * @param string $priceQuoteId
     * @return \Sabre\UpdateReservation\StructType\AncillaryPriceQuoteData
     */
    public function setPriceQuoteId($priceQuoteId = null)
    {
        // validation for constraint: string
        if (!is_null($priceQuoteId) && !is_string($priceQuoteId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($priceQuoteId)), __LINE__);
        }
        $this->PriceQuoteId = $priceQuoteId;
        return $this;
    }
    /**
     * Get ProductFeeNumber value
     * @return string|null
     */
    public function getProductFeeNumber()
    {
        return $this->ProductFeeNumber;
    }
    /**
     * Set ProductFeeNumber value
     * @param string $productFeeNumber
     * @return \Sabre\UpdateReservation\StructType\AncillaryPriceQuoteData
     */
    public function setProductFeeNumber($productFeeNumber = null)
    {
        // validation for constraint: string
        if (!is_null($productFeeNumber) && !is_string($productFeeNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productFeeNumber)), __LINE__);
        }
        $this->ProductFeeNumber = $productFeeNumber;
        return $this;
    }
    /**
     * Get ExpirationDate value
     * @return string|null
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    /**
     * Set ExpirationDate value
     * @param string $expirationDate
     * @return \Sabre\UpdateReservation\StructType\AncillaryPriceQuoteData
     */
    public function setExpirationDate($expirationDate = null)
    {
        // validation for constraint: string
        if (!is_null($expirationDate) && !is_string($expirationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expirationDate)), __LINE__);
        }
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    /**
     * Get LrecAssociation value
     * @return int|null
     */
    public function getLrecAssociation()
    {
        return $this->LrecAssociation;
    }
    /**
     * Set LrecAssociation value
     * @param int $lrecAssociation
     * @return \Sabre\UpdateReservation\StructType\AncillaryPriceQuoteData
     */
    public function setLrecAssociation($lrecAssociation = null)
    {
        // validation for constraint: int
        if (!is_null($lrecAssociation) && !is_numeric($lrecAssociation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($lrecAssociation)), __LINE__);
        }
        $this->LrecAssociation = $lrecAssociation;
        return $this;
    }
    /**
     * Get PriceQuoteIdCompressed value
     * @return bool|null
     */
    public function getPriceQuoteIdCompressed()
    {
        return $this->PriceQuoteIdCompressed;
    }
    /**
     * Set PriceQuoteIdCompressed value
     * @param bool $priceQuoteIdCompressed
     * @return \Sabre\UpdateReservation\StructType\AncillaryPriceQuoteData
     */
    public function setPriceQuoteIdCompressed($priceQuoteIdCompressed = null)
    {
        // validation for constraint: boolean
        if (!is_null($priceQuoteIdCompressed) && !is_bool($priceQuoteIdCompressed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($priceQuoteIdCompressed)), __LINE__);
        }
        $this->PriceQuoteIdCompressed = $priceQuoteIdCompressed;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AncillaryPriceQuoteData
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
