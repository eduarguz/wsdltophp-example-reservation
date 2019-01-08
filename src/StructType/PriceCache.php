<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceCache StructType
 * Meta informations extracted from the WSDL
 * - type: PriceCache
 * @subpackage Structs
 */
class PriceCache extends AbstractStructBase
{
    /**
     * The ProviderName
     * Meta informations extracted from the WSDL
     * - documentation: Pricing provider name used to identify pricing provider service
     * - minOccurs: 0
     * @var string
     */
    public $ProviderName;
    /**
     * The Comment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Comment
     */
    public $Comment;
    /**
     * The ProviderRequest
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ProviderRequest
     */
    public $ProviderRequest;
    /**
     * The ProviderResponse
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\ProviderResponse
     */
    public $ProviderResponse;
    /**
     * Constructor method for PriceCache
     * @uses PriceCache::setProviderName()
     * @uses PriceCache::setComment()
     * @uses PriceCache::setProviderRequest()
     * @uses PriceCache::setProviderResponse()
     * @param string $providerName
     * @param \Sabre\UpdateReservation\StructType\Comment $comment
     * @param \Sabre\UpdateReservation\StructType\ProviderRequest $providerRequest
     * @param \Sabre\UpdateReservation\StructType\ProviderResponse $providerResponse
     */
    public function __construct($providerName = null, \Sabre\UpdateReservation\StructType\Comment $comment = null, \Sabre\UpdateReservation\StructType\ProviderRequest $providerRequest = null, \Sabre\UpdateReservation\StructType\ProviderResponse $providerResponse = null)
    {
        $this
            ->setProviderName($providerName)
            ->setComment($comment)
            ->setProviderRequest($providerRequest)
            ->setProviderResponse($providerResponse);
    }
    /**
     * Get ProviderName value
     * @return string|null
     */
    public function getProviderName()
    {
        return $this->ProviderName;
    }
    /**
     * Set ProviderName value
     * @param string $providerName
     * @return \Sabre\UpdateReservation\StructType\PriceCache
     */
    public function setProviderName($providerName = null)
    {
        // validation for constraint: string
        if (!is_null($providerName) && !is_string($providerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($providerName)), __LINE__);
        }
        $this->ProviderName = $providerName;
        return $this;
    }
    /**
     * Get Comment value
     * @return \Sabre\UpdateReservation\StructType\Comment|null
     */
    public function getComment()
    {
        return $this->Comment;
    }
    /**
     * Set Comment value
     * @param \Sabre\UpdateReservation\StructType\Comment $comment
     * @return \Sabre\UpdateReservation\StructType\PriceCache
     */
    public function setComment(\Sabre\UpdateReservation\StructType\Comment $comment = null)
    {
        $this->Comment = $comment;
        return $this;
    }
    /**
     * Get ProviderRequest value
     * @return \Sabre\UpdateReservation\StructType\ProviderRequest|null
     */
    public function getProviderRequest()
    {
        return $this->ProviderRequest;
    }
    /**
     * Set ProviderRequest value
     * @param \Sabre\UpdateReservation\StructType\ProviderRequest $providerRequest
     * @return \Sabre\UpdateReservation\StructType\PriceCache
     */
    public function setProviderRequest(\Sabre\UpdateReservation\StructType\ProviderRequest $providerRequest = null)
    {
        $this->ProviderRequest = $providerRequest;
        return $this;
    }
    /**
     * Get ProviderResponse value
     * @return \Sabre\UpdateReservation\StructType\ProviderResponse|null
     */
    public function getProviderResponse()
    {
        return $this->ProviderResponse;
    }
    /**
     * Set ProviderResponse value
     * @param \Sabre\UpdateReservation\StructType\ProviderResponse $providerResponse
     * @return \Sabre\UpdateReservation\StructType\PriceCache
     */
    public function setProviderResponse(\Sabre\UpdateReservation\StructType\ProviderResponse $providerResponse = null)
    {
        $this->ProviderResponse = $providerResponse;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PriceCache
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
