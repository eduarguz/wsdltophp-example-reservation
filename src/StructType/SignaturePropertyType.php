<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignaturePropertyType StructType
 * Meta informations extracted from the WSDL
 * - mixed: true
 * @subpackage Structs
 */
class SignaturePropertyType extends AbstractStructBase
{
    /**
     * The Target
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $Target;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - use: optional
     * @var \Sabre\UpdateReservation\StructType\ID
     */
    public $Id;
    /**
     * Constructor method for SignaturePropertyType
     * @uses SignaturePropertyType::setTarget()
     * @uses SignaturePropertyType::setAny()
     * @uses SignaturePropertyType::setId()
     * @param string $target
     * @param \DOMDocument $any
     * @param \Sabre\UpdateReservation\StructType\ID $id
     */
    public function __construct($target = null, \DOMDocument $any = null, \Sabre\UpdateReservation\StructType\ID $id = null)
    {
        $this
            ->setTarget($target)
            ->setAny($any)
            ->setId($id);
    }
    /**
     * Get Target value
     * @return string
     */
    public function getTarget()
    {
        return $this->Target;
    }
    /**
     * Set Target value
     * @param string $target
     * @return \Sabre\UpdateReservation\StructType\SignaturePropertyType
     */
    public function setTarget($target = null)
    {
        // validation for constraint: string
        if (!is_null($target) && !is_string($target)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($target)), __LINE__);
        }
        $this->Target = $target;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Sabre\UpdateReservation\StructType\SignaturePropertyType::setAny()
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
     * @return \Sabre\UpdateReservation\StructType\SignaturePropertyType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
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
     * @return \Sabre\UpdateReservation\StructType\SignaturePropertyType
     */
    public function setId(\Sabre\UpdateReservation\StructType\ID $id = null)
    {
        $this->Id = $id;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\SignaturePropertyType
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
