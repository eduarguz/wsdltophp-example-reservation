<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalContentType StructType
 * @subpackage Structs
 */
class AdditionalContentType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The persist
     * Meta informations extracted from the WSDL
     * - default: false
     * @var bool
     */
    public $persist;
    /**
     * The name
     * @var string
     */
    public $name;
    /**
     * Constructor method for AdditionalContentType
     * @uses AdditionalContentType::setAny()
     * @uses AdditionalContentType::setPersist()
     * @uses AdditionalContentType::setName()
     * @param \DOMDocument $any
     * @param bool $persist
     * @param string $name
     */
    public function __construct(\DOMDocument $any = null, $persist = false, $name = null)
    {
        $this
            ->setAny($any)
            ->setPersist($persist)
            ->setName($name);
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Sabre\UpdateReservation\StructType\AdditionalContentType::setAny()
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
     * @return \Sabre\UpdateReservation\StructType\AdditionalContentType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = $any;
        return $this;
    }
    /**
     * Get persist value
     * @return bool|null
     */
    public function getPersist()
    {
        return $this->persist;
    }
    /**
     * Set persist value
     * @param bool $persist
     * @return \Sabre\UpdateReservation\StructType\AdditionalContentType
     */
    public function setPersist($persist = false)
    {
        // validation for constraint: boolean
        if (!is_null($persist) && !is_bool($persist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($persist)), __LINE__);
        }
        $this->persist = $persist;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Sabre\UpdateReservation\StructType\AdditionalContentType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AdditionalContentType
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
