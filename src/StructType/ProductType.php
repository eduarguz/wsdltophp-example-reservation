<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductType StructType
 * @subpackage Structs
 */
class ProductType extends AbstractStructBase
{
    /**
     * The ProductBase
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ProductBase
     * @var \Sabre\UpdateReservation\StructType\ProductBaseType
     */
    public $ProductBase;
    /**
     * The ProductDetails
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: ProductDetails
     * @var \Sabre\UpdateReservation\StructType\ProductDetailsType
     */
    public $ProductDetails;
    /**
     * The AdditionalContent
     * Meta informations extracted from the WSDL
     * - maxOccurs: 99
     * - minOccurs: 0
     * - ref: AdditionalContent
     * @var \Sabre\UpdateReservation\StructType\AdditionalContentType[]
     */
    public $AdditionalContent;
    /**
     * The ProductSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ProductSourceType
     */
    public $ProductSource;
    /**
     * The sequence
     * @var int
     */
    public $sequence;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - documentation: to be used as Segment Reference
     * @var string
     */
    public $id;
    /**
     * The IsPast
     * Meta informations extracted from the WSDL
     * - documentation: It returns information if current segment is past or not. Attribute is populated based on Product - ProductBase - EndDateTime, Product - ProductBase - Endpoint.
     * - use: optional
     * @var bool
     */
    public $IsPast;
    /**
     * Constructor method for ProductType
     * @uses ProductType::setProductBase()
     * @uses ProductType::setProductDetails()
     * @uses ProductType::setAdditionalContent()
     * @uses ProductType::setProductSource()
     * @uses ProductType::setSequence()
     * @uses ProductType::setId()
     * @uses ProductType::setIsPast()
     * @param \Sabre\UpdateReservation\StructType\ProductBaseType $productBase
     * @param \Sabre\UpdateReservation\StructType\ProductDetailsType $productDetails
     * @param \Sabre\UpdateReservation\StructType\AdditionalContentType[] $additionalContent
     * @param \Sabre\UpdateReservation\StructType\ProductSourceType $productSource
     * @param int $sequence
     * @param string $id
     * @param bool $isPast
     */
    public function __construct(\Sabre\UpdateReservation\StructType\ProductBaseType $productBase = null, \Sabre\UpdateReservation\StructType\ProductDetailsType $productDetails = null, array $additionalContent = array(), \Sabre\UpdateReservation\StructType\ProductSourceType $productSource = null, $sequence = null, $id = null, $isPast = null)
    {
        $this
            ->setProductBase($productBase)
            ->setProductDetails($productDetails)
            ->setAdditionalContent($additionalContent)
            ->setProductSource($productSource)
            ->setSequence($sequence)
            ->setId($id)
            ->setIsPast($isPast);
    }
    /**
     * Get ProductBase value
     * @return \Sabre\UpdateReservation\StructType\ProductBaseType|null
     */
    public function getProductBase()
    {
        return $this->ProductBase;
    }
    /**
     * Set ProductBase value
     * @param \Sabre\UpdateReservation\StructType\ProductBaseType $productBase
     * @return \Sabre\UpdateReservation\StructType\ProductType
     */
    public function setProductBase(\Sabre\UpdateReservation\StructType\ProductBaseType $productBase = null)
    {
        $this->ProductBase = $productBase;
        return $this;
    }
    /**
     * Get ProductDetails value
     * @return \Sabre\UpdateReservation\StructType\ProductDetailsType|null
     */
    public function getProductDetails()
    {
        return $this->ProductDetails;
    }
    /**
     * Set ProductDetails value
     * @param \Sabre\UpdateReservation\StructType\ProductDetailsType $productDetails
     * @return \Sabre\UpdateReservation\StructType\ProductType
     */
    public function setProductDetails(\Sabre\UpdateReservation\StructType\ProductDetailsType $productDetails = null)
    {
        $this->ProductDetails = $productDetails;
        return $this;
    }
    /**
     * Get AdditionalContent value
     * @return \Sabre\UpdateReservation\StructType\AdditionalContentType[]|null
     */
    public function getAdditionalContent()
    {
        return $this->AdditionalContent;
    }
    /**
     * Set AdditionalContent value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AdditionalContentType[] $additionalContent
     * @return \Sabre\UpdateReservation\StructType\ProductType
     */
    public function setAdditionalContent(array $additionalContent = array())
    {
        foreach ($additionalContent as $productTypeAdditionalContentItem) {
            // validation for constraint: itemType
            if (!$productTypeAdditionalContentItem instanceof \Sabre\UpdateReservation\StructType\AdditionalContentType) {
                throw new \InvalidArgumentException(sprintf('The AdditionalContent property can only contain items of \Sabre\UpdateReservation\StructType\AdditionalContentType, "%s" given', is_object($productTypeAdditionalContentItem) ? get_class($productTypeAdditionalContentItem) : gettype($productTypeAdditionalContentItem)), __LINE__);
            }
        }
        $this->AdditionalContent = $additionalContent;
        return $this;
    }
    /**
     * Add item to AdditionalContent value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\AdditionalContentType $item
     * @return \Sabre\UpdateReservation\StructType\ProductType
     */
    public function addToAdditionalContent(\Sabre\UpdateReservation\StructType\AdditionalContentType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\AdditionalContentType) {
            throw new \InvalidArgumentException(sprintf('The AdditionalContent property can only contain items of \Sabre\UpdateReservation\StructType\AdditionalContentType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalContent[] = $item;
        return $this;
    }
    /**
     * Get ProductSource value
     * @return \Sabre\UpdateReservation\StructType\ProductSourceType|null
     */
    public function getProductSource()
    {
        return $this->ProductSource;
    }
    /**
     * Set ProductSource value
     * @param \Sabre\UpdateReservation\StructType\ProductSourceType $productSource
     * @return \Sabre\UpdateReservation\StructType\ProductType
     */
    public function setProductSource(\Sabre\UpdateReservation\StructType\ProductSourceType $productSource = null)
    {
        $this->ProductSource = $productSource;
        return $this;
    }
    /**
     * Get sequence value
     * @return int|null
     */
    public function getSequence()
    {
        return $this->sequence;
    }
    /**
     * Set sequence value
     * @param int $sequence
     * @return \Sabre\UpdateReservation\StructType\ProductType
     */
    public function setSequence($sequence = null)
    {
        // validation for constraint: int
        if (!is_null($sequence) && !is_numeric($sequence)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($sequence)), __LINE__);
        }
        $this->sequence = $sequence;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \Sabre\UpdateReservation\StructType\ProductType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
    /**
     * Get IsPast value
     * @return bool|null
     */
    public function getIsPast()
    {
        return $this->IsPast;
    }
    /**
     * Set IsPast value
     * @param bool $isPast
     * @return \Sabre\UpdateReservation\StructType\ProductType
     */
    public function setIsPast($isPast = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPast) && !is_bool($isPast)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPast)), __LINE__);
        }
        $this->IsPast = $isPast;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ProductType
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
