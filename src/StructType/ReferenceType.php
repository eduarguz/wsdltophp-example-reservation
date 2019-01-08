<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceType StructType
 * @subpackage Structs
 */
class ReferenceType extends AbstractStructBase
{
    /**
     * The Transforms
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: ds:Transforms
     * @var \Sabre\UpdateReservation\StructType\TransformsType
     */
    public $Transforms;
    /**
     * The DigestMethod
     * Meta informations extracted from the WSDL
     * - ref: ds:DigestMethod
     * @var \Sabre\UpdateReservation\StructType\DigestMethodType
     */
    public $DigestMethod;
    /**
     * The DigestValue
     * Meta informations extracted from the WSDL
     * - ref: ds:DigestValue
     * @var string
     */
    public $DigestValue;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var \Sabre\UpdateReservation\StructType\ID
     */
    public $Id;
    /**
     * The URI
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $URI;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var string
     */
    public $Type;
    /**
     * Constructor method for ReferenceType
     * @uses ReferenceType::setTransforms()
     * @uses ReferenceType::setDigestMethod()
     * @uses ReferenceType::setDigestValue()
     * @uses ReferenceType::setId()
     * @uses ReferenceType::setURI()
     * @uses ReferenceType::setType()
     * @param \Sabre\UpdateReservation\StructType\TransformsType $transforms
     * @param \Sabre\UpdateReservation\StructType\DigestMethodType $digestMethod
     * @param string $digestValue
     * @param \Sabre\UpdateReservation\StructType\ID $id
     * @param string $uRI
     * @param string $type
     */
    public function __construct(\Sabre\UpdateReservation\StructType\TransformsType $transforms = null, \Sabre\UpdateReservation\StructType\DigestMethodType $digestMethod = null, $digestValue = null, \Sabre\UpdateReservation\StructType\ID $id = null, $uRI = null, $type = null)
    {
        $this
            ->setTransforms($transforms)
            ->setDigestMethod($digestMethod)
            ->setDigestValue($digestValue)
            ->setId($id)
            ->setURI($uRI)
            ->setType($type);
    }
    /**
     * Get Transforms value
     * @return \Sabre\UpdateReservation\StructType\TransformsType|null
     */
    public function getTransforms()
    {
        return $this->Transforms;
    }
    /**
     * Set Transforms value
     * @param \Sabre\UpdateReservation\StructType\TransformsType $transforms
     * @return \Sabre\UpdateReservation\StructType\ReferenceType
     */
    public function setTransforms(\Sabre\UpdateReservation\StructType\TransformsType $transforms = null)
    {
        $this->Transforms = $transforms;
        return $this;
    }
    /**
     * Get DigestMethod value
     * @return \Sabre\UpdateReservation\StructType\DigestMethodType|null
     */
    public function getDigestMethod()
    {
        return $this->DigestMethod;
    }
    /**
     * Set DigestMethod value
     * @param \Sabre\UpdateReservation\StructType\DigestMethodType $digestMethod
     * @return \Sabre\UpdateReservation\StructType\ReferenceType
     */
    public function setDigestMethod(\Sabre\UpdateReservation\StructType\DigestMethodType $digestMethod = null)
    {
        $this->DigestMethod = $digestMethod;
        return $this;
    }
    /**
     * Get DigestValue value
     * @return string|null
     */
    public function getDigestValue()
    {
        return $this->DigestValue;
    }
    /**
     * Set DigestValue value
     * @param string $digestValue
     * @return \Sabre\UpdateReservation\StructType\ReferenceType
     */
    public function setDigestValue($digestValue = null)
    {
        // validation for constraint: string
        if (!is_null($digestValue) && !is_string($digestValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($digestValue)), __LINE__);
        }
        $this->DigestValue = $digestValue;
        return $this;
    }
    /**
     * Get Id value
     * @return \Sabre\UpdateReservation\StructType\ID|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param \Sabre\UpdateReservation\StructType\ID $id
     * @return \Sabre\UpdateReservation\StructType\ReferenceType
     */
    public function setId(\Sabre\UpdateReservation\StructType\ID $id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Get URI value
     * @return string|null
     */
    public function getURI()
    {
        return $this->URI;
    }
    /**
     * Set URI value
     * @param string $uRI
     * @return \Sabre\UpdateReservation\StructType\ReferenceType
     */
    public function setURI($uRI = null)
    {
        // validation for constraint: string
        if (!is_null($uRI) && !is_string($uRI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uRI)), __LINE__);
        }
        $this->URI = $uRI;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\ReferenceType
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\ReferenceType
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
