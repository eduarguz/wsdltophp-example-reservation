<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Acknowledgment StructType
 * @subpackage Structs
 */
class Acknowledgment extends AbstractStructBase
{
    /**
     * The Timestamp
     * Meta informations extracted from the WSDL
     * - ref: tns:Timestamp
     * @var string
     */
    public $Timestamp;
    /**
     * The RefToMessageId
     * Meta informations extracted from the WSDL
     * - ref: tns:RefToMessageId
     * - minLength: 1
     * @var string
     */
    public $RefToMessageId;
    /**
     * The From
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - ref: tns:From
     * @var \Sabre\UpdateReservation\StructType\From
     */
    public $From;
    /**
     * The Reference
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: tns:Reference
     * @var \Sabre\UpdateReservation\StructType\Reference[]
     */
    public $Reference;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The actor
     * Meta informations extracted from the WSDL
     * - ref: soap:actor
     * @var string
     */
    public $actor;
    /**
     * The id
     * @var \Sabre\UpdateReservation\StructType\ID
     */
    public $id;
    /**
     * The version
     * Meta informations extracted from the WSDL
     * - minLength: 1
     * @var string
     */
    public $version;
    /**
     * Constructor method for Acknowledgment
     * @uses Acknowledgment::setTimestamp()
     * @uses Acknowledgment::setRefToMessageId()
     * @uses Acknowledgment::setFrom()
     * @uses Acknowledgment::setReference()
     * @uses Acknowledgment::setAny()
     * @uses Acknowledgment::setActor()
     * @uses Acknowledgment::setId()
     * @uses Acknowledgment::setVersion()
     * @param string $timestamp
     * @param string $refToMessageId
     * @param \Sabre\UpdateReservation\StructType\From $from
     * @param \Sabre\UpdateReservation\StructType\Reference[] $reference
     * @param \DOMDocument $any
     * @param string $actor
     * @param \Sabre\UpdateReservation\StructType\ID $id
     * @param string $version
     */
    public function __construct($timestamp = null, $refToMessageId = null, \Sabre\UpdateReservation\StructType\From $from = null, array $reference = array(), \DOMDocument $any = null, $actor = null, \Sabre\UpdateReservation\StructType\ID $id = null, $version = null)
    {
        $this
            ->setTimestamp($timestamp)
            ->setRefToMessageId($refToMessageId)
            ->setFrom($from)
            ->setReference($reference)
            ->setAny($any)
            ->setActor($actor)
            ->setId($id)
            ->setVersion($version);
    }
    /**
     * Get Timestamp value
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }
    /**
     * Set Timestamp value
     * @param string $timestamp
     * @return \Sabre\UpdateReservation\StructType\Acknowledgment
     */
    public function setTimestamp($timestamp = null)
    {
        // validation for constraint: string
        if (!is_null($timestamp) && !is_string($timestamp)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($timestamp)), __LINE__);
        }
        $this->Timestamp = $timestamp;
        return $this;
    }
    /**
     * Get RefToMessageId value
     * @return string|null
     */
    public function getRefToMessageId()
    {
        return $this->RefToMessageId;
    }
    /**
     * Set RefToMessageId value
     * @param string $refToMessageId
     * @return \Sabre\UpdateReservation\StructType\Acknowledgment
     */
    public function setRefToMessageId($refToMessageId = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($refToMessageId) && strlen($refToMessageId) < 1) || (is_array($refToMessageId) && count($refToMessageId) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($refToMessageId) && !is_string($refToMessageId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($refToMessageId)), __LINE__);
        }
        $this->RefToMessageId = $refToMessageId;
        return $this;
    }
    /**
     * Get From value
     * @return \Sabre\UpdateReservation\StructType\From|null
     */
    public function getFrom()
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param \Sabre\UpdateReservation\StructType\From $from
     * @return \Sabre\UpdateReservation\StructType\Acknowledgment
     */
    public function setFrom(\Sabre\UpdateReservation\StructType\From $from = null)
    {
        $this->From = $from;
        return $this;
    }
    /**
     * Get Reference value
     * @return \Sabre\UpdateReservation\StructType\Reference[]|null
     */
    public function getReference()
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Reference[] $reference
     * @return \Sabre\UpdateReservation\StructType\Acknowledgment
     */
    public function setReference(array $reference = array())
    {
        foreach ($reference as $acknowledgmentReferenceItem) {
            // validation for constraint: itemType
            if (!$acknowledgmentReferenceItem instanceof \Sabre\UpdateReservation\StructType\Reference) {
                throw new \InvalidArgumentException(sprintf('The Reference property can only contain items of \Sabre\UpdateReservation\StructType\Reference, "%s" given', is_object($acknowledgmentReferenceItem) ? get_class($acknowledgmentReferenceItem) : gettype($acknowledgmentReferenceItem)), __LINE__);
            }
        }
        $this->Reference = $reference;
        return $this;
    }
    /**
     * Add item to Reference value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Reference $item
     * @return \Sabre\UpdateReservation\StructType\Acknowledgment
     */
    public function addToReference(\Sabre\UpdateReservation\StructType\Reference $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Reference) {
            throw new \InvalidArgumentException(sprintf('The Reference property can only contain items of \Sabre\UpdateReservation\StructType\Reference, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Reference[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Sabre\UpdateReservation\StructType\Acknowledgment::setAny()
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
     * @return \Sabre\UpdateReservation\StructType\Acknowledgment
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get actor value
     * @return string|null
     */
    public function getActor()
    {
        return $this->actor;
    }
    /**
     * Set actor value
     * @param string $actor
     * @return \Sabre\UpdateReservation\StructType\Acknowledgment
     */
    public function setActor($actor = null)
    {
        // validation for constraint: string
        if (!is_null($actor) && !is_string($actor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($actor)), __LINE__);
        }
        $this->actor = $actor;
        return $this;
    }
    /**
     * Get id value
     * @return \Sabre\UpdateReservation\StructType\ID|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param \Sabre\UpdateReservation\StructType\ID $id
     * @return \Sabre\UpdateReservation\StructType\Acknowledgment
     */
    public function setId(\Sabre\UpdateReservation\StructType\ID $id = null)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Sabre\UpdateReservation\StructType\Acknowledgment
     */
    public function setVersion($version = null)
    {
        // validation for constraint: minLength
        if ((is_scalar($version) && strlen($version) < 1) || (is_array($version) && count($version) < 1)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 1 element(s) or a scalar of 1 character(s) at least', __LINE__);
        }
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        $this->version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\Acknowledgment
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
