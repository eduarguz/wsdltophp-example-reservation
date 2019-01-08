<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorList StructType
 * @subpackage Structs
 */
class ErrorList extends AbstractStructBase
{
    /**
     * The highestSeverity
     * Meta informations extracted from the WSDL
     * - use: required
     * @var string
     */
    public $highestSeverity;
    /**
     * The Error
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: tns:Error
     * @var \Sabre\UpdateReservation\StructType\Error[]
     */
    public $Error;
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
     * Constructor method for ErrorList
     * @uses ErrorList::setHighestSeverity()
     * @uses ErrorList::setError()
     * @uses ErrorList::setAny()
     * @uses ErrorList::setId()
     * @uses ErrorList::setVersion()
     * @param string $highestSeverity
     * @param \Sabre\UpdateReservation\StructType\Error[] $error
     * @param \DOMDocument $any
     * @param \Sabre\UpdateReservation\StructType\ID $id
     * @param string $version
     */
    public function __construct($highestSeverity = null, array $error = array(), \DOMDocument $any = null, \Sabre\UpdateReservation\StructType\ID $id = null, $version = null)
    {
        $this
            ->setHighestSeverity($highestSeverity)
            ->setError($error)
            ->setAny($any)
            ->setId($id)
            ->setVersion($version);
    }
    /**
     * Get highestSeverity value
     * @return string
     */
    public function getHighestSeverity()
    {
        return $this->highestSeverity;
    }
    /**
     * Set highestSeverity value
     * @uses \Sabre\UpdateReservation\EnumType\Severity_type::valueIsValid()
     * @uses \Sabre\UpdateReservation\EnumType\Severity_type::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $highestSeverity
     * @return \Sabre\UpdateReservation\StructType\ErrorList
     */
    public function setHighestSeverity($highestSeverity = null)
    {
        // validation for constraint: enumeration
        if (!\Sabre\UpdateReservation\EnumType\Severity_type::valueIsValid($highestSeverity)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $highestSeverity, implode(', ', \Sabre\UpdateReservation\EnumType\Severity_type::getValidValues())), __LINE__);
        }
        $this->highestSeverity = $highestSeverity;
        return $this;
    }
    /**
     * Get Error value
     * @return \Sabre\UpdateReservation\StructType\Error[]|null
     */
    public function getError()
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Error[] $error
     * @return \Sabre\UpdateReservation\StructType\ErrorList
     */
    public function setError(array $error = array())
    {
        foreach ($error as $errorListErrorItem) {
            // validation for constraint: itemType
            if (!$errorListErrorItem instanceof \Sabre\UpdateReservation\StructType\Error) {
                throw new \InvalidArgumentException(sprintf('The Error property can only contain items of \Sabre\UpdateReservation\StructType\Error, "%s" given', is_object($errorListErrorItem) ? get_class($errorListErrorItem) : gettype($errorListErrorItem)), __LINE__);
            }
        }
        $this->Error = $error;
        return $this;
    }
    /**
     * Add item to Error value
     * @throws \InvalidArgumentException
     * @param \Sabre\UpdateReservation\StructType\Error $item
     * @return \Sabre\UpdateReservation\StructType\ErrorList
     */
    public function addToError(\Sabre\UpdateReservation\StructType\Error $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Sabre\UpdateReservation\StructType\Error) {
            throw new \InvalidArgumentException(sprintf('The Error property can only contain items of \Sabre\UpdateReservation\StructType\Error, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Error[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @uses \Sabre\UpdateReservation\StructType\ErrorList::setAny()
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
     * @return \Sabre\UpdateReservation\StructType\ErrorList
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
     * @return \Sabre\UpdateReservation\StructType\ErrorList
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
     * @return \Sabre\UpdateReservation\StructType\ErrorList
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
     * @return \Sabre\UpdateReservation\StructType\ErrorList
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
