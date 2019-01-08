<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Envelope StructType
 * Meta informations extracted from the WSDL
 * - type: tns:Envelope
 * @subpackage Structs
 */
class Envelope extends AbstractStructBase
{
    /**
     * The Header
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: tns:Header
     * @var \Sabre\UpdateReservation\StructType\Header[]
     */
    public $Header;
    /**
     * The Body
     * Meta informations extracted from the WSDL
     * - ref: tns:Body
     * @var \Sabre\UpdateReservation\StructType\Body
     */
    public $Body;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for Envelope
     * @uses Envelope::setHeader()
     * @uses Envelope::setBody()
     * @uses Envelope::setAny()
     * @param \Sabre\UpdateReservation\StructType\Header[] $header
     * @param \Sabre\UpdateReservation\StructType\Body $body
     * @param \DOMDocument $any
     */
    public function __construct(array $header = array(), \Sabre\UpdateReservation\StructType\Body $body = null, \DOMDocument $any = null)
    {
        $this
            ->setHeader($header)
            ->setBody($body)
            ->setAny($any);
    }
    /**
     * Get Header value
     * @return \Sabre\UpdateReservation\StructType\Header[]|null
     */
    public function getHeader()
    {
        return $this->Header;
    }
    /**
     * Set Header value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Header[] $header
     * @return \Sabre\UpdateReservation\StructType\Envelope
     */
    public function setHeader(array $header = array())
    {
        foreach ($header as $envelopeHeaderItem) {
            // validation for constraint: itemType
            if (!$envelopeHeaderItem instanceof \Sabre\UpdateReservation\StructType\Header) {
                throw new \InvalidArgumentException(sprintf('The Header property can only contain items of \Sabre\UpdateReservation\StructType\Header, "%s" given', is_object($envelopeHeaderItem) ? get_class($envelopeHeaderItem) : gettype($envelopeHeaderItem)), __LINE__);
            }
        }
        $this->Header = $header;
        return $this;
    }
    /**
     * Add item to Header value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Header $item
     * @return \Sabre\UpdateReservation\StructType\Envelope
     */
    public function addToHeader(\Sabre\UpdateReservation\StructType\Header $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Header) {
            throw new \InvalidArgumentException(sprintf('The Header property can only contain items of \Sabre\UpdateReservation\StructType\Header, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Header[] = $item;
        return $this;
    }
    /**
     * Get Body value
     * @return \Sabre\UpdateReservation\StructType\Body|null
     */
    public function getBody()
    {
        return $this->Body;
    }
    /**
     * Set Body value
     * @param \Sabre\UpdateReservation\StructType\Body $body
     * @return \Sabre\UpdateReservation\StructType\Envelope
     */
    public function setBody(\Sabre\UpdateReservation\StructType\Body $body = null)
    {
        $this->Body = $body;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Sabre\UpdateReservation\StructType\Envelope::setAny()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        if (!empty($this->any) && !($this->any instanceof \DOMDocument)) {
            $dom = new \DOMDocument('1.0', 'UTF-8');
            $dom->formatOutput = true;
            if ($dom->loadXML($this->any)) {
                $this->setAny($dom);
            }
            unset($dom);
        }
        return ($asString && ($this->any instanceof \DOMDocument) && $this->any->hasChildNodes()) ? $this->any->saveXML($this->any->childNodes->item(0)) : $this->any;
    }
    /**
     * Set any value
     * @param \DOMDocument $any
     * @return \Sabre\UpdateReservation\StructType\Envelope
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Envelope
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
