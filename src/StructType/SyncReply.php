<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SyncReply StructType
 * @subpackage Structs
 */
class SyncReply extends AbstractStructBase
{
    /**
     * The actor
     * Meta informations extracted from the WSDL
     * - ref: soap:actor
     * - use: required
     * @var string
     */
    public $actor;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
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
     * Constructor method for SyncReply
     * @uses SyncReply::setActor()
     * @uses SyncReply::setAny()
     * @uses SyncReply::setId()
     * @uses SyncReply::setVersion()
     * @param string $actor
     * @param \DOMDocument $any
     * @param \Sabre\UpdateReservation\StructType\ID $id
     * @param string $version
     */
    public function __construct($actor = null, \DOMDocument $any = null, \Sabre\UpdateReservation\StructType\ID $id = null, $version = null)
    {
        $this
            ->setActor($actor)
            ->setAny($any)
            ->setId($id)
            ->setVersion($version);
    }
    /**
     * Get actor value
     * @return string
     */
    public function getActor()
    {
        return $this->actor;
    }
    /**
     * Set actor value
     * @param string $actor
     * @return \Sabre\UpdateReservation\StructType\SyncReply
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
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Sabre\UpdateReservation\StructType\SyncReply::setAny()
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
     * @return \Sabre\UpdateReservation\StructType\SyncReply
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
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
     * @return \Sabre\UpdateReservation\StructType\SyncReply
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
     * @return \Sabre\UpdateReservation\StructType\SyncReply
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
     * @return \Sabre\UpdateReservation\StructType\SyncReply
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
