<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyValueType StructType
 * Meta informations extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class KeyValueType extends AbstractStructBase
{
    /**
     * The DSAKeyValue
     * Meta informations extracted from the WSDL
     * - ref: ds:DSAKeyValue
     * @var \Sabre\UpdateReservation\StructType\DSAKeyValueType
     */
    public $DSAKeyValue;
    /**
     * The RSAKeyValue
     * Meta informations extracted from the WSDL
     * - ref: ds:RSAKeyValue
     * @var \Sabre\UpdateReservation\StructType\RSAKeyValueType
     */
    public $RSAKeyValue;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for KeyValueType
     * @uses KeyValueType::setDSAKeyValue()
     * @uses KeyValueType::setRSAKeyValue()
     * @uses KeyValueType::setAny()
     * @param \Sabre\UpdateReservation\StructType\DSAKeyValueType $dSAKeyValue
     * @param \Sabre\UpdateReservation\StructType\RSAKeyValueType $rSAKeyValue
     * @param \DOMDocument $any
     */
    public function __construct(\Sabre\UpdateReservation\StructType\DSAKeyValueType $dSAKeyValue = null, \Sabre\UpdateReservation\StructType\RSAKeyValueType $rSAKeyValue = null, \DOMDocument $any = null)
    {
        $this
            ->setDSAKeyValue($dSAKeyValue)
            ->setRSAKeyValue($rSAKeyValue)
            ->setAny($any);
    }
    /**
     * Get DSAKeyValue value
     * @return \Sabre\UpdateReservation\StructType\DSAKeyValueType|null
     */
    public function getDSAKeyValue()
    {
        return $this->DSAKeyValue;
    }
    /**
     * Set DSAKeyValue value
     * @param \Sabre\UpdateReservation\StructType\DSAKeyValueType $dSAKeyValue
     * @return \Sabre\UpdateReservation\StructType\KeyValueType
     */
    public function setDSAKeyValue(\Sabre\UpdateReservation\StructType\DSAKeyValueType $dSAKeyValue = null)
    {
        $this->DSAKeyValue = $dSAKeyValue;
        return $this;
    }
    /**
     * Get RSAKeyValue value
     * @return \Sabre\UpdateReservation\StructType\RSAKeyValueType|null
     */
    public function getRSAKeyValue()
    {
        return $this->RSAKeyValue;
    }
    /**
     * Set RSAKeyValue value
     * @param \Sabre\UpdateReservation\StructType\RSAKeyValueType $rSAKeyValue
     * @return \Sabre\UpdateReservation\StructType\KeyValueType
     */
    public function setRSAKeyValue(\Sabre\UpdateReservation\StructType\RSAKeyValueType $rSAKeyValue = null)
    {
        $this->RSAKeyValue = $rSAKeyValue;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Sabre\UpdateReservation\StructType\KeyValueType::setAny()
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
     * @return \Sabre\UpdateReservation\StructType\KeyValueType
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
     * @return \Sabre\UpdateReservation\StructType\KeyValueType
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
