<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PricingProviderType StructType
 * @subpackage Structs
 */
class PricingProviderType extends AbstractStructBase
{
    /**
     * The ProviderName
     * Meta informations extracted from the WSDL
     * - documentation: Pricing information providing system Identification
     * - minOccurs: 0
     * @var string
     */
    public $ProviderName;
    /**
     * The PricingOptions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PricingRequestInformationType
     */
    public $PricingOptions;
    /**
     * The ValidatingCarrier
     * Meta informations extracted from the WSDL
     * - documentation: IATA Code of ticketing carrier (carrier issuing a ticket and holding settlements) ex. "AA". It is used for informational purposes only. To enforce Validating Carried during pricing process "ValidatingCarrier" Air qualifier should be
     * used. | Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an optional uppercase letter. | Preferred format for airline codes. Structure is 2 upper case alpha-numeric characters followed by an optional
     * uppercase letter.
     * - minOccurs: 0
     * - pattern: [A-Z0-9\*]{2}[A-Z]?
     * @var string
     */
    public $ValidatingCarrier;
    /**
     * Constructor method for PricingProviderType
     * @uses PricingProviderType::setProviderName()
     * @uses PricingProviderType::setPricingOptions()
     * @uses PricingProviderType::setValidatingCarrier()
     * @param string $providerName
     * @param \Sabre\UpdateReservation\StructType\PricingRequestInformationType $pricingOptions
     * @param string $validatingCarrier
     */
    public function __construct($providerName = null, \Sabre\UpdateReservation\StructType\PricingRequestInformationType $pricingOptions = null, $validatingCarrier = null)
    {
        $this
            ->setProviderName($providerName)
            ->setPricingOptions($pricingOptions)
            ->setValidatingCarrier($validatingCarrier);
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
     * @return \Sabre\UpdateReservation\StructType\PricingProviderType
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
     * Get PricingOptions value
     * @return \Sabre\UpdateReservation\StructType\PricingRequestInformationType|null
     */
    public function getPricingOptions()
    {
        return $this->PricingOptions;
    }
    /**
     * Set PricingOptions value
     * @param \Sabre\UpdateReservation\StructType\PricingRequestInformationType $pricingOptions
     * @return \Sabre\UpdateReservation\StructType\PricingProviderType
     */
    public function setPricingOptions(\Sabre\UpdateReservation\StructType\PricingRequestInformationType $pricingOptions = null)
    {
        $this->PricingOptions = $pricingOptions;
        return $this;
    }
    /**
     * Get ValidatingCarrier value
     * @return string|null
     */
    public function getValidatingCarrier()
    {
        return $this->ValidatingCarrier;
    }
    /**
     * Set ValidatingCarrier value
     * @param string $validatingCarrier
     * @return \Sabre\UpdateReservation\StructType\PricingProviderType
     */
    public function setValidatingCarrier($validatingCarrier = null)
    {
        // validation for constraint: pattern
        if (is_scalar($validatingCarrier) && !preg_match('/[A-Z0-9\\*]{2}[A-Z]?/', $validatingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[A-Z0-9\*]{2}[A-Z]?", "%s" given', var_export($validatingCarrier, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($validatingCarrier) && !is_string($validatingCarrier)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($validatingCarrier)), __LINE__);
        }
        $this->ValidatingCarrier = $validatingCarrier;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\PricingProviderType
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
