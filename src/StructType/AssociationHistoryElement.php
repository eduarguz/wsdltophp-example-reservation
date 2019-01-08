<?php

namespace Sabre\UpdateReservation\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssociationHistoryElement StructType
 * @subpackage Structs
 */
class AssociationHistoryElement extends AbstractStructBase
{
    /**
     * The Type
     * @var string
     */
    public $Type;
    /**
     * The Content
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Content;
    /**
     * Constructor method for AssociationHistoryElement
     * @uses AssociationHistoryElement::setType()
     * @uses AssociationHistoryElement::setContent()
     * @param string $type
     * @param string $content
     */
    public function __construct($type = null, $content = null)
    {
        $this
            ->setType($type)
            ->setContent($content);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Sabre\UpdateReservation\StructType\AssociationHistoryElement
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Content value
     * @return string|null
     */
    public function getContent()
    {
        return $this->Content;
    }
    /**
     * Set Content value
     * @param string $content
     * @return \Sabre\UpdateReservation\StructType\AssociationHistoryElement
     */
    public function setContent($content = null)
    {
        // validation for constraint: string
        if (!is_null($content) && !is_string($content)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($content)), __LINE__);
        }
        $this->Content = $content;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Sabre\UpdateReservation\StructType\AssociationHistoryElement
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
