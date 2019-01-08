<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OtherType StructType
 * @subpackage Structs
 */
class OtherType extends AbstractStructBase
{
    /**
     * The Validity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Validity
     */
    public $Validity;
    /**
     * The Location
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Location
     */
    public $Location;
    /**
     * The Contributor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Contributor
     */
    public $Contributor;
    /**
     * The Recipient
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Recipient
     */
    public $Recipient;
    /**
     * The Document
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\Document
     */
    public $Document;
    /**
     * The PricingElements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Sabre\UpdateReservation\StructType\PricingElementsType
     */
    public $PricingElements;
    /**
     * The Text
     * Meta informations extracted from the WSDL
     * - documentation: Free text to be stored in segment
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * Constructor method for OtherType
     * @uses OtherType::setValidity()
     * @uses OtherType::setLocation()
     * @uses OtherType::setContributor()
     * @uses OtherType::setRecipient()
     * @uses OtherType::setDocument()
     * @uses OtherType::setPricingElements()
     * @uses OtherType::setText()
     * @param \Sabre\UpdateReservation\StructType\Validity $validity
     * @param \Sabre\UpdateReservation\StructType\Location $location
     * @param \Sabre\UpdateReservation\StructType\Contributor $contributor
     * @param \Sabre\UpdateReservation\StructType\Recipient $recipient
     * @param \Sabre\UpdateReservation\StructType\Document $document
     * @param \Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements
     * @param string $text
     */
    public function __construct(\Sabre\UpdateReservation\StructType\Validity $validity = null, \Sabre\UpdateReservation\StructType\Location $location = null, \Sabre\UpdateReservation\StructType\Contributor $contributor = null, \Sabre\UpdateReservation\StructType\Recipient $recipient = null, \Sabre\UpdateReservation\StructType\Document $document = null, \Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements = null, $text = null)
    {
        $this
            ->setValidity($validity)
            ->setLocation($location)
            ->setContributor($contributor)
            ->setRecipient($recipient)
            ->setDocument($document)
            ->setPricingElements($pricingElements)
            ->setText($text);
    }
    /**
     * Get Validity value
     * @return \Sabre\UpdateReservation\StructType\Validity|null
     */
    public function getValidity()
    {
        return $this->Validity;
    }
    /**
     * Set Validity value
     * @param \Sabre\UpdateReservation\StructType\Validity $validity
     * @return \Sabre\UpdateReservation\StructType\OtherType
     */
    public function setValidity(\Sabre\UpdateReservation\StructType\Validity $validity = null)
    {
        $this->Validity = $validity;
        return $this;
    }
    /**
     * Get Location value
     * @return \Sabre\UpdateReservation\StructType\Location|null
     */
    public function getLocation()
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param \Sabre\UpdateReservation\StructType\Location $location
     * @return \Sabre\UpdateReservation\StructType\OtherType
     */
    public function setLocation(\Sabre\UpdateReservation\StructType\Location $location = null)
    {
        $this->Location = $location;
        return $this;
    }
    /**
     * Get Contributor value
     * @return \Sabre\UpdateReservation\StructType\Contributor|null
     */
    public function getContributor()
    {
        return $this->Contributor;
    }
    /**
     * Set Contributor value
     * @param \Sabre\UpdateReservation\StructType\Contributor $contributor
     * @return \Sabre\UpdateReservation\StructType\OtherType
     */
    public function setContributor(\Sabre\UpdateReservation\StructType\Contributor $contributor = null)
    {
        $this->Contributor = $contributor;
        return $this;
    }
    /**
     * Get Recipient value
     * @return \Sabre\UpdateReservation\StructType\Recipient|null
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \Sabre\UpdateReservation\StructType\Recipient $recipient
     * @return \Sabre\UpdateReservation\StructType\OtherType
     */
    public function setRecipient(\Sabre\UpdateReservation\StructType\Recipient $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get Document value
     * @return \Sabre\UpdateReservation\StructType\Document|null
     */
    public function getDocument()
    {
        return $this->Document;
    }
    /**
     * Set Document value
     * @param \Sabre\UpdateReservation\StructType\Document $document
     * @return \Sabre\UpdateReservation\StructType\OtherType
     */
    public function setDocument(\Sabre\UpdateReservation\StructType\Document $document = null)
    {
        $this->Document = $document;
        return $this;
    }
    /**
     * Get PricingElements value
     * @return \Sabre\UpdateReservation\StructType\PricingElementsType|null
     */
    public function getPricingElements()
    {
        return $this->PricingElements;
    }
    /**
     * Set PricingElements value
     * @param \Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements
     * @return \Sabre\UpdateReservation\StructType\OtherType
     */
    public function setPricingElements(\Sabre\UpdateReservation\StructType\PricingElementsType $pricingElements = null)
    {
        $this->PricingElements = $pricingElements;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \Sabre\UpdateReservation\StructType\OtherType
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\OtherType
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
